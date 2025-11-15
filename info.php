<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM info");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>EventHub - Info</title>
    <style>
        :root{
            --bg:#f7f8fb;
            --card:#ffffff;
            --accent:#ff6b6b;
            --muted:#6b6b75;
        }
        *{box-sizing:border-box}
        body{
            font-family: Inter, system-ui, Arial, sans-serif;
            background:linear-gradient(180deg,var(--bg),#eef0f5);
            color:#222;
            margin:0;
            padding:30px;
        }
        .wrap{
            max-width:1100px;
            margin:0 auto;
        }
        header{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:16px;
            margin-bottom:20px;
        }
        .brand{
            display:flex;
            align-items:center;
            gap:12px;
        }
        .brand img{
            width:56px;
            height:56px;
            border-radius:8px;
            object-fit:cover;
            box-shadow:0 6px 18px rgba(0,0,0,0.08);
        }
        .brand .title{
            font-weight:700;
            font-size:1.25rem;
            color:var(--accent);
        }
        nav .actions{
            display:flex;
            gap:10px;
            align-items:center;
        }
        .btn{
            background:var(--accent);
            color:#fff;
            border:none;
            padding:10px 16px;
            border-radius:8px;
            cursor:pointer;
            text-decoration:none;
            font-weight:600;
        }
        .card{
            background:var(--card);
            border-radius:12px;
            padding:18px;
            box-shadow:0 8px 30px rgba(100,100,120,0.06);
        }
        .toolbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:12px;
            margin-bottom:12px;
        }
        .table-wrap{
            overflow:auto;
            margin-top:6px;
            border-radius:10px;
            border:1px solid #eef1f6;
        }
        table{
            width:100%;
            border-collapse:collapse;
            min-width:820px;
        }
        thead tr{
            background:linear-gradient(90deg, rgba(255,107,107,0.08), rgba(255,135,135,0.03));
        }
        th, td{
            padding:12px 14px;
            text-align:left;
            border-bottom:1px solid #f1f3f7;
            font-size:0.95rem;
            color:#333;
        }
        th{font-weight:700; color:var(--muted); font-size:0.86rem; text-transform:uppercase; letter-spacing:0.6px}
        tbody tr:hover{background:#fbfbfd}
        td.center{ text-align:center }
        .tag{
            display:inline-block;
            padding:6px 10px;
            border-radius:999px;
            font-size:0.85rem;
            color:#fff;
            background:var(--accent);
            font-weight:600;
        }
        .btn-del{
            background:transparent;
            color:#c33;
            border:1px solid rgba(200,50,50,0.08);
            padding:6px 10px;
            border-radius:8px;
            cursor:pointer;
            text-decoration:none;
            font-weight:700;
        }
        .btn-edit{
            background: linear-gradient(90deg,#2ecc71,#28a745);
            color:#fff;
            border:none;
            padding:6px 10px;
            border-radius:8px;
            cursor:pointer;
            text-decoration:none;
            font-weight:700;
            transition: transform .12s, box-shadow .12s;
        }
        .note{
            margin-top:12px;
            font-size:0.9rem;
            color:var(--muted);
        }
        @media (max-width:820px){
            header{flex-direction:column; align-items:flex-start; gap:12px}
            .toolbar{flex-direction:column; align-items:stretch; gap:10px}
            .search input{width:100%}
        }
    </style>
</head>
<body>
    <div class="wrap">
        <header>
            <div class="brand">
                <img src="logo.jpg" alt="logo">
                <div>
                    <div class="title">EventHub</div>
                    <div style="font-size:0.85rem;color:var(--muted)">Informasi event & contact</div>
                </div>
            </div>
            <nav class="actions">
                <a href="homepage.php" class="btn" title="Kembali">Kembali</a>
                <a href="LANDING PAGE.php" class="btn" style="background:#444">Log Out</a>
            </nav>
        </header>

        <div class="card">
            <div class="toolbar">
                <div style="font-weight:700;font-size:1.05rem">Daftar Info Event</div>
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th style="width:60px">No</th>
                            <th>Nama</th>
                            <th>Id</th>
                            <th>Alamat</th>
                            <th>Tipe</th>
                            <th>Alamat Event</th>
                            <th>Tanggal</th>
                            <th style="width:110px" class="center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($d = mysqli_fetch_assoc($data)) {
                            // escape output
                            $nama = $d['nama'];
                            $id   = $d['id'];
                            $alamat = $d['alamat'];
                            $tipe = $d['tipe'];
                            $alamat_event = $d['alamat_event'];
                            $tanggal_event = $d['tanggal_event'];
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $alamat; ?></td>
                            <td><span class="tag"><?php echo $tipe; ?></span></td>
                            <td><?php echo $alamat_event; ?></td>
                            <td><?php echo $tanggal_event; ?></td>
                            <td class="center">
                                <div style="display:flex;gap:8px;justify-content:center;flex-wrap:wrap">
                                    <a class="btn-edit" href="update.php?id=<?php echo $id; ?>">UPDATE</a>
                                    <a class="btn-del" href="delete.php?id=<?php echo $id ; ?>">DELETE</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php if(mysqli_num_rows($data) === 0){ ?>
                        <tr><td colspan="8" style="text-align:center;padding:30px;color:var(--muted)">Tidak ada data.</td></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            
        </div>

        <footer style="margin-top:18px;text-align:center;color:var(--muted);font-size:0.9rem">
            &copy; 2025 EventHub. All rights reserved.
        </footer>
    </div>
</body>
</html>
