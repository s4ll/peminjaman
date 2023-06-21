<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin : 0 ;
        padding : 0 
    }


body{
    font-family: 'Montserrat' , sans-serif ;
    background-color : #1E90FF ;
    margin: 0 ;
    padding : 0 ;
}

object{
    margin-left : -5rem ; 
    margin-top : -5rem ;
    position: fixed;
    width : 110rem ; 
}
.card {
position: absolute;
width: 800px;
height: 490px;
/* left: 282px;
top: 171px; */
margin-left : 23rem ;
margin-top : 7rem ;

background: linear-gradient(101.88deg, rgba(255, 255, 255, 0.56) 4.05%, rgba(255, 255, 255, 0.56) 48.89%, rgba(255, 255, 255, 0.56) 98.35%);
box-shadow: 0px 4px 30px rgba(23, 41, 53, 0.25);
border-radius: 9px;
}
.card h3{
    padding-top: 3rem ;
    text-align : center ;
    font-size : 30px ;
}
.form{
    margin-top : 5rem ;
}
.head-text h1 {
    color: white ;
    margin-top : 4rem ; 
    font-size : 6rem  ;
    margin-right : 9rem ;
}
.head-text h3 {
    color: white ;
    margin-left : 1rem ;

}
form input{
    width: 21rem ; 
    height :45px ;
    border: 1px solid grey ; 
    background-color : #f7f2f2 ;  
   
    border-radius : 10px ;
}
.btn{
    width : 6rem ; 
    height : 35px ;
}
</style>
<body>
<object data="img/map.svg" type=""></object>
<div class="card">
        <h3>Silahkan Registrasi<br> Terlebih Dahulu</h3>
        <div class="form" style = "text-align : center ;">
            <form action="#" method="POST" style>
                <input style = "margin-bottom : 1rem ;" type="text" name="email" placeholder="  contoh@gmail.com " required>
                <!-- style="width: 21rem ; height :45px ;border: none ; background-color : #DCDCDC ; border-radius : 5px ;" -->
                <input type="password" name="password" placeholder="  password" required>
                <input style = "margin-bottom : 1rem ;" type="text" name="nama" placeholder="  nama" required>
                <input type="text" name="rombel" placeholder="  rombel" required>
                <input type="text" name="rayon" placeholder="  rayon" required>
                <input type="text" name="nis" placeholder="  nis" required>
                <br> <br>
                <button class="btn" type="submit" name="kirim" style=" color: #FFF6F4 ; background-color : #5A96E3 ; border-radius : 10px ;">masuk</button>
                <!-- class="btn btn-secondary" style = "width : 6rem ; height : 35px ;" -->
            </form>
            <br>
        </div>
    </div>
</body>
</html>
<?php
require 'konek.php' ;
if(isset($_POST['kirim'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $rombel = $_POST['rombel'];
    $rayon = $_POST['rayon'];
    $nis = $_POST['nis'];
    $sql = "INSERT INTO user (email, password, nama, rombel, rayon, nis) 
            VALUES ('$email', '$password', '$nama', '$rombel', '$rayon', '$nis')";
    if (mysqli_query($server, $sql)) {
        echo "<script>
        alert('Silahkan Login');
        document.location.href = 'index.php'; 
    </script>";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }

    mysqli_close($conn);
}
?>