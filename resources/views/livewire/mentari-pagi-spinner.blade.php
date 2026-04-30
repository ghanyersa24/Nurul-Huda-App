<div class="min-h-screen bg-gradient-to-br from-slate-50 via-emerald-50/40 to-teal-50/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-10 text-center">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100/70 text-emerald-700 text-xs font-medium mb-3 backdrop-blur-sm">
                <span class="rounded-full bg-emerald-500 animate-pulse"></span>
                Live Draw
            </div>
            <h1
                class="text-4xl font-bold tracking-tight bg-gradient-to-r from-emerald-900 via-emerald-700 to-teal-600 bg-clip-text text-transparent">
                Mentari Pagi Spin Wheel
            </h1>
            <p class="mt-3 text-slate-600 text-base">
                Randomly select lucky attendees from Mentari Pagi prayer sessions.
            </p>
        </div>

        <!-- Flash Messages -->
        @if (session()->has('success'))
            <div
                class="mb-6 bg-white/80 backdrop-blur-md border border-emerald-200/60 rounded-2xl p-4 shadow-sm shadow-emerald-100/50 flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <p class="text-emerald-900 font-medium">{{ session('success') }}</p>
            </div>
        @endif

        @if (session()->has('error'))
            <div
                class="mb-6 bg-white/80 backdrop-blur-md border border-red-200/60 rounded-2xl p-4 shadow-sm shadow-red-100/50 flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-red-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <p class="text-red-900 font-medium">{{ session('error') }}</p>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <!-- Left Column: Candidates -->
            <div class="lg:col-span-3">
                <div
                    class="bg-white/70 backdrop-blur-xl rounded-2xl shadow-xl shadow-emerald-900/5 border border-white/60 p-6 sticky top-6">
                    <div class="flex items-center justify-between mb-5">
                        <div>
                            <h2 class="text-lg font-bold text-slate-900">Candidates</h2>
                            <p class="text-xs text-slate-500 mt-0.5">Checked in attendees</p>
                        </div>
                        <span
                            class="bg-gradient-to-br from-emerald-500 to-teal-600 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-sm shadow-emerald-500/30">
                            {{ $this->eligibleCount }}
                        </span>
                    </div>

                    <div class="space-y-2 max-h-[28rem] overflow-y-auto pr-1 -mr-1 scroll-smooth">
                        @forelse($this->eligibleCandidates as $candidate)
                            <div wire:key="list-candidate-{{ $candidate->id }}"
                                class="group flex items-center gap-3 p-3 rounded-xl border border-slate-100 hover:border-emerald-200 hover:bg-emerald-50/50 transition-all duration-200">
                                <div
                                    class="w-9 h-9 rounded-xl bg-gradient-to-br from-emerald-100 to-teal-100 text-emerald-800 flex items-center justify-center font-bold text-xs shrink-0 ring-1 ring-emerald-200/50">
                                    {{ strtoupper(substr($candidate->name, 0, 2)) }}
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="font-semibold text-sm text-slate-900 truncate">{{ $candidate->name }}
                                    </div>
                                    <div class="text-xs text-slate-400 truncate font-mono">{{ $candidate->rfid }}</div>
                                </div>
                                <div
                                    class="w-2 h-2 rounded-full bg-emerald-500 group-hover:scale-125 transition-transform">
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-12">
                                <div
                                    class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-slate-100 flex items-center justify-center">
                                    <svg class="w-7 h-7 text-slate-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="text-sm font-medium text-slate-600">No candidates yet</p>
                                <p class="text-xs text-slate-400 mt-1">Check attendance for selected date</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Center Column: The Wheel -->
            <div class="lg:col-span-6 flex flex-col items-center justify-start">
                <div class="w-full max-w-lg aspect-square relative flex items-center justify-center mb-10">
                    <!-- Glow Effect -->
                    <div
                        class="absolute inset-0 rounded-full bg-gradient-to-br from-emerald-400/30 via-teal-300/20 to-transparent blur-3xl">
                    </div>

                    <!-- Wheel Decorative Outer Ring -->
                    <div
                        class="absolute inset-0 rounded-full bg-gradient-to-br from-white via-emerald-50 to-teal-100 shadow-2xl shadow-emerald-500/20">
                    </div>
                    <div class="absolute inset-2 rounded-full border border-emerald-200/60"></div>

                    @php
                        $count = $this->eligibleCount;
                        $conicGradient = 'conic-gradient(#f3f4f6 0deg 360deg)';
                        $sliceColors = [];

                        if ($count > 0) {
                            $sliceAngle = 360 / $count;
                            $gradientParts = [];

                            $baseColors = ['#065f46', '#a7f3d0'];
                            if ($count % 2 !== 0 && $count > 1) {
                                $baseColors = ['#065f46', '#a7f3d0', '#10b981'];
                            }

                            for ($i = 0; $i < $count; $i++) {
                                $color = $baseColors[$i % count($baseColors)];
                                $sliceColors[] = $color;
                                $startAngle = $i * $sliceAngle;
                                $endAngle = ($i + 1) * $sliceAngle;
                                $gradientParts[] = "{$color} {$startAngle}deg {$endAngle}deg";
                            }

                            $conicGradient = 'conic-gradient(' . implode(', ', $gradientParts) . ')';
                        }

                        $textSize = 'text-lg';
                        if ($count > 12) {
                            $textSize = 'text-base';
                        }
                        if ($count > 24) {
                            $textSize = 'text-sm';
                        }
                        if ($count > 40) {
                            $textSize = 'text-[10px]';
                        }
                        if ($count > 60) {
                            $textSize = 'hidden';
                        }
                    @endphp

                    <!-- The Wheel -->
                    <div wire:key="the-wheel"
                        class="absolute inset-5 rounded-full overflow-hidden ring-4 ring-white shadow-2xl z-10"
                        wire:loading.class="animate-[spin_1s_linear_infinite]" wire:target="spin"
                        style="background: {{ $conicGradient }};">

                        <!-- Names Overlay -->
                        @if ($count > 0)
                            @foreach ($this->eligibleCandidates as $index => $candidate)
                                @php
                                    $color = $sliceColors[$index];
                                    $textColor = in_array($color, ['#065f46', '#10b981'])
                                        ? 'text-white'
                                        : 'text-emerald-900';
                                    $rotation = $index * $sliceAngle + $sliceAngle / 2 - 90;
                                    $firstName = explode(' ', trim($candidate->name))[0];
                                @endphp
                                <div wire:key="wheel-candidate-{{ $candidate->id }}"
                                    class="absolute inset-0 pointer-events-none"
                                    style="transform: rotate({{ $rotation }}deg);">
                                    <div
                                        class="absolute right-6 left-[calc(50%+30px)] h-full flex items-center justify-end">
                                        <span
                                            class="font-bold tracking-wide truncate block w-full text-right {{ $textSize }} {{ $textColor }} drop-shadow-sm">
                                            {{ $firstName }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Center Hub -->
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-30">
                        <div
                            class="w-20 h-20 rounded-full bg-white shadow-2xl flex items-center justify-center ring-4 ring-emerald-700/90">
                            <div
                                class="w-full h-full rounded-full bg-gradient-to-br from-emerald-600 to-teal-700 flex items-center justify-center">
                                <svg class="w-9 h-9 text-yellow-300 drop-shadow" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Wheel Pointer -->
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 z-50 flex flex-col items-center">
                        <div class="w-7 h-10 bg-gradient-to-b from-red-500 to-red-700 rounded-t-lg shadow-lg"></div>
                        <div
                            class="w-0 h-0 border-l-[18px] border-l-transparent border-r-[18px] border-r-transparent border-t-[22px] border-t-red-700 -mt-1 drop-shadow-xl">
                        </div>
                    </div>
                </div>

                <div class="text-center w-full max-w-md space-y-5">
                    @if ($this->winner)
                        <div wire:key="winner-alert-{{ $this->winner->id }}"
                            class="relative overflow-hidden bg-gradient-to-br from-emerald-600 via-emerald-700 to-teal-800 rounded-3xl p-6 shadow-2xl shadow-emerald-600/30 text-white animate-winner-pop ring-4 ring-yellow-300/60">
                            <div class="absolute -top-12 -right-12 w-40 h-40 bg-yellow-300/20 rounded-full blur-2xl">
                            </div>
                            <div class="absolute -bottom-12 -left-12 w-40 h-40 bg-teal-300/20 rounded-full blur-2xl">
                            </div>

                            <div class="relative">
                                <div class="flex items-center justify-center mb-3">
                                    <div
                                        class="w-14 h-14 rounded-full bg-white/15 backdrop-blur-sm flex items-center justify-center ring-2 ring-white/30">
                                        <svg class="w-8 h-8 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-xs uppercase tracking-widest text-emerald-200/80 font-semibold mb-1">🎉
                                    Winner 🎉</p>
                                <p class="text-2xl font-bold mb-1">{{ $this->winner->name }}</p>
                                <p class="text-sm text-emerald-100/90">Won: <span
                                        class="font-semibold text-yellow-200">{{ $this->prize }}</span></p>
                            </div>
                        </div>
                    @endif

                    <button wire:key="spin-button" wire:click="spin" @if ($this->eligibleCandidates->isEmpty()) disabled @endif
                        wire:loading.attr="disabled" wire:target="spin"
                        class="group relative w-full sm:w-auto px-14 py-4 bg-gradient-to-br from-emerald-600 to-teal-700 text-white rounded-2xl font-bold text-lg shadow-xl shadow-emerald-600/30 hover:shadow-2xl hover:shadow-emerald-600/40 hover:-translate-y-0.5 active:translate-y-0 transition-all disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:translate-y-0 disabled:hover:shadow-xl flex items-center gap-3 mx-auto overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                        </div>
                        <div wire:loading.remove wire:target="spin" class="relative flex items-center gap-3">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Spin Now</span>
                        </div>
                        <div wire:loading wire:target="spin" class="relative flex items-center gap-3">
                            <svg class="animate-spin w-6 h-6" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                            <span>Spinning...</span>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Right Column: Settings & History -->
            <div class="lg:col-span-3 space-y-6">
                <!-- Prize Config -->
                <div
                    class="bg-white/70 backdrop-blur-xl rounded-2xl shadow-xl shadow-emerald-900/5 border border-white/60 p-6">
                    <h3 class="text-lg font-bold text-slate-900 mb-1 flex items-center gap-2">
                        <span
                            class="w-7 h-7 rounded-lg bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center shadow-sm shadow-emerald-500/30">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 010 2h3a1 1 0 011 1v3a1 1 0 01-2 0V6h-3a1 1 0 010-2h1zm0 8a1 1 0 010 2h3v2a1 1 0 102 0v-3a1 1 0 00-1-1h-3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        Draw Settings
                    </h3>
                    <p class="text-xs text-slate-500 mb-5 ml-9">Configure date, time range, and prize</p>

                    <div class="space-y-4">
                        <div>
                            <label
                                class="block text-xs font-semibold text-slate-600 mb-2 uppercase tracking-wide">Attendance
                                Date</label>
                            <input type="date" wire:model.live="selectedDate"
                                class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-emerald-500/40 focus:border-emerald-500 transition-all">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-600 mb-2 uppercase tracking-wide">Time
                                Range</label>
                            <div class="flex items-center gap-2">
                                <input type="time" wire:model.live="startTime"
                                    class="flex-1 min-w-0 px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-emerald-500/40 focus:border-emerald-500 transition-all">
                                <span class="text-slate-400 text-xs font-medium">to</span>
                                <input type="time" wire:model.live="endTime"
                                    class="flex-1 min-w-0 px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-emerald-500/40 focus:border-emerald-500 transition-all">
                            </div>
                            <p class="text-[11px] text-slate-400 mt-1.5">Default: 05:00 – 07:00</p>
                        </div>

                        <div>
                            <label
                                class="block text-xs font-semibold text-slate-600 mb-2 uppercase tracking-wide">Current
                                Prize</label>
                            <input type="text" wire:model="prize" placeholder="Enter the prize"
                                class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-500/40 focus:border-emerald-500 transition-all">
                        </div>
                    </div>
                </div>

                <!-- Winner History -->
                <div
                    class="bg-white/70 backdrop-blur-xl rounded-2xl shadow-xl shadow-emerald-900/5 border border-white/60 p-6">
                    <h3 class="text-lg font-bold text-slate-900 mb-1 flex items-center gap-2">
                        <span
                            class="w-7 h-7 rounded-lg bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center shadow-sm shadow-amber-500/30">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        Recent Winners
                    </h3>
                    <p class="text-xs text-slate-500 mb-5 ml-9">Last 10 draws</p>

                    <div class="space-y-1 max-h-80 overflow-y-auto pr-1 -mr-1">
                        @forelse($this->recentWinners as $index => $winner)
                            <div wire:key="winner-{{ $winner->id }}"
                                class="relative flex items-start gap-3 p-3 rounded-xl transition-colors {{ $index === 0 && $this->winner ? 'bg-gradient-to-r from-yellow-50 via-amber-50 to-orange-50 ring-2 ring-amber-300/60 animate-winner-glow' : 'hover:bg-slate-50' }}">
                                <div class="relative shrink-0 mt-0.5">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-100 to-teal-100 text-emerald-700 flex items-center justify-center text-xs font-bold ring-1 ring-emerald-200/50">
                                        {{ strtoupper(substr($winner->jamaah->name ?? '?', 0, 2)) }}
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex justify-between items-start gap-2 mb-0.5">
                                        <div class="font-semibold text-sm text-slate-900 truncate">
                                            {{ $winner->jamaah->name }}</div>
                                        <div class="text-[10px] text-slate-400 font-medium shrink-0 mt-0.5">
                                            {{ $winner->drawn_at->format('M j') }}</div>
                                    </div>
                                    <div class="text-xs text-slate-500 truncate">🎁 {{ $winner->prize }}</div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-10">
                                <div
                                    class="w-12 h-12 mx-auto mb-2 rounded-2xl bg-slate-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <p class="text-sm font-medium text-slate-600">No winners yet</p>
                                <p class="text-xs text-slate-400 mt-1">Spin the wheel to start</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
    <style>
        @keyframes winner-pop {
            0% { transform: scale(0.85); opacity: 0; }
            60% { transform: scale(1.04); opacity: 1; }
            100% { transform: scale(1); opacity: 1; }
        }
        .animate-winner-pop { animation: winner-pop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) both; }

        @keyframes winner-glow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(251, 191, 36, 0.6); }
            50% { box-shadow: 0 0 0 6px rgba(251, 191, 36, 0); }
        }
        .animate-winner-glow { animation: winner-glow 1.8s ease-in-out infinite; }
    </style>
    <script>
        document.addEventListener('livewire:init', () => {
            const fireConfetti = () => {
                if (typeof confetti !== 'function') return;

                const duration = 2500;
                const end = Date.now() + duration;
                const colors = ['#10b981', '#fbbf24', '#f59e0b', '#065f46', '#a7f3d0', '#ffffff'];

                confetti({
                    particleCount: 120,
                    spread: 90,
                    startVelocity: 55,
                    origin: { y: 0.6 },
                    colors,
                });

                (function frame() {
                    confetti({
                        particleCount: 4,
                        angle: 60,
                        spread: 70,
                        origin: { x: 0, y: 0.7 },
                        colors,
                    });
                    confetti({
                        particleCount: 4,
                        angle: 120,
                        spread: 70,
                        origin: { x: 1, y: 0.7 },
                        colors,
                    });

                    if (Date.now() < end) {
                        requestAnimationFrame(frame);
                    }
                })();
            };

            Livewire.on('winner-selected', () => {
                setTimeout(() => {
                    const card = document.querySelector('[wire\\:key^="winner-alert-"]');
                    if (card) {
                        card.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    fireConfetti();
                }, 80);
            });
        });
    </script>
</div>
