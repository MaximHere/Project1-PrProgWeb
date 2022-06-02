<?php
require 'fungsi.php';

$id = $_GET["id"];
$sql_q = "SELECT * FROM olahraga WHERE idOlahraga = '".$id."' ;";
$querry=mysqli_query($konek,$sql_q);
$data=mysqli_fetch_assoc($querry);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lari</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="nav">
        <div class="topBar">
            <a href="home.php"><img src="pic/home button.png" alt="home icon"></a>
            <h1 id="webname">FULL SEHAT MAZZEHHH</h1>
            <?php
                if(isset($_SESSION['username'])){
                    echo "<h5>Selamat datang, ".$_SESSION['username']."</h5>";
                }
                
            ?>
            <div class="topBar-right">
                <input class="search-box" type="text" placeholder="Search Here">
                <button class="SearchButton">Search</button>
                <?php
                    if(isset($_SESSION['username'])){
                    echo "<button class='SearchButton' name='logout'>Logout</button>";
                    }
                    else{
                        echo "<button class='SearchButton' name='login'>Login</button>";
                    }
                    ?>
            </div>
        </div>
    </header>

    <main>
        <table class="video-details">
            <tr>
                <th class="video">
                    <iframe width="1024" height="576" src="<?= $data['embedYoutube'] ;?>"
                        title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                </th>
                <th class="details">
                    <h2>Workout Details</h2>
                    <br>
                    <div class="detail-list">
                        <p>Instructor : <strong><?= $data['instruktor'];?></strong></p>
                        <p>Duration : <strong><?= $data['durasi'];?></strong></p>
                        <p>Calorie Burn : <strong><?= $data['caloriBurn'];?></strong></p>
                        <p>Difficulty : <strong><?= $data['kesulitan'];?></strong></p>
                        <p>Equipment : <strong><?= $data['equipment'];?></strong></p>
                        <p>Trainning Type : <strong>Cardiovascular</strong></p>
                        <p>Video Player : <strong><a href="<?=$data['youtube'];?>" >View on
                                    Youtube</a></strong></p>
                    </div>
                </th>
            </tr>
        </table>
        <div class="artikel">
            <div class="Desc">
                <h2 class="Title">Apa itu Olahraga <?=$data['namaOlahraga'];?> ?</h2>
                <br>
                <p class="text">
                    <?= $data['definisi'];?>
                </p>
            </div>
            <div class="Desc">
                <h2 class="Title">Manfaat dari Olahraga Lari</h2>
                <br>
                <p class="text">
                   <?= $data['manfaat'];?>
                </p>
            </div>

            <div class="Desc">
                <h2 class="Title"> Cara Melakukan <?=$data['namaOlahraga'];?> dengan Benar</h2>
                <br>
                <div class="text">
                    <p><?=$data['cara'];?></p>
                    <br>
                </div>
            </div>
        </div>


        <?php
        if(isset($_SESSION['username'])){
            echo "<form action='edit_detail.php?id=".$id."' method='post'>";
            echo '<button class="submit" type="submit">Edit</button>';
            echo "</form>";
        }
        ?>
    </main>

    <section class="col-komentar">
        <h3>Comment</h3>
        <form action="/form/submit" method="POST">
            <textarea class="comment" placeholder="Type your comment here."></textarea>
            <br>
            <button class="submit">Send</button>
          </form>
    </section>

    <footer>
        <p class="CR">Copyright &copy; Fandy Abet Maxim</p>
    </footer>

</body>

</html>