<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakeupByReezglam | Professional Makeup Artist Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="logo">MakeupByReezglam</div>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#gallery">Galeri</a></li>
                <li><a href="#services">Servis</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Makeup di Setiap Momen Berharga</h1>
            <p>Riasan yang mempertegas kecantikan alami dengan sentuhan elegan dan sesuai karakter Anda.</p>
            <a href="#gallery" class="btn-primary">Lihat Portofolio</a>
        </div>
    </section>

    <section id="gallery" class="gallery-section">
        <h2>Karya Terbaik Saya</h2>
        <p class="subtitle">Klik kategori untuk memfilter hasil makeup</p>
        
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="sfx">SFX Makeup</button>
            <button class="filter-btn" data-filter="Art">Art Style</button>
            <button class="filter-btn" data-filter="natural">Natural / Casual</button>
        </div>

        <div class="gallery-grid">
            <div class="gallery-item" data-category="sfx">
                <img src="gambar/Faiz.JPG" alt="Special Effects Makeup">
                <div class="overlay"><span>Bruise wheel Makeup</span></div>
            </div>
            <div class="gallery-item" data-category="Art">
                <img src="gambar/Risa A.jpeg" alt="Art Evening Look">
                <div class="overlay"><span>Haely Quinn Makeup</span></div>
            </div>
            <div class="gallery-item" data-category="natural">
                <img src="gambar/Salma.jpg" alt="Natural Soft Makeup">
                <div class="overlay"><span>Flawless Natural</span></div>
            </div>
            <div class="gallery-item" data-category="sfx">
                <img src="gambar/Gin.JPG" alt="Effects Look">
                <div class="overlay"><span>Wound Makeup</span></div>
            </div>
            <div class="gallery-item" data-category="Art">
                <img src="gambar/Risa B.jpeg" alt="Bold Makeup">
                <div class="overlay"><span>Pennywise Makeup</span></div>
            </div>
            <div class="gallery-item" data-category="natural">
                <img src="gambar/Jelita.jpg" alt="Fresh Casual Look">
                <div class="overlay"><span>Fresh Everyday Look</span></div>
            </div>
        </div>
    </section>

    <div id="lightboxModal" class="modal">
        <span class="close-modal">&times;</span>
        <img class="modal-content" id="modalImg">
        <div id="caption"></div>
    </div>

    <section id="services" class="services-section">
        <h2>Servis & Harga</h2>
        <div class="services-container">
            <div class="service-card">
                <h3>Wedding Makeup</h3>
                <p class="price">Rp 1.500.000</p>
                <ul>
                    <li>Sudah termasuk Hairdo/Hijab Styling</li>
                    <li>1x Touch-up sebelum akad/resepsi</li>
                    <li>Makeup tahan lama & waterproof</li>
                </ul>
            </div>
            <div class="service-card highlighted">
                <h3>Lamaran / Party Makeup</h3>
                <p class="price">Rp 500.000</p>
                <ul>
                    <li>Makeup sesuai request</li>
                    <li>Standard Hairdo / Hijab Styling sederhana</li>
                    <li>Ketahanan hingga -+8 jam</li>
                </ul>
            </div>
            <div class="service-card">
                <h3>Film Pendek / Konten Kreator</h3>
                <p class="price">Rp 500.000</p>
                <ul>
                    <li>Makeup untuk 1-3 talent.</li>
                    <li>Natural atau cinematic look</li>
                    <li>Touch-up ringan selama produksi</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <h2>Book Your Session</h2>
        <p>Diskusikan konsep riasan impian Anda bersama kami.</p>
       <form class="contact-form" action="https://formsubmit.co/larisapuan@gmail.com" method="POST">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_subject" value="Pesan Baru dari Web Makeup">
                    <input type="hidden" name="_template" value="table"> 
                    <onsubmit="alert('Terima kasih! Pesan Anda berhasil dikirim (Simulasi).'); return false;">
            <input type="text" placeholder="Nama Lengkap" required>
            <input type="email" placeholder="Email Anda" required>
            <textarea placeholder="Detail Acara & Tanggal Booking" rows="5" required></textarea>
            <button type="submit" class="btn-submit">Kirim Pesan via Email</button>
        </form>
    </section>

    <footer>
        <p>Copyright &copy; 2026 MakeupbyRezzglam. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>