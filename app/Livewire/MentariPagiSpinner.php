<?php

namespace App\Livewire;

use App\Models\Attendance;
use App\Models\Jamaah;
use App\Models\WinnerHistory;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.spinner')]
#[Title('Mentari Pagi Spinner')]
class MentariPagiSpinner extends Component
{
    public ?string $selectedDate = null;

    public string $startTime = '05:00';

    public string $endTime = '07:00';

    public ?string $prize = null;

    public Collection $eligibleCandidates;

    public ?Jamaah $winner = null;

    public bool $isSpinning = false;

    public function mount()
    {
        $this->selectedDate = now()->toDateString();
        $this->prize = 'Tumbler Mentari Pagi';
        $this->loadEligibleCandidates();
    }

    public function updatedSelectedDate()
    {
        $this->loadEligibleCandidates();
    }

    public function updatedStartTime()
    {
        $this->loadEligibleCandidates();
    }

    public function updatedEndTime()
    {
        $this->loadEligibleCandidates();
    }

    public function loadEligibleCandidates()
    {
        if (! $this->selectedDate) {
            $this->eligibleCandidates = collect();

            return;
        }

        $attendances = Attendance::whereDate('scanned_at', $this->selectedDate)
            ->whereTime('scanned_at', '>=', $this->startTime.':00')
            ->whereTime('scanned_at', '<=', $this->endTime.':00')
            ->whereHas('jamaah', function ($query) {
                $query->whereNotIn('id', function ($subQuery) {
                    $subQuery->select('jamaah_id')
                        ->from('winner_histories')
                        ->whereDate('drawn_at', $this->selectedDate);
                });
            })
            ->with('jamaah')
            ->get();

        if ($attendances->isEmpty()) {
            $this->eligibleCandidates = collect();

            return;
        }

        $this->eligibleCandidates = $attendances->map(function ($attendance) {
            return $attendance->jamaah;
        })
            ->filter() // Memastikan tidak ada data jamaah yang null (jika ada relasi yang terhapus)
            ->unique('id')
            ->values();
    }

    public function spin()
    {
        if ($this->eligibleCandidates->isEmpty()) {
            session()->flash('error', 'No eligible candidates found for the selected date.');

            return;
        }

        // Simulate spinning animation delay for UI
        sleep(2);

        $this->winner = $this->eligibleCandidates->random();

        // Record the winner
        WinnerHistory::create([
            'jamaah_id' => $this->winner->id,
            'prize' => $this->prize,
            'rfid_code' => $this->winner->rfid,
            'drawn_at' => $this->selectedDate,
            'notes' => "Won {$this->prize} in Mentari Pagi draw on {$this->selectedDate}",
        ]);

        // Reload candidates to exclude the winner
        $this->loadEligibleCandidates();

        session()->flash('success', "{$this->winner->name} has won {$this->prize}!");

        $this->dispatch('winner-selected', name: $this->winner->name);
    }

    public function getEligibleCountProperty()
    {
        return $this->eligibleCandidates->count();
    }

    public function getRecentWinnersProperty()
    {
        return WinnerHistory::with('jamaah')
            ->orderBy('drawn_at', 'desc')
            ->limit(10)
            ->get();
    }

    public function render()
    {
        return view('livewire.mentari-pagi-spinner');
    }
}
