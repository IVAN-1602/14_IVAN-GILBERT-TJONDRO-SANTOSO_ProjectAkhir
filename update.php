<?php
session_start();
include 'koneksi.php';

// ambil id dari query string dan validasi
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: info.php');
    exit;
}
$id = (int) $_GET['id'];

// prepared statement untuk ambil data dari tabel info
$stmt = mysqli_prepare($koneksi, "SELECT nama, id, alamat, tipe, alamat_event, tanggal_event FROM info WHERE id = ?");
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$d = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

if (!$d) {
    header('Location: info.php');
    exit;
}

function e($v){ return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Edit Info Event</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        :root{ 
            --bg:#f6f7fb;
            --card:#fff;
            --accent:#ff6b6b;
            --muted:#666; 
            }
        *{box-sizing:border-box}
        body{
            font-family:Inter, system-ui, Arial, sans-serif;
            margin:0; background:var(--bg);
            padding:24px;
            }
        .wrap{
            max-width:760px;
            margin:24px auto;
        }
        header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:16px
        }
        a.btn{
            background:var(--accent);
            color:#fff;
            padding:8px 12px;
            border-radius:8px;
            text-decoration:none;
            font-weight:700
        }
        .card{
            background:var(--card);
            padding:18px;
            border-radius:12px;
            box-shadow:0 8px 30px rgba(0,0,0,0.06)
        }
        form{
            display:grid;
            gap:12px
        }
        .field{
            display:flex;
            flex-direction:column
        }
        label{
            font-size:0.9rem;
            color:var(--muted);
            margin-bottom:6px
        }
        input[type=text], input[type=number], input[type=date], textarea{
            padding:10px;
            border:1px solid #e6e8ee;
            border-radius:8px;
            font-size:0.95rem;
        }
        .actions{
            display:flex;
            gap:10px;
            align-items:center;
            margin-top:6px
        }
        button.submit{
            background:linear-gradient(135deg,var(--accent),#ff8787);
            color:#fff;
            border:none;
            padding:10px 14px;
            border-radius:10px;
            cursor:pointer;
            font-weight:700
        }
        .msg{
            padding:10px;
            border-radius:8px;
            margin-bottom:12px
        }
        .msg.error{
            background:#ffe9e9;color:#8a2a2a
        }
        .msg.success{
            background:#e9fff2;color:#116644
        }
        @media(max-width:640px){
            .wrap{
                padding:12px
            } 
            header{
                flex-direction:column;
                align-items:flex-start;
                gap:8px
            } 
        }
    </style>
</head>
<body>
    <div class="wrap">
        <header>
            <h2>Edit Info Event</h2>
            <div>
                <a class="btn" href="info.php">Kembali</a>
            </div>
        </header>

        <div class="card">
            <?php if(!empty($_SESSION['error'])): ?>
                <div class="msg error"><?php echo e($_SESSION['error']); unset($_SESSION['error']); ?></div>
            <?php endif; ?>
            <?php if(!empty($_SESSION['success'])): ?>
                <div class="msg success"><?php echo e($_SESSION['success']); unset($_SESSION['success']); ?></div>
            <?php endif; ?>

            <form method="post" action="ubah.php" autocomplete="off">

                <div class="field">
                    <label for="nama">Nama</label>
                    <input id="nama" name="nama" type="text" value="<?php echo e($d['nama']); ?>" >
                </div>

                <div class="field">
                    <label for="id">ID (unik)</label>
                    <input id="id" name="id" type="text" value="<?php echo e($d['id']); ?>" >
                </div>

                <div class="field">
                    <label for="alamat">Alamat (penyelenggara)</label>
                    <input id="alamat" name="alamat" type="text" value="<?php echo e($d['alamat']); ?>" >
                </div>

                <div class="field">
                    <label for="tipe">Tipe Event</label>
                    <input id="tipe" name="tipe" type="text" value="<?php echo e($d['tipe']); ?>" >
                </div>

                <div class="field">
                    <label for="alamat_event">Lokasi Event</label>
                    <input id="alamat_event" name="alamat_event" type="text" value="<?php echo e($d['alamat_event']); ?>" >
                </div>

                <div class="field">
                    <label for="tanggal_event">Tanggal Event</label>
                    <input id="tanggal_event" name="tanggal_event" type="date" value="<?php echo e($d['tanggal_event']); ?>">
                </div>

                <div class="actions">
                    <button type="submit" class="submit">Simpan Perubahan</button>
                    <a href="info.php" style="color:var(--muted);text-decoration:none;">Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>