<?php
session_start(); // Memulai sesi

if (isset($_SESSION['email'])) {
    // Pengguna sudah login, alihkan ke halaman utama
    header("Location: utama.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="astyle/index.css">
</head>
<style>
    body {
        background-image: url('img/beg.jpg');
        background-size: 1550px auto;
        background-repeat: no-repeat;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        height: 100vh;
    }
</style>

<body>
    <div class="head-text">
        <h1>WeLend</h1>
        <h3>Peminjaman menjadi<br>lebih mudah.</h3>
    </div>
    <div class="card">
        <h3>Silahkan Login <br> Terlebih Dahulu</h3>
        <div class="form">
            <form action="#" method="POST">
                <label for="email">Email </label> <br>
                <input type="text" name="email" placeholder="  salma@gmail.com " required>
                <br> <br>
                <!-- style="width: 21rem ; height :45px ;border: none ; background-color : #DCDCDC ; border-radius : 5px ;" -->
                <label for="password">Password</label> <br>
                <input type="password" name="password" placeholder="  666" required>
                <br> <br>
                <button class="btn" type="submit" name="kirim" style=" color: #FFF6F4 ; background-color : #5A96E3 ;">masuk</button>
                <!-- class="btn btn-secondary" style = "width : 6rem ; height : 35px ;" -->
            </form>
            <br>
            <p>Hubungi <a href="cs.php">CS</a> bila bermasalah.</p>
            <p style = "text-align : center ;">Belum memiliki akun? <a href="regis.php">Registrasi</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>

<?php
require 'konek.php' ;
if (isset($_POST['kirim'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($server, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        echo "<script>
            alert('Selamat Datang');
            document.location.href = 'utama.php'; 
        </script>";
    } else {
        echo "<script>alert('Username atau Password salah !!!');</script>";
    }

    mysqli_close($conn);
}
?>