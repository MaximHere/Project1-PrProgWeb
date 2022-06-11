<?php

use LDAP\Result;

require '../fungsi.php';

if (isset($_POST["login"])){
    header("Location: ../login.php");
}
elseif (isset($_POST["logout"])) {
    session_destroy();
    header("Location: beginner.php");
}

// Select Data
$sql="SELECT * FROM olahraga WHERE Kesulitan = 'Advanced';";
$result=mysqli_query($konek,$sql);

// var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Health and Fitness</title>
    <link rel="stylesheet" href="../style/diff.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        
    </style>
</head>

<body>
<section class="header">
        <nav>
            <a href="../home.php"><img src="../asset/logo-blue.png" alt="logo"></a>
            <div class="nav-right">
                <form action="../home.php" method="post">
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
                <li><a href="../home.php" class="link">HOME</a></li>
                <li><a href="#instruktur" class="link">INSTRUKTUR</a></li>
                <li>
                    <a href="" class="link">TINGKAT KESULITAN</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="beginner.php">Beginner</a></li>
                            <li><a href="intermediete.php">Intermediete</a></li>
                            <li><a href="advanced.php">Advanced</a></li>
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
        }
        ?>
    </section>

    <section class="difficulty">
        <h1>Advanced</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, <br>
            hic ipsum quidem veritatis quos beatae dolorem sequi ratione impedit laudantium porro, <br>
            ab asperiores sunt deleniti! Ea nostrum labore expedita nisi!</p>
        
        <br>
        <h3>Daftar Olahraga Advanced</h3>

        <div class="diff-row">
            <div class="diff-col">
                <br>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div>';
                    echo "<img src='" . $row['gambar'] . "' alt='" . $row['namaOlahraga'] . "'>";
                    echo '<br>';
                    echo "<a class='olahraga-btn' href='../admin/detail_page.php?id=" . $row['idOlahraga'] . "'>" . $row['namaOlahraga'] . "</a>";
                    echo "</div>";
                    echo "<div class='admin-btn'>";
                    if (isset($_SESSION['username'])) {
                        echo "<a class='edit-btn' href='../admin/edit_detail.php?id=" . $row['idOlahraga'] . "'>Edit</a><br>";
                        echo "<a class='delete-btn' href='../admin/edit_detail.php?id=" . $row['idOlahraga'] . "'>Delete</a>";
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
<script>

</script>
</html>