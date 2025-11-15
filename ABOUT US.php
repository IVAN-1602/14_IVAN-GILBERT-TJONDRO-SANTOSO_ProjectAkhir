<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - EventHub</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #ffffff, #f0f0f5);
            color: #333;
            line-height: 1.6;
        }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #ff6b6b, #ff8787);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #ff6b6b;
        }

        .btn-login {
            background: linear-gradient(135deg, #ff6b6b, #ff8787);
            color: #fff;
            padding: 10px 25px;
            border-radius: 25px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(255, 107, 107, 0.5);
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 50px;
            min-height: calc(100vh - 80px);
            gap: 50px;
        }

        .hero-left h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #ff6b6b, #ff8787);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-left p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .hero-right img {
            width: 100%;
            max-width: 500px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(255, 107, 107, 0.3);
            transition: 0.3s;
        }

        /* Features Section */
        .features {
            padding: 80px 50px;
            background: rgba(255, 255, 255, 0.5);
            text-align: center;
        }

        .features h2 {
            font-size: 2.8rem;
            margin-bottom: 50px;
            background: linear-gradient(135deg, #ff6b6b, #ff8787);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .feature-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #ff6b6b;
        }

        .feature-card p {
            color: #666;
            line-height: 1.8;
        }

        /* Values Section */
        .values {
            padding: 80px 50px;
            background: linear-gradient(135deg, rgba(255,107,107,0.05), rgba(255,135,135,0.05));
        }

        .values h2 {
            font-size: 2.8rem;
            margin-bottom: 50px;
            text-align: center;
            background: linear-gradient(135deg, #ff6b6b, #ff8787);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .value-item {
            text-align: center;
        }

        .value-item h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #333;
        }

        .value-item p {
            color: #666;
        }

        /* CTA Section */
        .cta {
            padding: 80px 50px;
            text-align: center;
            background: linear-gradient(135deg, #ff6b6b, #ff8787);
            color: #fff;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            opacity: 0.95;
        }

        .btn-cta {
            background: #fff;
            color: #ff6b6b;
            padding: 12px 40px;
            border-radius: 30px;
            border: none;
            font-size: 1rem;
            font-weight: 600;
            transition: 0.3s;
        }


        /* Footer */
        footer {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px 50px;
            text-align: center;
            border-top: 1px solid rgba(255, 107, 107, 0.3);
            color: #666;
        }

        @media (max-width: 768px) {
            .hero { flex-direction: column; padding: 40px 20px; }
            .hero-left h1 { font-size: 2rem; }
            nav { padding: 15px 20px; flex-direction: column; gap: 15px; }
            .nav-links { gap: 15px; }
            .features, .values, .cta { padding: 50px 20px; }
            .features h2, .values h2, .cta h2 { font-size: 2rem; }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="logo.jpg" alt="Logo" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
            <div class="logo">EventHub</div>
        </div>
        <ul class="nav-links">
            <li><a href="LANDING PAGE.php">Home</a></li>
            <li><a href="login.php" class="btn-login">Log In</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-left">
            <h1>Tentang EventHub</h1>
            <p>EventHub adalah platform terpercaya untuk menemukan, membuat, dan mengelola acara spesial Anda. Kami berkomitmen untuk menjadikan setiap momen menjadi tak terlupakan dengan menyediakan layanan terbaik dan pengalaman pengguna yang luar biasa.</p>
            <p>Bergabunglah dengan ribuan pengguna yang telah merasakan kemudahan dalam merencanakan event impian mereka.</p>
        </div>
        <div class="hero-right">
            <img src="konser.jpeg" alt="About EventHub">
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <h2>Mengapa Memilih EventHub?</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <h3>🎯 Mudah Digunakan</h3>
                <p>Interface yang intuitif membuat siapa saja bisa membuat event dalam hitungan menit tanpa perlu keahlian khusus.</p>
            </div>
            <div class="feature-card">
                <h3>📱 Akses Dimana Saja</h3>
                <p>Kelola event Anda kapan saja dan dimana saja melalui perangkat mobile atau desktop dengan sinkronisasi otomatis.</p>
            </div>
            <div class="feature-card">
                <h3>🔒 Aman & Terpercaya</h3>
                <p>Data Anda dilindungi dengan enkripsi tingkat enterprise untuk memastikan keamanan dan privasi maksimal.</p>
            </div>
            <div class="feature-card">
                <h3>💬 Dukungan Terbaik</h3>
                <p>Tim support kami siap membantu Anda 24/7 dengan respons cepat dan solusi efektif.</p>
            </div>
            <div class="feature-card">
                <h3>🎨 Kustomisasi Penuh</h3>
                <p>Sesuaikan tampilan dan fitur event Anda sesuai kebutuhan dengan berbagai template dan pilihan warna.</p>
            </div>
            <div class="feature-card">
                <h3>📊 Analytics Lengkap</h3>
                <p>Lihat statistik dan insight mendalam tentang event Anda dengan dashboard yang komprehensif.</p>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values">
        <h2>Nilai-Nilai Kami</h2>
        <div class="values-grid">
            <div class="value-item">
                <h3>Inovasi</h3>
                <p>Kami terus berinovasi untuk memberikan fitur-fitur terbaru dan teknologi terdepan.</p>
            </div>
            <div class="value-item">
                <h3>Kepercayaan</h3>
                <p>Transparansi dan integritas adalah fondasi hubungan kami dengan pengguna.</p>
            </div>
            <div class="value-item">
                <h3>Kualitas</h3>
                <p>Kami berkomitmen untuk memberikan layanan dengan standar kualitas tertinggi.</p>
            </div>
            <div class="value-item">
                <h3>Komunitas</h3>
                <p>Membangun komunitas yang kuat dan saling mendukung antar pengguna EventHub.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <h2>Mulai Buat Event Anda Sekarang</h2>
        <p>Jangan lewatkan kesempatan untuk membuat event impian Anda menjadi kenyataan bersama EventHub.</p>
        <a href="register.php" class="btn-cta">Daftar Gratis Sekarang</a>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 EventHub. All rights reserved. | Capturing Moments, Creating Memories</p>
    </footer>
</body>
</html>