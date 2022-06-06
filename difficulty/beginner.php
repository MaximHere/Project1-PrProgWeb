<?php

use LDAP\Result;

require '../fungsi.php';

if (isset($_POST["login"])) {
    header("Location: login.php");
} elseif (isset($_POST["logout"])) {
    session_destroy();
    header("Location: beginner.php");
}

// Select Data
$sql = "SELECT * FROM olahraga WHERE Kesulitan = 'Beginner';";
$result = mysqli_query($konek, $sql);

// var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../style/diff.css">
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
            <a href="home.php"><img src="../asset/logo-blue.png" alt="logo"></a>

            <div class="search">
                <form action="home.php" method="post">
                    <div class="nav-links">
                        <ul>
                            <li><a href="../home.php" class="link">HOME</a></li>
                            <li><a href="" class="link">INSTRUCTOR</a></li>
                            <li><a href="" class="link">WORKOUT TYPE</a></li>
                        </ul>
                    </div>
        </nav>
    </section>
    <br>
    <?php
        if (isset($_SESSION['username'])) {
            echo "<h5 id='welcome-user'>Selamat datang, " . $_SESSION['username'] . "</h5><br>";
        }
        ?>

    <section class="difficulty">
        <h1>DIFFICULTY</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, <br>
            hic ipsum quidem veritatis quos beatae dolorem sequi ratione impedit laudantium porro, <br>
            ab asperiores sunt deleniti! Ea nostrum labore expedita nisi!</p>
        
        <br>
        <h3>Daftar Olahraga Beginner</h3>

        <div class="diff-row">
            <div class="diff-col">
                <br>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div>';
                    echo "<img src='" . $row['gambar'] . "' alt='" . $row['namaOlahraga'] . "'>";
                    echo '<br>';
                    echo "<a href='../admin/detail_page.php?id=" . $row['idOlahraga'] . "'>" . $row['namaOlahraga'] . "</a>";
                    echo "</div>";
                    echo "<div>";
                    if (isset($_SESSION['username'])) {
                        echo "<a href='../admin/edit_detail.php?id=" . $row['idOlahraga'] . "'>Edit</a><br>";
                        echo "<a href='../admin/edit_detail.php?id=" . $row['idOlahraga'] . "'>Delete</a>";
                    }
                    echo "<br><br> 
                            </div>";
                }
                ?>
            </div>
        </div>
    </section>

    <section class="instruktur">
        <div class="instruktur-title">
        <h1>DAFTAR INSTRUKTUR</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, <br>
            hic ipsum quidem veritatis quos beatae dolorem sequi ratione impedit laudantium porro, <br>
            ab asperiores sunt deleniti! Ea nostrum labore expedita nisi!</p>
        </div>
        
        <div class="instruktur-row">
            <div class="instruktur-col">
                <h3>Mbak Sri</h3>
                <img src="../asset/instructor.png" alt="instructor">
                <div class="instruktur-btn">
                <a href="">DETAILS</a>
                </div>
            </div>

            <div class="instruktur-col">
                <h3>Mbak Ayu</h3>
                <img src="../asset/instructor.png" alt="instructor">
                <div class="instruktur-btn">
                <a href="">DETAILS</a>
                </div>
            </div>

            <div class="instruktur-col">
                <h3>Mbak Siti</h3>
                <img src="../asset/instructor.png" alt="instructor">
                <div class="instruktur-btn">
                <a href="">DETAILS</a>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>

</body>
</html>