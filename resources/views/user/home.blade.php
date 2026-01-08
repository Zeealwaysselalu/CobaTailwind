<!DOCTYPE html>

<html lang="en" class="h-full bg-gray-900">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Document</title>

</head>



<body class="h-full">

    <div class="min-h-full">

        <x-navbar>

            <x-slot:title>

                {{ $title }}

            </x-slot:title>

        </x-navbar>

        <x-heade>

            {{ $title }}

        </x-heade>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="h-full">
                        <div
                            class="max-w-sm mx-auto bg-white shadow-lg rounded-sm border border-gray-200 h-full flex flex-col">

                            <div class="flex-grow p-5">
                                <div class="flex justify-between items-start">

                                    <header>
                                        <div class="flex mb-2">
                                            <a class="relative inline-flex items-start mr-5" href="#0">
                                                <div class="absolute top-0 right-0 -mr-2 bg-white rounded-full shadow"
                                                    aria-hidden="true">
                                                    <svg class="w-8 h-8 fill-current text-yellow-500"
                                                        viewBox="0 0 32 32">
                                                        <path
                                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                                                    </svg>
                                                </div>

                                                <img class="rounded-full object-cover"
                                                    src="{{ asset('storage/images/' . $dataprofil->image) }}"
                                                    width="64" height="64" alt="{{ $dataprofil->name }}" />
                                            </a>

                                            <div class="mt-1 pr-1">
                                                <a class="inline-flex text-gray-800 hover:text-gray-900" href="#">
                                                    <h2 class="text-xl leading-snug justify-center font-semibold">
                                                        {{ $dataprofil->name }}
                                                    </h2>
                                                </a>
                                                <div class="flex items-center">
                                                    <span
                                                        class="text-sm font-medium text-gray-400 -mt-0.5 mr-1">-></span>
                                                    <span>🇮🇩</span>
                                                </div>
                                            </div>
                                        </div>
                                    </header>

                                    <div class="relative inline-flex flex-shrink-0" x-data="{ open: false }">
                                        <button
                                            class="text-gray-400 hover:text-gray-500 rounded-full focus:outline-none focus-within:ring-2"
                                            :class="{ 'bg-gray-100 text-gray-500': open }" aria-haspopup="true"
                                            @click.prevent="open = !open" :aria-expanded="open">
                                            <span class="sr-only">Menu</span>
                                            <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2" />
                                                <circle cx="10" cy="16" r="2" />
                                                <circle cx="22" cy="16" r="2" />
                                            </svg>
                                        </button>
                                        <div class="origin-top-right z-10 absolute top-full right-0 min-w-[9rem] bg-white border border-gray-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                                            @click.outside="open = false" @keydown.escape.window="open = false"
                                            x-show="open" x-transition.origin.top.right x-cloak>
                                            <ul>
                                                <li>
                                                    <a class="font-medium text-sm text-gray-600 hover:text-gray-800 flex py-1 px-3"
                                                        href="#">Edit Profil</a>
                                                </li>
                                                <li>
                                                    <a class="font-medium text-sm text-red-500 hover:text-red-600 flex py-1 px-3"
                                                        href="#">Hapus</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-2">
                                    <div class="text-sm">
                                        {{ $dataprofil->bio ?? 'Tidak ada bio.' }}
                                    </div>
                                </div>

                            </div>

                            <div class="border-t border-gray-200 mt-auto">
                                <div class="flex divide-x divide-gray-200r">
                                    <a class="block flex-1 text-center text-sm text-indigo-500 hover:text-indigo-600 font-medium px-3 py-4"
                                        href="mailto:{{ $dataprofil->email }}">
                                        <div class="flex items-center justify-center">
                                            <svg class="w-4 h-4 fill-current flex-shrink-0 mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z" />
                                            </svg>
                                            <span>Email</span>
                                        </div>
                                    </a>
                                    <a class="block flex-1 text-center text-sm text-gray-600 hover:text-gray-800 font-medium px-3 py-4 group"
                                        href="{{ route('edit.profile', $dataprofil->id) }}">
                                        <div class="flex items-center justify-center">
                                            <svg class="w-4 h-4 fill-current text-gray-400 group-hover:text-gray-500 flex-shrink-0 mr-2"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z" />
                                            </svg>
                                            <span>Edit</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>



</body>



</html>
