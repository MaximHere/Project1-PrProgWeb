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
    <link rel="stylesheet" href="login-style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<form id="login-form" action="login.php" method="post">
    <h2>LOGIN</h2>
    <br>
    <label>Username</label>
    <input class="login-box" type="text" name="user"><br>
    <label>Password</label>
    <input class="login-box" type="password" name="password" id="password">
    <p id="warning-text">Caps Lock is ON</p>
    <input class="show" id="show-pass" type="checkbox" onclick="myFunction()">Show Password <br>

    <button class="login-button" type="submit" name="submit">Login</button>
</form>

<div class="footer">
    Copyright &copy; Fandy Abet Maxim
</div>
</body>

<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    var input = document.getElementById("password");

    // Get the warning text
    var text = document.getElementById("warning-text");

    // When the user presses any key on the keyboard, run the function
    input.addEventListener("keyup", function(event) {

        // If "caps lock" is pressed, display the warning text
        if (event.getModifierState("CapsLock")) {
            text.style.display = "block";
        } else {
            text.style.display = "none"
        }
    });
</script>

</html>