<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Alumni - Budi Santoso</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6', // Blue-500 (Lebih terang agar kontras di hitam)
                        secondary: '#1D4ED8', // Blue-700
                        dark: {
                            900: '#111827', // Gray-900 (Background utama)
                            800: '#1F2937', // Gray-800 (Card background)
                            700: '#374151', // Gray-700 (Border)
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-dark-900 font-sans text-gray-300">

    <nav class="bg-dark-800 border-b border-dark-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <span class="font-bold text-xl text-white">BKK SMK <span class="text-primary">Hebat</span></span>
                <a href="{{ url('/home') }}"
                    class="text-sm font-medium text-gray-400 hover:text-white transition">Kembali ke Dashboard</a>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <div class="relative mb-8">
            <div
                class="h-48 w-full bg-gradient-to-r from-blue-900 to-indigo-900 rounded-t-2xl border-x border-t border-dark-700">
            </div>

            <div class="absolute -bottom-16 left-8 flex items-end">
                <img src="https://i.pravatar.cc/300?img=11" alt="Profile"
                    class="w-32 h-32 rounded-full border-4 border-dark-900 shadow-2xl object-cover">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-20">

            <div class="space-y-6">

                <div class="bg-dark-800 p-6 rounded-2xl shadow-lg border border-dark-700">
                    <h1 class="text-2xl font-bold text-white">Achmad Zaelani Putra</h1>
                    <p class="text-gray-400 mb-4">Lulusan 2025</p>

                    <div
                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-900/50 text-blue-300 border border-blue-800 mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        Rekayasa Perangkat Lunak
                    </div>

                    <div class="flex items-center gap-2 mb-6">
                        <span
                            class="w-3 h-3 bg-green-500 rounded-full shadow-[0_0_10px_rgba(34,197,94,0.6)] animate-pulse"></span>
                        <span class="text-sm font-semibold text-green-400">Siap Bekerja</span>
                    </div>

                    <div class="space-y-3">
                        <button
                            class="w-full flex items-center justify-center px-4 py-2 border border-dark-700 rounded-lg text-sm font-medium text-gray-300 hover:bg-dark-700 hover:text-white transition">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            Download CV & Portofolio
                        </button>

                        @php $isShortlisted = true; @endphp

                        @if ($isShortlisted)
                            <button
                                class="w-full flex items-center justify-center px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium hover:bg-blue-600 transition shadow-lg shadow-blue-500/20">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                                Chat & Interview
                            </button>
                        @else
                            <button disabled
                                class="w-full flex items-center justify-center px-4 py-2 bg-dark-700 text-gray-500 rounded-lg text-sm font-medium cursor-not-allowed border border-dark-600">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                                Chat Terkunci
                            </button>
                            <p class="text-xs text-center text-gray-500 mt-1">Menunggu respon HRD.</p>
                        @endif
                    </div>
                </div>

                <div class="bg-dark-800 p-6 rounded-2xl shadow-lg border border-dark-700">
                    <h3 class="font-bold text-white mb-4">Keahlian Teknis</h3>
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="px-3 py-1 bg-dark-700 text-gray-300 rounded-lg text-xs font-medium border border-dark-600">Laravel</span>
                        <span
                            class="px-3 py-1 bg-dark-700 text-gray-300 rounded-lg text-xs font-medium border border-dark-600">PHP</span>
                        <span
                            class="px-3 py-1 bg-dark-700 text-gray-300 rounded-lg text-xs font-medium border border-dark-600">MySQL</span>
                        <span
                            class="px-3 py-1 bg-dark-700 text-gray-300 rounded-lg text-xs font-medium border border-dark-600">Tailwind
                            CSS</span>
                        <span
                            class="px-3 py-1 bg-dark-700 text-gray-300 rounded-lg text-xs font-medium border border-dark-600">Git</span>
                    </div>
                </div>

                <div class="bg-dark-800 p-6 rounded-2xl shadow-lg border border-dark-700">
                    <h3 class="font-bold text-white mb-4">Kontak</h3>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li class="flex items-center hover:text-gray-200 transition">
                            <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            budi.santoso@smkhebat.sch.id
                        </li>
                        <li class="flex items-center hover:text-gray-200 transition">
                            <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                            </svg>
                            Malang, Jawa Timur
                        </li>
                    </ul>
                </div>

            </div>

            <div class="md:col-span-2 space-y-8">

                <div class="bg-dark-800 p-8 rounded-2xl shadow-lg border border-dark-700">
                    <h3 class="text-lg font-bold text-white mb-4">Tentang Saya</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Saya adalah lulusan SMK jurusan RPL yang memiliki passion besar dalam pengembangan web. Selama
                        sekolah, saya aktif mengikuti kegiatan coding club dan memiliki nilai rata-rata kompetensi
                        kejuruan 90. Saya disiplin, cepat belajar, dan siap berkontribusi dalam tim development.
                    </p>
                </div>

                <div class="bg-dark-800 p-8 rounded-2xl shadow-lg border border-dark-700">
                    <h3 class="text-lg font-bold text-white mb-6 flex items-center">
                        <span class="bg-blue-900/50 text-blue-400 p-2 rounded-lg mr-3 border border-blue-900">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </span>
                        Pengalaman Magang / PKL
                    </h3>

                    <div class="relative border-l-2 border-dark-700 ml-3 space-y-8">
                        <div class="ml-6 relative">
                            <span
                                class="absolute -left-[31px] top-1 w-4 h-4 bg-primary rounded-full border-2 border-dark-800"></span>
                            <h4 class="font-bold text-white text-md">Junior Web Developer (Intern)</h4>
                            <span class="text-sm text-primary font-medium">PT Solusi Digital Kreatif</span>
                            <span class="text-sm text-gray-600 mx-2">•</span>
                            <span class="text-sm text-gray-500">Jan 2024 - Jun 2024 (6 Bulan)</span>
                            <p class="mt-2 text-gray-400 text-sm">
                                Membantu tim backend mengembangkan API menggunakan Laravel, melakukan testing fitur, dan
                                fixing bug pada modul dashboard admin.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-dark-800 p-8 rounded-2xl shadow-lg border border-dark-700">
                    <h3 class="text-lg font-bold text-white mb-6 flex items-center">
                        <span class="bg-purple-900/50 text-purple-400 p-2 rounded-lg mr-3 border border-purple-900">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                            </svg>
                        </span>
                        Pendidikan Formal
                    </h3>

                    <div class="space-y-6">
                        <div
                            class="flex flex-col sm:flex-row justify-between sm:items-start pb-6 border-b border-dark-700 last:border-0 last:pb-0">
                            <div>
                                <h4 class="font-bold text-white">SMK Negeri 4 Kota Tangerang</h4>
                                <p class="text-sm text-gray-400">Rekayasa Perangkat Lunak</p>
                                <div class="mt-2 text-sm text-gray-500">
                                    <span class="font-medium text-gray-300">Nilai Uji Kompetensi:</span> 92.5 (Sangat
                                    Baik)
                                </div>
                            </div>
                            <div
                                class="mt-2 sm:mt-0 text-sm text-gray-400 bg-dark-700 px-3 py-1 rounded-lg inline-block border border-dark-600">
                                2021 - 2024
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
