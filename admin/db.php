<?php
require '../fungsi.php';

if (isset($_POST["login"])) {
    header("Location: login.php");
} elseif (isset($_POST["logout"])) {
    session_destroy();
    header("Location: home.php");
}


if (isset($_POST["signup"])) {
    header("Location: signup.php");
}



// Select Data
$sql = "SELECT * FROM olahraga;";
$result = mysqli_query($konek, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../style/db.css">
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
            <a href="../home.php"><img src="../asset/logo-blue.png" alt="logo"></a>
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
                            echo "";
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
                <li><a href="create_detail.php" class="link">TAMBAH OLAHRAGA</a></li>
            </ul>
        </div>
        <br>

    </section>

    <div class="title">
        <h1>Database Olahraga</h1>
        <hr>
    </div>

    <section class="tabel-olahraga">
        <table class="container">
            <thead class="table-header">
                <td>#</td>
                <td>Nama Olahraga</td>
                <td>Nama Instruktur</td>
                <td>Kesulitan</td>
                <td>Foto Olahraga</td>
                <td>Actions</td>
            </thead>
            <tbody class="table-row">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="action-btn">
                        <!-- see detail -->
                        <!-- edit -->
                        <!-- delete -->
                </td>
            </tbody>
        </table>

    </section>

    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>
</body>

</html>