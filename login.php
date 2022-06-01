<?php
session_start();

if (isset($_POST['submit'])){
    $user = $_POST["user"];
    $pass = $_POST["password"];
    if ($user == 'admin' && $pass == 'admin1'){
        $_SESSION['username'] = $user;
        header("Location: home.php");
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <style>
        table.center {
        margin-left: auto; 
        margin-right: auto;
        }
    </style>
    <title>Document</title>
</head>
<body class="home-page">
    <header class="nav">
        <div class="topBar">
            <a href="home.php"><img src="pic/home button.png" alt="home icon"></a>
            <h1 id="webname">FULL SEHAT MAZZEHHH</h1>
        </div>
    </header>


    <main class="details">
        <div>
            <h1>Welcome to FULL SEHAT</h1>
            <article>"Ini adalah sebuah web olahragawan sejati..</article>
            <article>bagi kalian kaum rebahan, jangan akses website ini :)"</article>
        </div>
        <br>
        <div class="kolom-pilihan">
            <h2>Tipe Olahraga</h2>
            <br>
            
        </div>
        <br>
        <br>
        <form action="login.php" method="post">
            <table class="center">
                <tr>
                    <td>Username</td>
                    <td class="jarak"></td>
                    <td><input class="login-box" type="text" name="user"></td>
                </tr>
                <tr><td colspan="3">
                    <br>
                    <br>
                    <br>
                    
                </td></tr>
                <tr>
                    <td>password</td>
                    <td class="jarak"></td>
                    <td><input class="login-box" type="password" name="password"></td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <button type="submit" name="submit">Login</button>
                    </td>
                    
                </tr>
            </table>
            
            
            
        </form>
    </main>
    
    
</body>
</html>