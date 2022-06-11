
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/search.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>HEALTH & FITNESS</title>
</head>

<body>
<section class="header">
        <nav>
            <a href="home.php"><img src="asset/logo-blue.png" alt="logo"></a>
            <div class="nav-right">
                <form action="home.php" method="post">
                    <div class="user-btn">
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo "<button class='login-btn' name='logout'>Logout</button>";
                        } else {
                            echo "<button class='login-btn' name='login'>Login</button>";
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo " ";
                        } else {
                            echo "<button class='sign-btn' name='signup'>Sign Up</button>";
                        }
                        ?>
                    </div>
                </form>
            </div>
        </nav>
        <div class="nav-links">
            <ul>
                <li><a href="home.php" class="link">HOME</a></li>
                <li><a href="instruktur.php" class="link">INSTRUKTUR</a></li>
                <li>
                    <a class="link">TINGKAT KESULITAN</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="diff/beginner.php">Beginner</a></li>
                            <li><a href="diff/intermediete.php">Intermediete</a></li>
                            <li><a href="diff/advanced.php">Advanced</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="olahraga.php" class="link">OLAHRAGA</a></li>
            </ul>
        </div>
        <br>
        <?php
        if (isset($_SESSION['username'])) {
            echo "<h5 id='welcome-user'>Selamat datang, " . $_SESSION['username'] . "</h5><br>";
        }
        ?>
    </section>


    <div class="search">
        <h1>hasil pencarian</h1>
            <hr class="hr-search">
            <form action="home.php" method="post">
                <input class="search-box" type="text" placeholder="Search Here">
            </form>
    </div>

    <div class="hasil">
        <h2>9999 hasil dari ...</h2>
        <hr class="hr-hasil">
        <div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

    
    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>
</body>
</html>