<?php
require 'fungsi.php';


$id = $_GET["id"];
$sql_q = "SELECT * FROM olahraga WHERE idOlahraga = '" . $id . "' ;";
$querry = mysqli_query($konek, $sql_q);
$data = mysqli_fetch_assoc($querry);

// if (isset($_POST["edit"])){
//     header("Location: admin/edit_page.php?id=".$id);
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/details.css">
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

            <div class="search">
                <form action="home.php" method="post">
                    <div class="nav-links">
                        <ul>
                            <li><a href="home.php" class="link">HOME</a></li>
                            <li><a href="" class="link">INSTRUCTOR</a></li>
                            <li><a href="" class="link">WORKOUT TYPE</a></li>
                        </ul>
                    </div>
                </form>
        </nav>
    </section>
    <br>
    <?php
        if (isset($_SESSION['username'])) {
            echo "<h5 id='welcome-user'>Selamat datang, " . $_SESSION['username'] . "</h5><br>";
        }
        ?>

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
                            <p>Instructor : <strong><?= $data['instruktor']; ?></strong></p>
                            <p>Duration : <strong><?= $data['durasi']; ?></strong></p>
                            <p>Calorie Burn : <strong><?= $data['caloriBurn']; ?></strong></p>
                            <p>Difficulty : <strong><?= $data['kesulitan']; ?></strong></p>
                            <p>Equipment : <strong><?= $data['equipment']; ?></strong></p>
                            <p>Trainning Type : <strong>Cardiovascular</strong></p>
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
            echo "<div class='edit'><form action='admin/edit_page.php?id=" . $id . "' method='post'>";
            echo '<button class="admin-submit" type="submit" name="edit">Edit</button>';
            echo "</form></div>";
        }
        ?>



    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>

</body>

</html>