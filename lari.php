<?php
require 'fungsi.php';

if (isset($_POST["login"])) {
    header("Location: login.php");
} elseif (isset($_POST["logout"])) {
    session_destroy();
    header("Location: lari.php");
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
                <li><a href="" class="link">INSTRUKTUR</a></li>
                <li>
                    <a href="" class="link">TINGKAT KESULITAN</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="diff/beginner.php">Beginner</a></li>
                            <li><a href="diff/intermediete.php">Intermediete</a></li>
                            <li><a href="diff/advanced.php">Advanced</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="" class="link">OLAHRAGA</a></li>
            </ul>
        </div>
        <br>

    </section>

    <section class="head-container">
        <div class="title-head">
            <h1>LARI</h1>
            <p><strong id="sports">Olahraga Lari</strong> atau berlari adalah metode makhluk hidup untuk bergerak
                yang memungkinkan manusia dan binatang bergerak dengan cepat menggunakan kaki. Lari adalah cara yang
                lebih cepat untuk bergerak dibandingkan dengan berjalan. Lari adalah salah satu cabang olahraga
                tertua di dunia. Sebelum menjadi sebuah cabang olahraga, lari sudah dikenal oleh peradaban-peradaban
                manusia kuno.
            </p>
        </div>

        <div class="vid-row">
            <table class="video-details">
                <tr>
                    <th class="video">
                        <iframe src="https://www.youtube.com/embed/5umbf4ps0GQ" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                    </th>
                    <th class="details">
                        <h2>Workout Details</h2>
                        <br>
                        <div class="detail-list">
                            <p>Instructor : <strong>Mbak Ayu</strong></p>
                            <p>Duration : <strong>30 minutes</strong></p>
                            <p>Calorie Burn : <strong>280-520</strong></p>
                            <p>Difficulty : <strong>Beginner</strong></p>
                            <p>Equipment : <strong>No Equipment</strong></p>
                            <p>Trainning Type : <strong>Cardiovascular</strong></p>
                            <p>Video Player : <strong><a href="https://www.youtube.com/watch?v=5umbf4ps0GQ">View on
                                        Youtube</a></strong></p>
                        </div>
                    </th>
                </tr>
            </table>
        </div>
    </section>


    <section class="article-container">
        <div class="article-content">
            <h1 class="title">Manfaat Lari</h1>
            <hr class="line-article">
            <div class="text">
                <p>
                    <strong id="sports">Olahraga lari</strong> akan melatih jantung agar lebih kuat
                    dan mengurangi risiko penyakit jantung. Hal tersebut ditandakan dari detak jantung
                    yang berdegup lebih kencang dari biasanya ketika berlari. Jika sudah terbiasa,
                    degupan jantung itu akan kembali normal dan tidak terlalu kencang lagi.
                    Hal ini menandakan bahwa jantung sudah terbiasa dan sirkulasi darah menjadi lebih lancar,
                    sehingga jantung akan jadi lebih sehat dan dapat terhindar dari ancaman penyakit.
                </p>
            </div>
        </div>

        <div class="article-content">
            <h1 class="title">Cara Melakukan Lari</h1>
            <hr class="line-article">
            <div class="text">
                <p>
                    Meski terlihat sepele, faktanya masih banyak orang yang belum tahu cara lari yang benar. Padahal,
                    ini merupakan hal yang penting untuk diperhatikan. Dengan menerapkan cara berlari yang benar,
                    Anda bisa menjalani olahraga ini dengan lancar dan terhindar dari cedera.
                </p>
                <ul class="list">
                    <li>Hadapkan pandangan ke depan</li>
                    <li>Tegakkan dada dan jaga tubuh tetap rileks.</li>
                    <li>Jaga posisi pinggul tetap stabil dan arahkan sedikit ke depan.</li>
                    <li>
                        Angkatlah lutut ke depan sedikit lebih tinggi, ketika Anda melakukan lari jarak jauh.
                        Sebaliknya, ketika berlari dalam jarak dekat,
                        Anda bisa menjaga posisi lutut agar lebih rendah.
                    </li>
                    <li>Gunakan bagian tengah kaki untuk menginjak</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="col-komentar">
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
    </section>

    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>

</body>

</html>