<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BKK SMK Hebat - Portal Karir Alumni</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,600,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#2563EB', // Blue-600
                        secondary: '#1E40AF', // Blue-800
                    }
                }
            }
        }
    </script>
</head>
<body class="antialiased text-gray-800 bg-gray-50 font-sans">

    <nav class="bg-white shadow-sm fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center text-white font-bold">B</div>
                    <span class="font-bold text-xl tracking-tight text-gray-900">BKK SMK Hebat</span>
                </div>

                <div class="flex items-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm font-semibold text-gray-700 hover:text-primary transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-600 hover:text-primary transition">Masuk</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="hidden sm:block px-4 py-2 text-sm font-semibold text-white bg-primary rounded-full hover:bg-secondary transition shadow-lg shadow-blue-500/30">
                                    Daftar Alumni
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <section class="pt-32 pb-20 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="z-10">
                    <div class="inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider text-blue-600 uppercase bg-blue-100 rounded-full">
                        Eksklusif Alumni SMK
                    </div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                        Karir Impian Sesuai <br>
                        <span class="text-primary">Jurusan Keahlianmu</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Platform resmi bursa kerja khusus. Kami menghubungkan alumni dengan perusahaan mitra secara terarah.
                        Lamar pekerjaan yang valid, terverifikasi, dan sesuai kompetensi juruanmu.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('login') }}" class="flex items-center justify-center px-8 py-3 text-base font-semibold text-white bg-primary rounded-xl hover:bg-secondary transition shadow-lg shadow-blue-500/40">
                            Mulai Cari Kerja
                        </a>
                        <a href="#features" class="flex items-center justify-center px-8 py-3 text-base font-semibold text-gray-700 bg-gray-100 rounded-xl hover:bg-gray-200 transition">
                            Pelajari Fitur
                        </a>
                    </div>

                    <div class="mt-8 flex items-center gap-4 text-sm text-gray-500">
                        <div class="flex -space-x-2">
                            <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=1" alt="">
                            <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=2" alt="">
                            <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=3" alt="">
                        </div>
                        <p>Bergabung dengan <span class="font-bold text-gray-900">1,200+ Alumni</span> lainnya.</p>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute -top-10 -right-10 w-72 h-72 bg-blue-100 rounded-full blur-3xl opacity-50"></div>
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                         alt="Team working"
                         class="relative rounded-2xl shadow-2xl transform hover:scale-[1.02] transition duration-500 border-4 border-white object-cover h-[400px] w-full">

                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-xl border border-gray-100 hidden md:block">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Status Lamaran</p>
                                <p class="text-sm font-bold text-gray-900">Wawancara Dijadwalkan</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="features" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb
