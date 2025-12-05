<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BKK SMK Hebat - Portal Karir Alumni</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,600,800&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#3B82F6', // Blue-500 (Lebih cerah untuk dark mode)
                        secondary: '#1D4ED8', // Blue-700
                        dark: {
                            900: '#111827', // Gray-900 (Background utama)
                            800: '#1F2937', // Gray-800 (Card/Nav background)
                            700: '#374151', // Gray-700 (Border)
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="antialiased text-gray-300 bg-dark-900 font-sans">

    <nav class="bg-dark-800/80 backdrop-blur-md border-b border-dark-700 fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <nav class="mx-auto flex h-[72px] max-w-[1920px] flex-1 items-center justify-between gap-8"><a
                            data-discover="true" href="/"><img
                                src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                height="40" width="40" decoding="async" loading="eager" class="ml-5"></a>
                    </nav>
                    <span class="font-bold text-xl tracking-tight text-white">BKK SMK Hebat</span>
                </div>

                <div class="flex items-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}"
                                class="text-sm font-semibold text-gray-300 hover:text-white transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm font-semibold text-gray-300 hover:text-white transition">Masuk</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="hidden sm:block px-4 py-2 text-sm font-semibold text-white bg-primary rounded-full hover:bg-blue-600 transition shadow-lg shadow-blue-500/30 border border-blue-400/20">
                                    Daftar Alumni
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <section class="pt-32 pb-20 bg-dark-900 overflow-hidden relative">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-blue-900/20 rounded-full blur-[100px] -z-10">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="z-10">
                    <div
                        class="inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider text-blue-300 uppercase bg-blue-900/40 border border-blue-800 rounded-full">
                        Eksklusif Alumni SMK
                    </div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6">
                        Karir Impian Sesuai <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400">Jurusan
                            Keahlianmu</span>
                    </h1>
                    <p class="text-lg text-gray-400 mb-8 leading-relaxed">
                        Platform resmi bursa kerja khusus. Kami menghubungkan alumni dengan perusahaan mitra secara
                        terarah.
                        Lamar pekerjaan yang valid, terverifikasi, dan sesuai kompetensi.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('login') }}"
                            class="flex items-center justify-center px-8 py-3 text-base font-semibold text-white bg-primary rounded-xl hover:bg-blue-600 transition shadow-lg shadow-blue-500/20 border border-blue-400/20">
                            Mulai Cari Kerja
                        </a>
                        <a href="#features"
                            class="flex items-center justify-center px-8 py-3 text-base font-semibold text-gray-300 bg-dark-800 border border-dark-700 rounded-xl hover:bg-dark-700 transition">
                            Pelajari Fitur
                        </a>
                    </div>

                    <div class="mt-8 flex items-center gap-4 text-sm text-gray-500">
                        <div class="flex -space-x-2">
                            <img class="w-8 h-8 rounded-full border-2 border-dark-900"
                                src="https://i.pravatar.cc/100?img=8" alt="">
                            <img class="w-8 h-8 rounded-full border-2 border-dark-900"
                                src="https://i.pravatar.cc/100?img=12" alt="">
                            <img class="w-8 h-8 rounded-full border-2 border-dark-900"
                                src="https://i.pravatar.cc/100?img=15" alt="">
                        </div>
                        <p class="text-gray-400">Bergabung dengan <span class="font-bold text-white">1,200+
                                Alumni</span> lainnya.</p>
                    </div>
                </div>

                <div class="relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl blur opacity-30">
                    </div>
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                        alt="Team working"
                        class="relative rounded-2xl shadow-2xl border border-dark-700 object-cover h-[400px] w-full grayscale-[20%] hover:grayscale-0 transition duration-700">

                    <div
                        class="absolute -bottom-6 -left-6 bg-dark-800 p-4 rounded-xl shadow-xl border border-dark-700 hidden md:block">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 bg-green-900/30 border border-green-800 rounded-full flex items-center justify-center text-green-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400">Status Lamaran</p>
                                <p class="text-sm font-bold text-white">Wawancara Dijadwalkan</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="features" class="py-20 bg-dark-900 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white">Kenapa Melamar di Sini?</h2>
                <p class="mt-4 text-gray-400">Sistem kami dirancang untuk meningkatkan peluangmu diterima kerja.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-dark-800 p-8 rounded-2xl shadow-lg border border-dark-700 hover:border-primary/50 transition duration-300 group">
                    <div
                        class="w-12 h-12 bg-blue-900/30 border border-blue-800 rounded-xl flex items-center justify-center text-blue-400 mb-6 group-hover:scale-110 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Filter Sesuai Jurusan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Kamu hanya akan bersaing dengan kandidat yang relevan. Alumni TKJ melamar loker IT, Alumni
                        Akuntansi melamar loker Keuangan.
                    </p>
                </div>

                <div
                    class="bg-dark-800 p-8 rounded-2xl shadow-lg border border-dark-700 hover:border-purple-500/50 transition duration-300 group">
                    <div
                        class="w-12 h-12 bg-purple-900/30 border border-purple-800 rounded-xl flex items-center justify-center text-purple-400 mb-6 group-hover:scale-110 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Komunikasi Terarah</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Lolos seleksi awal melalui jawaban Q&A, lalu terhubung langsung dengan HRD melalui fitur chat
                        yang terintegrasi.
                    </p>
                </div>

                <div
                    class="bg-dark-800 p-8 rounded-2xl shadow-lg border border-dark-700 hover:border-green-500/50 transition duration-300 group">
                    <div
                        class="w-12 h-12 bg-green-900/30 border border-green-800 rounded-xl flex items-center justify-center text-green-400 mb-6 group-hover:scale-110 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Mitra Terverifikasi</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Semua perusahaan yang memposting lowongan telah bekerja sama resmi dengan Sekolah. Aman dan
                        bebas penipuan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-black border-t border-dark-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0">
                <span class="text-xl font-bold text-white">SMK CareerHub</span>
                <p class="text-gray-500 text-sm mt-1">Menghubungkan Potensi dengan Peluang.</p>
            </div>
            <div class="flex gap-6">
                <a href="#" class="text-gray-500 hover:text-white transition">Tentang Kami</a>
                <a href="{{ route('login') }}" class="text-gray-500 hover:text-white transition">Login Mitra</a>
                <a href="#" class="text-gray-500 hover:text-white transition">Kontak</a>
            </div>
        </div>
    </footer>

</body>

</html>
