<?php
session_start();
include('connect.php');

// Mendapatkan data dari form login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa keberadaan pengguna dalam database
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($coneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Jika login berhasil, buat sesi untuk pengguna dan arahkan ke halaman index.php
            $_SESSION['username'] = $username;
            echo "<script>alert('Selamat datang, $username'); window.location.href='index.php';</script>";
            exit();
        } else {
            // Jika password salah, tampilkan pesan kesalahan
            echo "<script>alert('Password salah');</script>";
        }
    } else {
        // Jika username tidak ditemukan, tampilkan pesan kesalahan
        echo "<script>alert('Username tidak ditemukan');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .login-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }
        .login-form {
            margin-bottom: 20px;
        }
        .login-form .form-group {
            margin-bottom: 20px;
        }
        .login-form label {
            font-weight: bold;
        }
        .login-form input[type="text"],
        .login-form input[type="password"] {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #ccc;
            width: 100%;
        }
        .login-form button[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #1877f2;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        .login-form button[type="submit"]:hover {
            background-color: #166fe5;
        }
        .login-form .register-link {
            text-align: center;
        }
        .login-form .register-link a {
            color: #1877f2;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-title">Login</div>
        <form class="login-form" action="" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
            <div class="register-link">
                Don't have an account? <a href="register.php">Register</a>
            </div>
        </form>
    </div>
</body>
</html>
