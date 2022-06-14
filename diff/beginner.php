<?php

use LDAP\Result;

require '../fungsi.php';

if (isset($_POST["login"])) {
    header("Location: ../login.php");
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
    <style>
        .create-btn {
            margin: 20px auto;
            width: 400px;
        }
    </style>
</head>

<body>
<section class="header">
        <nav>
            <a href="../index.php"><img src="../asset/logo-blue.png" alt="logo"></a>
            <div class="nav-right">
                <form action="../index.php" method="post">
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
                <li><a href="../index.php" class="link">HOME</a></li>
                <li><a href="../instruktur.php" class="link">INSTRUKTUR</a></li>
                <li>
                    <a class="link">TINGKAT KESULITAN</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="beginner.php">Beginner</a></li>
                            <li><a href="intermediete.php">Intermediete</a></li>
                            <li><a href="advanced.php">Advanced</a></li>
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

    <section class="difficulty">
        <h1>Beginner</h1>
        <p>Selamat datang di kategori olahraga Beginner, <br>
            olahraga pada tingkat kesulitan ini sangat cocok untuk anda <br>
            yang baru akan memulai untuk melakukan olahraga ataupun untuk anda yang ingin olahraga santai</p>
        
        <br>
        <h3>Daftar Olahraga Beginner</h3>

        
            
                <br>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="diff-row">';
                    echo '<div class="diff-col">';
                    echo '<div>';
                    echo "<img src='../" . $row['gambar'] . "' alt='" . $row['namaOlahraga'] . "' style='width:90% ;'>";
                    echo '<br>';
                    echo "<a class='olahraga-btn' href='../admin/detail_page.php?id=" . $row['idOlahraga'] . "'>" . $row['namaOlahraga'] . "</a>";
                    echo "</div>";
                    echo "<div class='admin-btn'>";
                    if (isset($_SESSION['username'])) {
                        echo "<a class='edit-btn' href='../admin/edit_detail.php?id=" . $row['idOlahraga'] . "'>Edit</a><br>";
                        echo "<a class='delete-btn' href='../admin/delete_olahraga.php?id=" . $row['idOlahraga'] . "'>Delete</a>";
                    }
                    echo "<br><br> 
                            </div>";
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            
        
    </section>

    <!-- <section class="instruktur">
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
    </section> -->
    <?php
    if (isset($_SESSION['username'])) {
        echo "<div class='create-btn'><form action='../admin/create_detail.php' method='post'>";
        echo '<button class="admin-submit" type="submit">Tambah Data</button>';
        echo "</form></div>";
    }
    ?>
    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>

</body>
</html>