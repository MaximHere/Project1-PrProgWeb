<?php
require '../fungsi.php';

if (isset($_POST["login"])) {
    header("Location: login.php");
} elseif (isset($_POST["logout"])) {
    session_destroy();
    header("Location: ../index.php");
}

$id = $_GET["id"];
$sql_q = "SELECT * FROM olahraga NATURAL JOIN instruktor WHERE idOlahraga = '" . $id . "' ;";
$querry = mysqli_query($konek, $sql_q);
$data = mysqli_fetch_assoc($querry);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../style/details.css">
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

    <section class="head-container">
        <div class="title-head">
            <h1><?= $data['namaOlahraga']; ?></h1>
            <p><?= $data['definisi']; ?></p>
        </div>

        <div class="vid-row">
            <table class="video-details">
                <tr>
                    <th class="video">
                        <iframe src="<?= $data['embedYoutube']; ?>" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                    </th>
                    <th class="details">
                        <h2>Workout Details</h2>
                        <br>
                        <div class="detail-list">
                            <p>Instructor : <strong><?= $data['namaInstruktor']; ?></strong></p>
                            <p>Duration : <strong><?= $data['durasi']; ?></strong></p>
                            <p>Calorie Burn : <strong><?= $data['caloriBurn']; ?></strong></p>
                            <p>Difficulty : <strong><?= $data['kesulitan']; ?></strong></p>
                            <p>Equipment : <strong><?= $data['equipment']; ?></strong></p>
                            <p>Video Player : <strong><a href="<?= $data['youtube']; ?>">View on
                                        Youtube</a></strong></p>
                        </div>
                    </th>
                </tr>
            </table>
        </div>
    </section>

    <section class="article-container">
        <div class="article-content">
            <h1 class="title">Manfaat <?= $data['namaOlahraga']; ?> </h1>
            <hr class="line-article">
            <div class="text">
                <p><?= $data['manfaat']; ?></p>
            </div>
        </div>

        <div class="article-content">
            <h1 class="title">Cara Melakukan <?= $data['namaOlahraga']; ?> </h1>
            <hr class="line-article">
            <div class="text">
                <p><?= $data['cara']; ?></p>
            </div>
        </div>
    </section>

    <?php
    if (isset($_SESSION['username'])) {
        echo "<div class='edit'><form action='edit_detail.php?id=" . $id . "' method='post'>";
        echo '<button class="admin-submit" type="submit">Edit</button>';
        echo "</form></div>";
    }
    ?>


    <!-- <section class="col-komentar">
        <div class="komentar-content">
            <div class="komentar-title">
                <h3>Comment</h3>
            </div>
            <form action="/form/submit" method="POST">
                <textarea class="comment" placeholder="Type your comment here."></textarea>
                <br>
                <button class="submit-comment">Send</button>
            </form>
        </div>
    </section> -->

    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>

</body>

</html>