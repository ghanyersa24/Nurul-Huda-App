@php
    $terkumpul = 408532000;
    $target = 1175600000;
    $percent = min(100, round($terkumpul / $target * 100, 1));
    $rekening = '1782027171';
    $waNumber = '6285335104803';
    $waText = rawurlencode('Assalamualaikum, saya ingin berdonasi untuk wakaf pembangunan Masjid Nurul Huda Ambulu.');

    $progres = [
        ['title' => 'Paving Halaman Parkir', 'status' => 'Selesai', 'img' => asset('images/paving parkiran.png')],
        ['title' => 'Taman Pojok', 'status' => 'Selesai', 'img' => asset('images/taman pojok.png')],
        ['title' => 'Tempat Wudhu Wanita', 'status' => 'Selesai', 'img' => asset('images/tempat wudhu wanita.png')],
        ['title' => 'Tempat Wudhu Pria', 'status' => 'Progres', 'img' => asset('images/tempat wudhu pria.png')],
        ['title' => 'Teras Masjid', 'status' => 'Progres', 'img' => asset('images/teras masjid.png')],
    ];

    $rencana = [
        ['icon' => 'M3 21h18M5 21V8l7-5 7 5v13M9 21v-6h6v6', 'title' => 'Penutupan Sungai / Jembatan'],
        ['icon' => 'M4 21h16M4 10h16M4 14h16M9 21V10m6 11V10', 'title' => 'Pemavingan Halaman Parkir'],
        ['icon' => 'M3 21h18M6 21V10l6-4 6 4v11M10 21v-6h4v6', 'title' => 'Pembangunan Teras Masjid'],
        ['icon' => 'M12 3v18M5 10c0-3.866 3.134-7 7-7s7 3.134 7 7H5z', 'title' => 'Pemasangan 2 Payung Nabawi'],
    ];
@endphp

