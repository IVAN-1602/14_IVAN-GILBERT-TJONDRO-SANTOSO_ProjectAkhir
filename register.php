<?php
include 'koneksi.php';
// Cek apakah form telah disubmit
if(isset($_POST['register'])){
    // Ambil data dari form
    $nama = $_POST['nama_lengkap']; // Menangkap nama lengkap dari form
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
    $email = $_POST['email'];
    $pin = $_POST['pin'];
    $username = $_POST['id'];

    // Simpan data ke database
    $query = "INSERT INTO register (nama_lengkap, password, email, pin, id) VALUES ('$nama','$password','$email','$pin','$username')";
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);


    // Cek apakah query berhasil
    if($result){
        // Redirect ke halaman login setelah registrasi sukses
        echo "<script>alert('Registrasi berhasil! Silakan login.');
        window.location='login.php';</script>";
    } else {
        // Tampilkan pesan error jika registrasi gagal
        echo "Gagal mendaftar!";
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Membuat form berada di tengah halaman */
        html, body { height: 100%; }
        body{
            margin: 0;
            display: flex;
            align-items: center;       /* vertikal center */
            justify-content: center;   /* horizontal center */
            min-height: 100vh;
            background: #f2f4f8;
            font-family: Arial, sans-serif;
        }

        .container{
            width: 420px;
            max-width: 92%;
            background: #ffffff;
            padding: 28px 20px;
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        }

        .container h2{ text-align: center; margin-top: 0; }

        table { width: 100%; border-collapse: collapse; }

        input[type="text"],
        input[type="password"]{
            width: 100%;
            padding: 8px 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-top: 5px;
        }

        .form-actions {
            text-align: center;
            margin: 20px 0;
        }

        button[type="submit"]{
            padding: 10px 18px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            display: inline-block;
            min-width: 120px;
        }

        p.login-link {
            text-align: center;
            margin: 15px 0 0;
        }

        a { color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Form Registrasi</h2>
        <form method="POST">
            <table>
                <tr>
                    <td>
                        <label for="nama_lengkap">Masukkan Nama :</label>
                    </td>
                    <td>
                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Masukkan Password :</label>
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="Password" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Masukkan email :</label>
                    </td>
                    <td>
                        <input type="text" name="email" placeholder="Email" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pin">Masukkan pin :</label>
                    </td>
                    <td>
                        <input type="text" name="pin" placeholder="PIN" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="username">Masukkan id :</label>
                    </td>
                    <td>
                        <input type="text" name="id" placeholder="ID/Username" required><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="form-actions">
                        <button type="submit" name="register">Daftar</button>
                    </td>
                </tr>
            </table>
        </form>
        <p class="login-link">Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>
</body>
</html>
