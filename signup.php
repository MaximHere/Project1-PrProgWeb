<?php
require 'fungsi.php';

if (isset($_POST['signup'])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $user =  $_POST["user"];
    $pass =  sha1($_POST["password"]);

    $sql_cari = "SELECT * FROM user WHERE userName = '".$user."' OR email = '".$email."';";
    $hasil = execute_querry($sql_cari);

    if (mysqli_num_rows($hasil) > 0) {
        echo '<script>alert("Username atau Email sudah terdaftar!")</script>';
    }else{
        $sql_insert = "INSERT INTO user (`nama`, `email`, `userName`, `pass`) VALUES ('".$nama."', '".$email."', '".$user."', '".$pass."');";
        if (execute_querry($sql_insert)){
            header("Location: login.php");
        }else{
            echo '<script>alert("Gagal membuat akun!")</script>';
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/signup.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="icon" href="asset/minilogo-blue.png" type="image/icon type">
    <title>LOGIN</title>
</head>


<body>

<section class="header">
            <a href="index.php"><img src="asset/logo-blue.png" alt="logo"></a>
    </section>

    <form id="login-form" action="signup.php" method="post">
        <h2>SIGN UP</h2><br>

        <div class="input-group">
            <input required class="input" type="text" name="nama">
            <label class="input-label">Name</label>
        </div>
        <br>
        <br>

        <div class="input-group">
            <input required class="input" type="email" name="email">
            <label class="input-label">Email</label>
        </div>
        <br>
        <br>

        <div class="input-group">
            <input required class="input" type="text" name="user">
            <label class="input-label" for="user">Username</label>
        </div>
        <br>
        <br>

        <div class="input-group">
            <input required class="input" type="password" name="password" id="password">
            <label class="input-label" for="password">Password</label>
        </div>
        <p id="warning-text">Caps Lock is ON</p>
        <br>
        <br>

        <div class="input-group">
            <input required class="input" type="password" name="passwordconf" id="passwordconf" onkeyup="cekPw();">
            <label class="input-label" for="passwordconf">Confirm Password</label>
        </div>
        <p id="warning-salah">Password belum sesuai</p>
        <br>
        <br>
        
        <button class="signup-button" type="submit" name="signup" id="submit">Sign Up</button>
    </form>

    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>
</body>

<script>
    // Check Password
    function cekPw(){
        var pass = document.getElementById("password");
        var conf = document.getElementById("passwordconf");
        var notif = document.getElementById("warning-salah");
        var submit = document.getElementById("submit")
        if(pass.value === conf.value){
            notif.style.display = "none";
            submit.disabled = false;
        }else{
            notif.style.display = "block";
            submit.disabled = true;
        }
    }

    // SHOW PASSWORD
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    // WARNING TEXT
    var input = document.getElementById("password");
    var text = document.getElementById("warning-text");

    // USER PENCET TOMBOL
    input.addEventListener("keyup", function(event) {

        // CAPSLOCK PENCET
        if (event.getModifierState("CapsLock")) {
            text.style.display = "block";
        } else {
            text.style.display = "none"
        }
    });
</script>

</html>