<x-layouts.app title="Wakaf Pembangunan Masjid Nurul Huda Ambulu">
    <div class="font-sans text-slate-800">

        {{-- HERO --}}
        <section class="relative min-h-[100svh] flex items-end overflow-hidden">
            <img src="{{ asset('images/NH Nabawi.png') }}"
                 alt="Masjid Nurul Huda Ambulu"
                 loading="eager"
                 class="absolute inset-0 w-full h-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-b  via-[#2c368B]/50 to-[#1e79cc]/55"></div>

            <div class="relative w-full px-5 pt-24 pb-28 sm:pb-12 max-w-3xl mx-auto text-white">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/15 backdrop-blur border border-white/30 text-white text-xs font-medium mb-5 animate-[fadeIn_.6s_ease]">
                    <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                    Wakaf Pembangunan Masjid
                </div>

                <h1 class="text-3xl sm:text-5xl font-bold leading-tight tracking-tight animate-[fadeUp_.7s_ease]">
                    Wakaf Pembangunan<br/>
                    <span class="text-[#7ec1ee]">Masjid Nurul Huda</span> Ambulu
                </h1>
                <p class="mt-3 text-base sm:text-lg text-white/90 animate-[fadeUp_.9s_ease]">
                    Setiap donasi adalah investasi akhirat.
                </p>

                {{-- Progress card --}}
                <div class="mt-7 bg-white rounded-2xl shadow-xl p-5 sm:p-6 text-slate-800 animate-[fadeUp_1.1s_ease]">
                    <div class="flex items-baseline justify-between">
                        <div>
                            <p class="text-xs text-slate-500 uppercase tracking-wide">Terkumpul</p>
                            <p class="text-xl sm:text-2xl font-bold text-[#1e79cc]">Rp {{ number_format($terkumpul, 0, ',', '.') }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs text-slate-500 uppercase tracking-wide">Target</p>
                            <p class="text-sm sm:text-base font-semibold text-slate-700">Rp {{ number_format($target, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <div class="mt-4 h-3 w-full bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-[#2c368B] to-[#1e79cc] rounded-full transition-all duration-1000"
                             style="width: {{ $percent }}%"></div>
                    </div>
                    <div class="mt-2 flex justify-between text-xs text-slate-500">
                        <span>{{ $percent }}% tercapai</span>
                        <span>Mari lengkapi bersama</span>
                    </div>

                    <a href="#donasi"
                       class="mt-5 w-full inline-flex items-center justify-center gap-2 bg-gradient-to-r from-[#2c368B] to-[#1e79cc] hover:opacity-95 active:scale-[.98] text-white font-semibold py-4 rounded-xl shadow-lg shadow-[#2c368B]/30 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                        </svg>
                        Donasi Sekarang
                    </a>
                </div>
            </div>
        </section>

        {{-- TENTANG MASJID --}}
        <section class="px-5 py-14 max-w-3xl mx-auto">
            <div class="text-center">
                <span class="text-[#1e79cc] font-semibold text-sm uppercase tracking-widest">Tentang Masjid</span>
                <h2 class="mt-2 text-2xl sm:text-3xl font-bold text-[#2c368B]">Pusat Ibadah & Kegiatan Umat</h2>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Masjid Nurul Huda Ambulu adalah rumah ibadah sekaligus pusat kegiatan keagamaan,
                    pendidikan, dan sosial bagi masyarakat sekitar. Kehadirannya menjadi sumber
                    cahaya yang menerangi langkah umat menuju ridha Allah.
                </p>
            </div>

            <figure class="mt-8 relative bg-white border border-slate-100 rounded-2xl p-6 sm:p-8 shadow-sm">
                <svg class="w-8 h-8 text-[#1e79cc] mb-3 opacity-60" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/>
                </svg>
                <blockquote class="text-slate-800 text-base sm:text-lg italic leading-relaxed">
                    “Siapa yang membangun masjid karena Allah, maka Allah bangunkan baginya rumah di surga.”
                </blockquote>
                <figcaption class="mt-3 text-sm text-[#2c368B] font-medium">— HR. Bukhari & Muslim</figcaption>
            </figure>
        </section>

        {{-- PROGRES PEMBANGUNAN --}}
        <section class="py-14 bg-slate-50/60">
            <div class="px-5 max-w-5xl mx-auto">
                <span class="text-[#1e79cc] font-semibold text-sm uppercase tracking-widest">Progres</span>
                <h2 class="mt-2 text-2xl sm:text-3xl font-bold text-[#2c368B]">Pembangunan yang Sudah Berjalan</h2>
                <p class="mt-2 text-slate-600">
                    <span class="md:hidden">Geser ke samping untuk melihat perkembangan.</span>
                    <span class="hidden md:inline">Tahapan pekerjaan yang telah dan sedang berjalan.</span>
                </p>
            </div>

            {{-- Mobile: horizontal scroll --}}
            <div class="md:hidden mt-6 flex gap-4 overflow-x-auto snap-x snap-mandatory px-5 pb-4 scroll-smooth no-scrollbar">
                @foreach ($progres as $item)
                    <article class="snap-start shrink-0 w-64 bg-white rounded-2xl shadow-sm hover:shadow-md transition overflow-hidden border border-slate-100 flex flex-col">
                        <div class="aspect-[4/3] bg-slate-100 overflow-hidden">
                            <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" loading="lazy"
                                 class="w-full h-full object-cover object-center hover:scale-105 transition duration-500" />
                        </div>
                        <div class="p-4 flex-1 flex flex-col">
                            <span @class([
                                'inline-block self-start text-xs font-semibold px-2.5 py-1 rounded-full',
                                'bg-[#1e79cc]/10 text-[#1e79cc]' => $item['status'] === 'Selesai',
                                'bg-amber-100 text-amber-700' => $item['status'] === 'Progres',
                            ])>
                                {{ $item['status'] }}
                            </span>
                            <h3 class="mt-2 font-semibold text-slate-900">{{ $item['title'] }}</h3>
                        </div>
                    </article>
                @endforeach
                <div class="shrink-0 w-2"></div>
            </div>

            {{-- Desktop: flex wrap, baris kedua otomatis center --}}
            <div class="hidden md:flex mt-8 px-5 max-w-5xl mx-auto flex-wrap justify-center gap-6">
                @foreach ($progres as $item)
                    <article class="w-[calc((100%-3rem)/3)] bg-white rounded-2xl shadow-sm hover:shadow-md transition overflow-hidden border border-slate-100 flex flex-col">
                        <div class="aspect-[4/3] bg-slate-100 overflow-hidden">
                            <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" loading="lazy"
                                 class="w-full h-full object-cover object-center hover:scale-[1.03] transition duration-500" />
                        </div>
                        <div class="p-5 flex-1 flex flex-col">
                            <span @class([
                                'inline-block self-start text-xs font-semibold px-2.5 py-1 rounded-full',
                                'bg-[#1e79cc]/10 text-[#1e79cc]' => $item['status'] === 'Selesai',
                                'bg-amber-100 text-amber-700' => $item['status'] === 'Progres',
                            ])>
                                {{ $item['status'] }}
                            </span>
                            <h3 class="mt-2 font-semibold text-slate-900">{{ $item['title'] }}</h3>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- RENCANA PEMBANGUNAN --}}
        <section class="px-5 py-14 max-w-3xl mx-auto">
            <span class="text-[#1e79cc] font-semibold text-sm uppercase tracking-widest">Rencana</span>
            <h2 class="mt-2 text-2xl sm:text-3xl font-bold text-[#2c368B]">Pembangunan Berikutnya</h2>
            <p class="mt-2 text-slate-600">Mohon doa dan dukungan terbaik dari para muhsinin.</p>

            <ul class="mt-6 grid sm:grid-cols-2 gap-3">
                @foreach ($rencana as $r)
                    <li class="flex items-center gap-4 bg-white border border-slate-100 rounded-2xl p-4 shadow-sm hover:shadow-md transition">
                        <div class="w-12 h-12 shrink-0 rounded-xl bg-gradient-to-br from-[#2c368B] to-[#1e79cc] text-white flex items-center justify-center shadow-md shadow-[#2c368B]/20">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $r['icon'] }}" />
                            </svg>
                        </div>
                        <span class="font-medium text-slate-800">{{ $r['title'] }}</span>
                    </li>
                @endforeach
            </ul>
        </section>

        {{-- AJAKAN DONASI --}}
        <section class="relative overflow-hidden bg-gradient-to-br from-[#2c368B] via-[#2c368B] to-[#1e79cc] text-white">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 20% 20%, white 1px, transparent 1px), radial-gradient(circle at 80% 60%, white 1px, transparent 1px); background-size: 40px 40px;"></div>
            <div class="relative px-5 py-16 max-w-2xl mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-bold leading-tight">
                    Mari Ambil Bagian dalam Pembangunan <span class="text-[#7ec1ee]">Rumah Allah</span>
                </h2>
                <p class="mt-4 text-white/90 text-lg italic">
                    “Setiap bata adalah doa, setiap donasi adalah cahaya.”
                </p>
                <a href="#donasi"
                   class="mt-8 inline-flex items-center justify-center gap-2 bg-white text-[#2c368B] font-bold py-4 px-8 rounded-xl shadow-xl hover:bg-slate-50 active:scale-[.98] transition">
                    Saya Ingin Berdonasi
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </section>

        {{-- INFO DONASI --}}
        <section id="donasi" class="px-5 py-14 max-w-2xl mx-auto scroll-mt-6">
            <div class="text-center">
                <span class="text-[#1e79cc] font-semibold text-sm uppercase tracking-widest">Informasi Donasi</span>
                <h2 class="mt-2 text-2xl sm:text-3xl font-bold text-[#2c368B]">Salurkan Wakaf Anda</h2>
            </div>

            <div class="mt-8 bg-white border border-slate-100 rounded-2xl shadow-md overflow-hidden">
                <div class="bg-gradient-to-r from-[#2c368B] to-[#1e79cc] text-white p-5">
                    <p class="text-sm opacity-90">Transfer ke</p>
                    <p class="text-xl font-bold">Bank Jatim</p>
                </div>

                <div class="p-5 space-y-4">
                    <div>
                        <p class="text-xs text-slate-500 uppercase tracking-wide">No. Rekening</p>
                        <div class="mt-1 flex items-center gap-2">
                            <p id="rekening" class="text-2xl font-bold tracking-wider text-slate-900">1782 027 171</p>
                            <button onclick="copyRekening()" id="copyBtn"
                                    class="ml-auto inline-flex items-center gap-1.5 bg-[#1e79cc]/10 hover:bg-[#1e79cc]/20 text-[#1e79cc] font-semibold text-sm px-3 py-2 rounded-lg transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                                <span id="copyText">Copy</span>
                            </button>
                        </div>
                    </div>

                    <div class="border-t border-slate-100 pt-4">
                        <p class="text-xs text-slate-500 uppercase tracking-wide">Atas Nama</p>
                        <p class="mt-1 font-semibold text-slate-900">MASJID NURUL HUDA</p>
                    </div>

                    <div class="border-t border-slate-100 pt-4 grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-xs text-slate-500 uppercase tracking-wide">Donasi / Kavling</p>
                            <p class="mt-1 font-bold text-[#1e79cc] text-lg">Rp 300.000</p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 uppercase tracking-wide">Kontak</p>
                            <p class="mt-1 font-semibold text-slate-900">Ferry</p>
                            <p class="text-sm text-slate-600">0853-3510-4803</p>
                        </div>
                    </div>

                    <a href="https://wa.me/{{ $waNumber }}?text={{ $waText }}" target="_blank" rel="noopener"
                       class="mt-2 w-full inline-flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600 active:scale-[.98] text-white font-semibold py-4 rounded-xl shadow-lg shadow-green-500/30 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163a11.867 11.867 0 01-1.587-5.946C.16 5.335 5.495 0 12.05 0a11.817 11.817 0 018.413 3.488 11.824 11.824 0 013.48 8.414c-.003 6.557-5.338 11.892-11.893 11.892a11.9 11.9 0 01-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884a9.86 9.86 0 001.51 5.26l-.999 3.648 3.978-1.607zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.149-.173.198-.297.297-.495.099-.198.05-.372-.025-.521-.074-.149-.669-1.612-.916-2.207-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.71.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z"/>
                        </svg>
                        Konfirmasi via WhatsApp
                    </a>
                </div>
            </div>
        </section>

        {{-- FOOTER --}}
        <footer class="bg-[#2c368B] text-white/70 py-8 px-5 text-center text-sm pb-24 sm:pb-8">
            <p class="font-semibold text-white">Masjid Nurul Huda Ambulu</p>
            <p class="mt-2">&copy; 2026 Suara Muhammadiyah Ambulu. <br> All Rights Reserved.</p>
        </footer>

        {{-- STICKY CTA (mobile) --}}
        <div class="fixed bottom-0 inset-x-0 z-40 sm:hidden p-3 bg-gradient-to-t from-white via-white to-white/80 backdrop-blur border-t border-slate-200">
            <a href="#donasi"
               class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-[#2c368B] to-[#1e79cc] active:scale-[.98] text-white font-bold py-3.5 rounded-xl shadow-lg shadow-[#2c368B]/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                </svg>
                Donasi Sekarang
            </a>
        </div>
    </div>

    @push('styles')
    @endpush

    <style>
        @keyframes fadeIn { from { opacity: 0 } to { opacity: 1 } }
        @keyframes fadeUp { from { opacity: 0; transform: translateY(16px) } to { opacity: 1; transform: translateY(0) } }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        html { scroll-behavior: smooth; }
    </style>

    <script>
        function copyRekening() {
            const text = '{{ $rekening }}';
            const btn = document.getElementById('copyText');
            navigator.clipboard.writeText(text).then(() => {
                btn.textContent = 'Tersalin!';
                setTimeout(() => btn.textContent = 'Copy', 1800);
            }).catch(() => {
                const ta = document.createElement('textarea');
                ta.value = text; document.body.appendChild(ta);
                ta.select(); document.execCommand('copy'); ta.remove();
                btn.textContent = 'Tersalin!';
                setTimeout(() => btn.textContent = 'Copy', 1800);
            });
        }
    </script>
</x-layouts.app>
