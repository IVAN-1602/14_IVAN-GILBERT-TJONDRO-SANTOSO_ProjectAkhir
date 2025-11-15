<?php
// halaman sederhana untuk memasukkan info event
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>EventHub - Home</title>
    <style>
        :root{
            --bg: #f6f7fb;
            --card: #ffffff;
            --accent: #ff6b6b;
            --muted: #6b6b75;
            --glass: rgba(255,255,255,0.7);
        }
        *{box-sizing:border-box}
        body{
            margin:0;
            font-family: Inter, system-ui, Arial, sans-serif;
            background: linear-gradient(180deg,var(--bg),#eef0f5);
            color:#222;
        }

        .wrap{
            max-width:1100px;
            margin:28px auto;
            padding:20px;
        }

        nav{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:16px;
            padding:14px 18px;
            background:var(--card);
            border-radius:12px;
            box-shadow:0 8px 30px rgba(100,100,120,0.06);
        }

        .brand {
            display:flex;
            gap:12px;
            align-items:center;
        }

        .brand img{
            width:56px; height:56px; border-radius:10px; object-fit:cover;
            box-shadow:0 6px 18px rgba(0,0,0,0.06);
        }

        .brand .title{
            font-weight:800;
            color:var(--accent);
            font-size:1.15rem;
        }

        .nav-actions{
            display:flex;
            gap:10px;
            align-items:center;
        }

        .btn{
            background:var(--accent);
            color:#fff;
            padding:8px 14px;
            border-radius:10px;
            text-decoration:none;
            font-weight:700;
            border:none;
            cursor:pointer;
        }

        .btn.secondary{
            background:#444;
            padding:8px 12px;
        }

        .main{
            display:grid;
            grid-template-columns: 1fr 420px;
            gap:24px;
            margin-top:20px;
            align-items:start;
        }

        .card{
            background:var(--card);
            border-radius:12px;
            padding:18px;
            box-shadow:0 8px 30px rgba(100,100,120,0.06);
        }

        .hero{
            padding:28px;
            border-radius:10px;
            background:linear-gradient(180deg, rgba(255,107,107,0.03), rgba(255,107,107,0.01));
        }

        .hero h1{
            font-size:1.6rem;
            color: #333;
            margin-bottom:8px;
        }

        .hero p{
            color:var(--muted);
            margin-bottom:16px;
        }

        form .field{
            display:flex;
            flex-direction:column;
            margin-bottom:12px;
        }

        label{ font-size:0.9rem; color:var(--muted); margin-bottom:6px; }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        textarea {
            padding:10px 12px;
            border-radius:8px;
            border:1px solid #e6e8ee;
            background:var(--glass);
            outline:none;
            font-size:0.95rem;
        }

        textarea{ min-height:80px; resize:vertical; }

        .form-actions{
            display:flex;
            gap:10px;
            align-items:center;
            margin-top:8px;
        }

        .submit{
            background:linear-gradient(135deg,var(--accent),#ff8787);
            color:#fff;
            padding:10px 16px;
            border-radius:10px;
            border:none;
            cursor:pointer;
            font-weight:700;
        }

        .hint{ font-size:0.9rem; color:var(--muted); }

        /* right column */
        .panel .panel-title{ font-weight:800; color:var(--accent); margin-bottom:8px; }
        .panel .small{ color:var(--muted); font-size:0.92rem; margin-bottom:12px; }
        .small-card{
            background:linear-gradient(180deg,#fff,#fff);
            border-radius:10px;
            padding:12px;
            border:1px solid #f1f3f7;
            box-shadow:0 6px 18px rgba(0,0,0,0.03);
        }

        .featured{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:10px;
            margin-top:12px;
        }

        .featured img{
            width:100%; height:90px; object-fit:cover; border-radius:8px;
        }

        footer{
            margin-top:18px;
            text-align:center;
            color:var(--muted);
            font-size:0.9rem;
        }

        @media (max-width:980px){
            .main{ grid-template-columns: 1fr; }
            .featured{ grid-template-columns:repeat(3,1fr); }
        }
    </style>
</head>
<body>
    <div class="wrap">
        <nav>
            <div class="brand">
                <img src="logo.jpg" alt="logo">
                <div>
                    <div class="title">EventHub</div>
                    <div style="font-size:0.85rem;color:var(--muted)">Booking & Info</div>
                </div>
            </div>
            <div class="nav-actions">
                <a href="info.php" class="btn">Daftar Info</a>
                <a href="LANDING PAGE.php" class="btn secondary">Log Out</a>
            </div>
        </nav>

        <div class="main">
            <div class="card hero">
                <h1>Tambahkan Info Event</h1>
                <p>Isi form berikut untuk menambahkan event. Pastikan data benar sebelum submit.</p>

                <form method="post" action="tambah_aksi.php">
                    <div class="field">
                        <label for="nama">Nama</label>
                        <input id="nama" name="nama" type="text" placeholder="Nama event" required>
                    </div>

                    <div class="field">
                        <label for="id">ID (unik)</label>
                        <input id="id" name="id" type="number" placeholder="Contoh: 101" required>
                    </div>

                    <div class="field">
                        <label for="alamat">Alamat (penyelenggara)</label>
                        <input id="alamat" name="alamat" type="text" placeholder="Nama jalan / kota" required>
                    </div>

                    <div class="field">
                        <label for="tipe">Tipe Event</label>
                        <input id="tipe" name="tipe" type="text" placeholder="Contoh: Konser / Pameran" required>
                    </div>

                    <div class="field">
                        <label for="alamat_event">Lokasi Event</label>
                        <input id="alamat_event" name="alamat_event" type="text" placeholder="Venue / Alamat lengkap" required>
                    </div>

                    <div class="field">
                        <label for="tanggal_event">Tanggal Event</label>
                        <input id="tanggal_event" name="tanggal_event" type="date">
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="submit">Submit</button>
                        <div class="hint">Atau kunjungi <a href="info.php">halaman info</a> untuk melihat daftar.</div>
                    </div>
                </form>
            </div>

            <aside class="panel card">
                <div class="panel-title">Tips Singkat</div>
                <div class="small">Masukkan data lengkap agar pengunjung bisa menghubungi dan menemukan lokasi event.</div>
                <div style="margin-top:12px;">
                    <div class="panel-title" style="font-size:0.95rem">Featured</div>
                    <div class="small">Contoh event populer</div>
                    <div class="featured">
                        <img src="wedding hall 1.jpg" alt="1">
                        <img src="grand opening.jpg" alt="2">
                        <img src="birthday.jpeg" alt="3">
                    </div>
                </div>
            </aside>
        </div>

        <footer>
            &copy; 2025 EventHub. All rights reserved.
        </footer>
    </div>
</body>
</html>