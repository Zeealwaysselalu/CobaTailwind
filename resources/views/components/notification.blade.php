<div class="fixed top-4 right-4 z-50 w-full max-w-sm space-y-4">

    @if (session('success'))
        <div x-data="{ open: true }" x-show="open" x-transition.duration.300ms x-init="setTimeout(() => open = false, 3000)"
            class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 rounded shadow-lg flex justify-between items-start"
            role="alert">

            <div>
                <p class="font-bold">Berhasil!</p>
                <p class="text-sm">{{ session('success') }}</p>
            </div>

            <button @click="open = false" class="text-blue-500 hover:text-blue-700">
                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div x-data="{ open: true }" x-show="open" x-transition.duration.300ms
            class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded shadow-lg flex justify-between items-start"
            role="alert">

            <div>
                <p class="font-bold">Gagal!</p>
                <p class="text-sm">{{ session('error') }}</p>
            </div>

            <button @click="open = false" class="text-red-500 hover:text-red-700">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20">
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </button>
        </div>
    @endif

</div>
