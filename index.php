<?php
require 'fungsi.php';



if (isset($_POST["login"])) {
    header("Location: login.php");
} elseif (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
}


if (isset($_POST["signup"])) {
    header("Location: signup.php");
}

if (isset($_POST["admin"])) {
    header("Location: admin/db.php");
}


// Select Data
$sql = "SELECT * FROM olahraga;";
$result = mysqli_query($konek, $sql);

$sql_inst = "SELECT * FROM instruktor";
$hasil = execute_querry($sql_inst);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/home.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="asset/minilogo-blue.png" type="image/icon type">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>HEALTH & FITNESS</title>
</head>

<body>
<section class="header">
        <nav>
            <a href="index.php"><img src="asset/logo.png" alt="logo"></a>
            <div class="nav-right">
            
                <form action="index.php" method="post">
                    <div class="user-btn">
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo '<button class="crud-btn" name="admin" onclick="location.href="admin/db.php"">Admin</button>';
                            echo "<button class='login-btn' name='logout'>Logout</button>";
                        }else if(isset($_SESSION['guest'])) {
                            echo "<button class='login-btn' name='logout'>Logout</button>";
                        }
                        else {
                            echo "<button class='login-btn' name='login'>Login</button>";
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['username']) or isset($_SESSION['guest'])) {
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
                <li><a href="index.php" class="link">HOME</a></li>
                <li><a href="#instruktur" class="link">INSTRUKTUR</a></li>
                <li>
                    <a href="#difficulty" class="link">TINGKAT KESULITAN</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="diff/beginner.php">Beginner</a></li>
                            <li><a href="diff/intermediete.php">Intermediete</a></li>
                            <li><a href="diff/advanced.php">Advanced</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#olahraga" class="link">OLAHRAGA</a></li>
            </ul>
        </div>
        <br>
        <?php
        if (isset($_SESSION['username'])) {
            echo "<h5 id='welcome-user'>Selamat datang, " . $_SESSION['username'] . "</h5><br>";
        } else if (isset($_SESSION['guest'])){
            echo "<h5 id='welcome-user'>Selamat datang, " . $_SESSION['guest'] . "</h5><br>";
        }
        ?>
    </section>

    

    <div class="web-title">
        <h1>Welcome to<br>
        FULL SEHAT</h1>
        <p>Ini adalah sebuah website Olahragawan sejati <br> bagi kalian kaum rebahan, jangan akses website ini ya gais !</p>
        <?php
        if ((!isset($_SESSION['username'])) and (!isset($_SESSION['guest']))) {
            echo "<a href='signup.php' class='free-btn'>start for free</a>";
            echo "<p>Sudah punya akun ? <a href='login.php' class='login'> Login</a></p>";
        } else {
            echo " ";
        }
        ?>
        
        
        <hr class="hr-header1">
        <hr class="hr-header2">
    </div>

    <div class="search">
        <h1>Cari olahraga kesukaanmu <br> di database kami.</h1>
            <hr class="hr-search">
            <p>Pelajari tentang jumlah kalori, tingkat kesulitan, instruktur, dan tipe olahraga <br>
            sesuai kebutuhan anda.</p>
            <form action="search.php" method="post">
                <input class="search-box" type="text" placeholder="Search Here" name="cari">
            </form>
    </div>

    <!-- INSTRUKTUR -->
    <section id="instruktur" class="instruktur">
        <br>
        <br>
        <div class="instruktur-title">
            <h1>daftar instruktur</h1>
            <hr class="hr-instruktur">
            <p>Kami juga menyediakan instruktur agar anda tidak terkena cedera
                <br>Berikut merupakan instruktur terbaik kami.</p>
        </div>

        <div class="instruktur-row">
            <?php
            while ($row = mysqli_fetch_assoc($hasil)){
                echo " <div class='instruktur-col'>";
                echo "<h3>".$row['namaInstruktor']."</h3>";
                echo "<img src='asset/instructor.png' alt='instructor'>";
                echo "<div class='instruktur-btn'>";
                echo "<a href='instruktur.php?id=".$row['idInstruktor']."'>DETAILS</a>";
                echo "</div>";
                echo "</div>";
            }
            ?>
           
                

            
            <!-- <div class="instruktur-col">
                <h3>Mbak Siti</h3>
                <img src="asset/instructor.png" alt="instructor">
                <div class="instruktur-btn">
                    <a href="">DETAILS</a>
                </div>
            </div> -->
        </div>
    </section>
    

    <!-- DIFFICULTY -->
    <section class="difficulty" id="difficulty">
        <h1>tingkat kesulitan</h1>
        <hr class="hr-difficulty">
        <p>Selamat datang, silahkan pilih tingkat kesulitan yang sesuai
            dengan kemampuan anda <br> agar tercapai tubuh ideal yang anda inginkan</p>

        <div class="difficulty-container">
        <div class="diff-row">
            <div class="diff-col">
                <h3>Beginner</h3>
                <p>Jika Anda belum pernah berolahraga, mungkin level ini cocok dengan Anda</p>
                <br>
                <a class="diff-btn" href="diff/beginner.php">CLICK HERE</a>
                <br>
            </div>

            <div class="diff-col">
                <h3>Intermediete</h3>
                <p>Anda cukup sering untuk berolahraga 2 sampai 3 hari dalam satu minggu</p>
                <br>
                <a class="diff-btn" href="diff/intermediete.php">CLICK HERE</a>
                <br>
            </div>

            <div class="diff-col">
                <h3>Advanced</h3>
                <p>Sudah menjadi rutinitas harian berolahraga lebih dari 4 hari dalam satu minggu</p>
                <br>
                <a class="diff-btn" href="diff/advanced.php">CLICK HERE</a>
                <br>
            </div>
        </div>
        </div>
    </section>

    <!-- OLAHRAGA -->
    <section id="olahraga" class="olahraga">
        <h1>pilihan olahraga</h1>
        <hr class="hr-olahraga">
        <p>Silahkan pilih yang sesuai dengan kemampuan Anda!</p>

        <div class="olahraga-row">
            <?php
            while($rowOlahraga = mysqli_fetch_assoc($result)){
                echo "<div class='olahraga-col'>";
                echo "<img src='".$rowOlahraga["gambar"]."' alt='".$rowOlahraga['namaOlahraga']."'>";
                echo "<a class='olahraga-btn' href='admin/detail_page.php?id=".$rowOlahraga['idOlahraga']."'>".$rowOlahraga['namaOlahraga']."</a>";
                echo "</div>";
            }
            ?>   
    
            <!-- <div class="olahraga-col">
                <img src="asset/foto_/situp-portrait.png" alt="situp">
                <a class="olahraga-btn" href="situp.php">SIT UP</a>
            </div> -->
        </div>
    </section>


    



    

    
    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>
</body>

</html>