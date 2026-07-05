document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. FITUR INTERACTIVE FILTER GALLERY ---
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Hapus kelas aktif dari semua tombol, lalu tambahkan ke tombol yang di-klik
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const filterValue = button.getAttribute('data-filter');

            galleryItems.forEach(item => {
                // Berikan efek transisi smooth saat menyembunyikan/menampilkan gambar
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 400); // Sinkron dengan durasi transisi CSS
                }
            });
        });
    });

    // --- 2. FITUR LIGHTBOX / POP-UP PREVIEW ---
    const modal = document.getElementById('lightboxModal');
    const modalImg = document.getElementById('modalImg');
    const closeBtn = document.querySelector('.close-modal');

    galleryItems.forEach(item => {
        item.addEventListener('click', () => {
            const imgSrc = item.querySelector('img').getAttribute('src');
            modal.style.display = "block";
            modalImg.src = imgSrc;
            document.body.style.overflow = 'hidden'; // Kunci scroll layar utama saat pop-up aktif
        });
    });

    // Tutup Modal ketika tombol silang diklik
    closeBtn.addEventListener('click', () => {
        modal.style.display = "none";
        document.body.style.overflow = 'auto'; // Aktifkan kembali scroll
    });

    // Tutup Modal ketika area di luar foto diklik
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
            document.body.style.overflow = 'auto';
        }
    });
});