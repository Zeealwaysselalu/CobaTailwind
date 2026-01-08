<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profil - BKK SMK Hebat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1D4ED8',
                        dark: {
                            900: '#111827', // Main Bg
                            800: '#1F2937', // Card Bg
                            700: '#374151', // Border/Input
                            600: '#4B5563', // Input Text
                        }
                    }
                }
            }
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <x-script-j-s>
    </x-script-j-s>

</head>

<body class="bg-dark-900 font-sans text-gray-300">

    <x-notification>
    </x-notification>

    <nav class="bg-dark-800 border-b border-dark-700 sticky top-0 z-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <span class="font-bold text-lg text-white">Edit Profil</span>
                <a href="/profile/{{ $dataprofil->slug }}" class="text-sm font-medium text-gray-400 hover:text-white transition">Batal &
                    Kembali</a>
            </div>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <div class="bg-dark-800 rounded-2xl border border-dark-700 overflow-hidden mb-8">
                <div class="p-6 border-b border-dark-700">
                    <h2 class="text-lg font-bold text-white">Foto Profil</h2>
                    <p class="text-sm text-gray-400">Wajah profesionalmu di mata perusahaan.</p>
                </div>

                <div class="p-6 flex flex-col sm:flex-row items-center gap-8">

                    <div class="relative group">
                        <div
                            class="w-32 h-32 rounded-full p-1 border-2 border-dashed border-dark-600 group-hover:border-primary transition duration-300">
                            <img id="avatar-preview"
                                src="{{ $dataprofil->image ? asset('storage/images/' . $dataprofil->image) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                class="w-full h-full rounded-full object-cover bg-dark-900">
                        </div>

                        <div id="loading-overlay"
                            class="absolute inset-0 rounded-full flex items-center justify-center bg-dark-900/80 backdrop-blur-sm hidden z-20">
                            <svg class="animate-spin h-8 w-8 text-primary" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </div>

                        <label for="avatar-upload"
                            class="absolute bottom-0 right-0 bg-dark-700 hover:bg-primary text-white p-2.5 rounded-full cursor-pointer shadow-lg border-4 border-dark-800 transition duration-300 z-10 group-hover:scale-110">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </label>

                        <input type="file" id="avatar-upload" class="hidden" accept="image/*" name= "avatar">
                    </div>

                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-white font-medium mb-1">Unggah Foto Baru</h3>
                        <p class="text-gray-500 text-sm mb-4">Format JPG, GIF atau PNG. Maksimal ukuran 2MB.</p>

                        <div id="status-indicator"
                            class="hidden items-center gap-2 text-yellow-500 bg-yellow-500/10 px-3 py-1.5 rounded-lg text-sm w-fit mx-auto sm:mx-0 border border-yellow-500/20">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-yellow-500"></span>
                            </span>
                            Foto belum disimpan (Temporary)
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-dark-800 rounded-2xl border border-dark-700 shadow-lg">
                <div class="p-6 border-b border-dark-700">
                    <h2 class="text-lg font-bold text-white">Informasi Dasar</h2>
                </div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="col-span-2 md:col-span-1">
                        <label class="block text-sm font-medium text-gray-400 mb-2">Nama Lengkap</label>
                        <input type="text" name="username" value="{{ $dataprofil->username }}"
                            class="w-full bg-dark-900 border border-dark-700 rounded-lg px-4 py-2.5 text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition">
                    </div>

                    <div class="col-span-2 md:col-span-1">
                        <label class="block text-sm font-medium text-gray-400 mb-2">Status Saat Ini</label>
                        <select name="status"
                            class="w-full bg-dark-900 border border-dark-700 rounded-lg px-4 py-2.5 text-white focus:ring-2 focus:ring-primary outline-none transition appearance-none">
                            <option value="open" class="bg-gray-800 text-white">🟢 Siap Bekerja</option>
                            <option value="working" class="bg-gray-800 text-white">🔴 Sudah Bekerja</option>
                            <option value="study" class="bg-gray-800 text-white">🔵 Melanjutkan Kuliah</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Kota Domisili</label>
                        <input type="text" name="addres" value="{{ $dataprofil->addres }}"
                            class="w-full bg-dark-900 border border-dark-700 rounded-lg px-4 py-2.5 text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Nomor WhatsApp</label>
                        <input type="text" name="phone" value="{{ $dataprofil->phone }}"
                            class="w-full bg-dark-900 border border-dark-700 rounded-lg px-4 py-2.5 text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Email</label>
                        <input type="text" name="email" value="{{ $dataprofil->email }}"
                            class="w-full bg-dark-900 border border-dark-700 rounded-lg px-4 py-2.5 text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Tahun Kelulusan</label>
                        <input type="text" name="lulusan" value="{{ $dataprofil->lulusan }}"
                            class="w-full bg-dark-900 border border-dark-700 rounded-lg px-4 py-2.5 text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Jurusan</label>

                        <select name="jurusan"
                            class="w-full bg-dark-900 border border-dark-700 rounded-lg px-4 py-2.5 text-white
               focus:ring-2 focus:ring-primary outline-none transition appearance-none">

                            @php
                                $listJurusan = [
                                    'Rekayasa Perangkat Lunak',
                                    'Teknik Kelistrikan',
                                    'Teknik Sipil',
                                    'Teknik Mesin',
                                ];
                            @endphp

                            @foreach ($listJurusan as $jurusan)
                                <option value="{{ $jurusan }}"
                                    {{ $dataprofil->jurusan === $jurusan ? 'selected' : '' }}>
                                    {{ $jurusan }}
                                </option>
                            @endforeach

                        </select>
                    </div>


                    <div class="col-span-2">
                        <label class="block text-sm font-medium text-gray-400 mb-2">Tentang Saya (Bio)</label>
                        <textarea name="about" rows="4"
                            class="w-full bg-dark-900 border border-dark-700 rounded-lg px-4 py-2.5 text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition"
                            placeholder="Ceritakan singkat tentang keahlian dan kepribadianmu...">{{ $dataprofil->about }}</textarea>
                        <p class="text-xs text-gray-500 mt-2 text-right">Maksimal 300 karakter.</p>
                    </div>
                </div>
            </div>

            <div class="bg-dark-800 rounded-2xl border border-dark-700 shadow-lg">
                <div class="p-6 border-b border-dark-700">
                    <h2 class="text-lg font-bold text-white">Keahlian & Skill</h2>
                    <p class="text-sm text-gray-500">Tulis skill teknis yang kamu kuasai (pisahkan dengan koma).
                    </p>
                </div>
                <div class="p-6">
                    <label class="block text-sm font-medium text-gray-400 mb-2">Input Skill</label>
                    <input type="text" placeholder="Contoh: Laravel, Photoshop, Microsoft Excel..."
                        class="w-full bg-dark-900 border border-dark-700 rounded-lg px-4 py-2.5 text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition mb-4">

                    <div class="flex flex-wrap gap-2">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-lg text-sm font-medium bg-blue-900/40 text-blue-300 border border-blue-800">
                            Laravel
                            <button type="button" class="ml-2 text-blue-400 hover:text-white">×</button>
                        </span>
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-lg text-sm font-medium bg-blue-900/40 text-blue-300 border border-blue-800">
                            PHP
                            <button type="button" class="ml-2 text-blue-400 hover:text-white">×</button>
                        </span>
                    </div>
                </div>
            </div>

            <div class="bg-dark-800 rounded-2xl border border-dark-700 shadow-lg">
                <div class="p-6 border-b border-dark-700 flex justify-between items-center">
                    <div>
                        <h2 class="text-lg font-bold text-white">Pengalaman (PKL/Kerja)</h2>
                        <p class="text-sm text-gray-500">Sangat penting untuk lulusan SMK.</p>
                    </div>
                    <button type="button"
                        class="text-sm px-3 py-1.5 bg-dark-700 hover:bg-dark-600 text-white rounded-lg border border-dark-600 transition">
                        + Tambah
                    </button>
                </div>

                <div class="p-6 space-y-6">
                    <div class="bg-dark-900 p-4 rounded-xl border border-dark-700 relative">
                        <button type="button"
                            class="absolute top-4 right-4 text-gray-500 hover:text-red-500 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                </path>
                            </svg>
                        </button>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="md:col-span-2">
                                <label class="block text-xs text-gray-400 mb-1">Nama Perusahaan</label>
                                <input type="text" value="PT Solusi Digital Kreatif"
                                    class="w-full bg-dark-800 border border-dark-600 rounded-lg px-3 py-2 text-sm text-white focus:border-primary outline-none">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-400 mb-1">Posisi</label>
                                <input type="text" value="Junior Web Dev"
                                    class="w-full bg-dark-800 border border-dark-600 rounded-lg px-3 py-2 text-sm text-white focus:border-primary outline-none">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-400 mb-1">Durasi</label>
                                <input type="text" value="Jan 2024 - Jun 2024"
                                    class="w-full bg-dark-800 border border-dark-600 rounded-lg px-3 py-2 text-sm text-white focus:border-primary outline-none">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-xs text-gray-400 mb-1">Deskripsi Pekerjaan</label>
                                <textarea rows="2"
                                    class="w-full bg-dark-800 border border-dark-600 rounded-lg px-3 py-2 text-sm text-white focus:border-primary outline-none">Membantu tim backend mengembangkan API menggunakan Laravel.</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-dark-800 rounded-2xl border border-dark-700 shadow-lg">
                <div class="p-6 border-b border-dark-700">
                    <h2 class="text-lg font-bold text-white">Curriculum Vitae (CV)</h2>
                </div>
                <div class="p-6">
                    <div
                        class="border-2 border-dashed border-dark-600 rounded-xl p-8 text-center hover:border-primary/50 transition bg-dark-900/50 cursor-pointer group">
                        <svg class="w-10 h-10 text-gray-500 group-hover:text-primary mx-auto mb-3 transition"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                            </path>
                        </svg>
                        <p class="text-sm text-gray-300 font-medium">Klik untuk upload file baru</p>
                        <p class="text-xs text-gray-500 mt-1">PDF Only (Max 2MB)</p>
                        <input type="file" name="cv_file" class="hidden">
                    </div>
                    <div class="mt-4 flex items-center gap-3 bg-dark-900 p-3 rounded-lg border border-dark-700">
                        <div class="bg-red-900/30 p-2 rounded text-red-400">PDF</div>
                        <div class="flex-1">
                            <p class="text-sm text-white truncate">CV_Budi_Santoso_2025.pdf</p>
                            <p class="text-xs text-gray-500">Diunggah 2 hari lalu</p>
                        </div>
                        <a href="#" class="text-xs text-primary hover:underline">Lihat</a>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-4 pt-4 pb-12">
                <a href="{{ url('/profile/' . $dataprofil->slug) }}"
                    class="px-6 py-2.5 rounded-xl border border-dark-600 text-gray-300 font-semibold hover:bg-dark-700 hover:text-white transition">
                    Batal
                </a>
                <button type="submit"
                    class="px-8 py-2.5 rounded-xl bg-primary text-white font-bold shadow-lg shadow-blue-500/20 hover:bg-blue-600 transition transform hover:-translate-y-0.5">
                    Simpan Perubahan
                </button>

            </div>

        </form>
    </div>

</body>

</html>
