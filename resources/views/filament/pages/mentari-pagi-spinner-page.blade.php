<x-filament-panels::page>
    <div class="-mx-4 sm:-mx-6 lg:-mx-8 -my-6">
        <div class="flex items-center justify-end gap-2 px-4 sm:px-6 lg:px-8 py-3 bg-slate-50 dark:bg-slate-900 border-b border-slate-200 dark:border-slate-700">
            <a href="{{ $this->getSpinnerUrl() }}" target="_blank" rel="noopener"
                class="inline-flex items-center gap-1.5 text-xs font-medium text-emerald-700 hover:text-emerald-800 transition">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
                Buka di tab baru
            </a>
        </div>
        <iframe src="{{ $this->getSpinnerUrl() }}" title="Mentari Pagi Spinner" loading="lazy"
            class="w-full block bg-white" style="height: calc(100vh - 8rem); border: 0;"></iframe>
    </div>
</x-filament-panels::page>
