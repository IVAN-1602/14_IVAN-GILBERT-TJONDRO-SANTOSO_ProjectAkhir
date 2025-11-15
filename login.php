<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE nama_lengkap='$nama_lengkap'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        $_SESSION['id'] = $user['id'];
        header("Location: homepage.php");
    } else {
        echo "<script>alert('Nama atau password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* nya: membuat form berada di tengah halaman */
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
            width: 360px;
            max-width: 92%;
            background: #ffffff;
            padding: 28px 20px;
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        }

        .container h2{ text-align: center; margin-top: 0; }

        fieldset{
            border: 0;
            padding: 0;
            margin: 0;
        }

        table { width: 100%; border-collapse: collapse; }

        input[type="text"],
        input[type="password"]{
            width: 100%;
            padding: 8px 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        /* pusatkan aksi form dan beri jarak vertikal */
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

        p.signup {
            margin: 10px 0 0;
        }

        a { color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Login</h2>
        <form method="post">
            <fieldset>
            <table>
                <tr>
                    <td>
                        <label for="nama_lengkap">Masukan nama lengkap</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama_lengkap" placeholder="nama_lengkap" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Masukan Password</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="password" name="password" placeholder="password" required><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="form-actions">
                        <button type="submit" name="login">LOGIN</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="form-actions">
                        <p class="signup">belum punya akun? <a href="register.php">daftar</a></p>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </div>
</body>
</html>