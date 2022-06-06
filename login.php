<?php
session_start();

if (isset($_POST['submit'])) {
    $user = $_POST["user"];
    $pass = $_POST["password"];
    if ($user == 'admin' && $pass == 'admin1') {
        $_SESSION['username'] = $user;
        header("Location: home.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>LOGIN</title>
</head>


<body>

<section class="header">
            <a href="home.php"><img src="asset/logo-blue.png" alt="logo"></a>
    </section>

    <form id="login-form" action="login.php" method="post">
        <h2>LOGIN</h2><br>

        <div class="input-group">
            <input required class="input" type="text" name="user">
            <label class="input-label">Username</label>
        </div>
        <br>
        <br>
        <div class="input-group">
            <input required class="input" type="password" name="password" id="password">
            <label class="input-label">Password</label>
        </div>

        <p id="warning-text">Caps Lock is ON</p>
        <br>

        <label class="show-pass">Show Password
            <input class="checkbox" type="checkbox" onclick="myFunction()">
            <span class="checkmark"></span>
        </label>

        <button class="login-button" type="submit" name="submit">Login</button>
    </form>

    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>
</body>

<script>
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