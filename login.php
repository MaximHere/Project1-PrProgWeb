<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="home-page">
    <header class="nav">
        <div class="topBar">
            <a href="home.php"><img src="pic/home button.png" alt="home icon"></a>
            <h1 id="webname">FULL SEHAT MAZZEHHH</h1>
            <div class="topBar-right">
                    <form action="home.php" method="post">
                    <input class="search-box" type="text" placeholder="Search Here">
                    <button class="SearchButton">Search</button>
                    <button class="SearchButton" name="login">Login</button>
                </form>
                
            </div>
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
            <table>
                <tr>
                    <td>Username</td>
                    <td>&nbsp;</td>
                    <td><input class="search-box" type="text" name="user"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td>&emsp;</td>
                    <td><input class="search-box" type="password" name="password"></td>
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