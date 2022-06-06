<?php
require 'fungsi.php';

if (isset($_POST["login"])) {
    header("Location: login.php");
} elseif (isset($_POST["logout"])) {
    session_destroy();
    header("Location: home.php");
}

// Select Data
$sql = "SELECT * FROM olahraga;";
$result = mysqli_query($konek, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/home.css">
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
            <a href="home.php"><img src="asset/logo.png" alt="logo"></a>

            <div class="search">
                <form action="home.php" method="post">
                    <input class="search-box" type="text" placeholder="Search Here">
                    <button class="search-btn"><i class='fa fa-search'></i></button>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo "<button class='user-btn' name='logout'>Logout</button>";
                    } else {
                        echo "<button class='user-btn' name='login'>Login</button>";
                    }
                    ?>
                </form>
        </nav>

        <div class="nav-links">
            <ul>
                <li><a href="home.php" class="link">HOME</a></li>
                <li><a href="#instruktur" class="link">INSTRUKTUR</a></li>
                <li><a href="#olahraga" class="link">OLAHRAGA</a></li>
            </ul>
        </div>
        <br>
        <?php
        if (isset($_SESSION['username'])) {
            echo "<h5 id='welcome-user'>Selamat datang, " . $_SESSION['username'] . "</h5><br>";
        }
        ?>
    </section>



    <div class="web-title">
        <h1>Welcome to FULL SEHAT</h1>
        <p>"Ini adalah sebuah website Olahragawan sejati <br> bagi kalian kaum rebahan, jangan akses website ini :)"</p>
        <a href="" class="pilih-btn">PILIH OLAHARGA</a>
    </div>

    <!-- OLAHRAGA -->
    <section class="difficulty">
        <h1>DIFFICULTY</h1>
        <hr class="hr-difficulty">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, <br>
            hic ipsum quidem veritatis quos beatae dolorem sequi ratione impedit laudantium porro, <br>
            ab asperiores sunt deleniti! Ea nostrum labore expedita nisi!</p>

        <div class="diff-row">
            <div class="diff-col">
                <h3>Beginner</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, <br>
                    hic ipsum quidem veritatis quos beatae dolorem sequi ratione impedit laudantium porro, <br>
                    ab asperiores sunt deleniti! Ea nostrum labore expedita nisi!</p>
                <br>
                <a class="diff-btn" href="difficulty/beginner.php">CLICK HERE</a>
                <br>
            </div>

            <div class="diff-col">
                <h3>Intermediete</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, <br>
                    hic ipsum quidem veritatis quos beatae dolorem sequi ratione impedit laudantium porro, <br>
                    ab asperiores sunt deleniti! Ea nostrum labore expedita nisi!</p>
                <br>
                <a class="diff-btn" href="difficulty/intermediete.php">CLICK HERE</a>
                <br>
            </div>

            <div class="diff-col">
                <h3>Advanced</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, <br>
                    hic ipsum quidem veritatis quos beatae dolorem sequi ratione impedit laudantium porro, <br>
                    ab asperiores sunt deleniti! Ea nostrum labore expedita nisi!</p>
                <br>
                <a class="diff-btn" href="difficulty/advance.php">CLICK HERE</a>
                <br>
            </div>
        </div>
    </section>


    <!-- OLAHRAGA -->

    <section id="olahraga" class="olahraga">
        <h1>PILIHAN OLAHRAGA</h1>
        <hr class="hr-olahraga">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, <br>
            hic ipsum quidem veritatis quos beatae dolorem sequi ratione impedit laudantium porro, <br>
            ab asperiores sunt deleniti! Ea nostrum labore expedita nisi!</p>

        <div class="olahraga-row">
            <div class="olahraga-col">
                <img src="asset/foto_/lari-portrait.png" alt="lari">
                <a class="olahraga-btn" href="lari.php">DETAILS</a>
            </div>

            <div class="olahraga-col">
                <img src="asset/foto_/pushup-portrait.png" alt="pushup">
                <a class="olahraga-btn" href="pushup.php">DETAILS</a>
            </div>

            <div class="olahraga-col">
                <img src="asset/foto_/situp-portrait.png" alt="situp">
                <a class="olahraga-btn" href="situp.php">DETAILS</a>
            </div>
        </div>
    </section>

    <section id="instruktur" class="instruktur">
        <div class="instruktur-title">
            <h1>DAFTAR INSTRUKTUR</h1>
            <hr class="hr-instruktur">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, <br>
                hic ipsum quidem veritatis quos beatae dolorem sequi ratione impedit laudantium porro, <br>
                ab asperiores sunt deleniti! Ea nostrum labore expedita nisi!</p>
        </div>

        <div class="instruktur-row">
            <div class="instruktur-col">
                <h3>Mbak Sri</h3>
                <img src="asset/instructor.png" alt="instructor">
                <div class="instruktur-btn">
                    <a href="">DETAILS</a>
                </div>
            </div>

            <div class="instruktur-col">
                <h3>Mbak Ayu</h3>
                <img src="asset/instructor.png" alt="instructor">
                <div class="instruktur-btn">
                    <a href="">DETAILS</a>
                </div>
            </div>

            <div class="instruktur-col">
                <h3>Mbak Siti</h3>
                <img src="asset/instructor.png" alt="instructor">
                <div class="instruktur-btn">
                    <a href="">DETAILS</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>