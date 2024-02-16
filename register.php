<?php
include('connect.php');

// Mendapatkan data dari form pendaftaran
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username sudah digunakan
    $check_query = mysqli_query($coneksi, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($check_query) > 0) {
        echo "<script>alert('Username Sudah Digunakan');</script>";
    } else {
        // Enkripsi password sebelum disimpan ke database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Memasukkan data pengguna baru ke dalam tabel users
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        $result = mysqli_query($coneksi, $query);

        if ($result) {
            // Jika pendaftaran berhasil, arahkan ke halaman login
            header("Location: login.php?register_success=true");
            exit();
        } else {
            // Jika terjadi kesalahan, tampilkan pesan kesalahan
            echo "Error: " . mysqli_error($coneksi);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f8fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .register-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }
        .register-form {
            margin-bottom: 20px;
        }
        .register-form .form-group {
            margin-bottom: 20px;
        }
        .register-form label {
            font-weight: bold;
        }
        .register-form input[type="text"],
        .register-form input[type="password"] {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #ccc;
            width: 100%;
        }
        .register-form button[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #1da1f2;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        .register-form button[type="submit"]:hover {
            background-color: #0d91e3;
        }
        .register-form .login-link {
            text-align: center;
            margin-top: 20px;
        }
        .register-form .login-link a {
            color: #1da1f2;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-title">REGISTER</div>
        <form class="register-form" action="" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <div class="login-link">
                Already have an account? <a href="login.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>
