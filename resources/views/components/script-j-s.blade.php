<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fileInput = document.getElementById('avatar-upload');
        const previewImg = document.getElementById('avatar-preview');
        const loadingOverlay = document.getElementById('loading-overlay');
        const tempInput = document.getElementById('temp-avatar-path');
        const statusIndicator = document.getElementById('status-indicator');
        const btnCancel = document.getElementById('btn-cancel-upload');

        // Simpan URL asli untuk fitur Undo/Batal
        const originalSrc = previewImg.src;

        // 1. EVENT: Saat User Pilih File
        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (!file) return;

            // Tampilkan Loading
            loadingOverlay.classList.remove('hidden');

            const formData = new FormData();
            formData.append('avatar', file);

            // Fetch ke Endpoint Laravel (Upload Temp)
            fetch('{{ route('avatar.upload-temp') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    loadingOverlay.classList.add('hidden');

                    if (data.path) {
                        // Sukses: Ganti gambar dengan URL Temporary
                        previewImg.src = data.url;

                        // Isi input hidden agar dikirim saat Save
                        tempInput.value = data.path;

                        // Munculkan indikator "Belum Disimpan"
                        statusIndicator.classList.remove('hidden');
                        statusIndicator.classList.add('flex');
                    }
                })
        });

        // 2. EVENT: Saat User Klik Batal
        btnCancel.addEventListener('click', function() {
            const currentTempPath = tempInput.value;

            // Jika ada file temp, hapus dari server
            if (currentTempPath) {
                fetch('{{ route('avatar.revert-temp') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        temp_path: currentTempPath
                    })
                });
            }

            // Reset UI ke kondisi awal (Foto Asli)
            previewImg.src = originalSrc;
            tempInput.value = '';
            fileInput.value = ''; // Reset input file

            // Sembunyikan indikator
            statusIndicator.classList.add('hidden');
            statusIndicator.classList.remove('flex');

            // Opsional: Redirect atau notifikasi
            // window.location.href = "{{ route('home') }}";
        });
    });
</script>
