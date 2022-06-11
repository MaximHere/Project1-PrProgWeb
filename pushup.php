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

    </section>
    <section class="head-container">
        <div class="title-head">
            <h1>PUSH UP</h1>
            <p><strong id="sports">Push Up</strong> adalah jenis senam kekuatan yang berfungsi untuk menguatkan
                otot biseps maupun triseps. Posisi awal tidur
                tengkurap dengan tangan di sisi kanan kiri badan. Kemudian, badan didorong ke atas dengan
                kekuatan
                tangan. Posisi kaki dan badan tetap lurus atau tegap.
                Setelah itu, badan diturunkan dengan tetap menjaga kondisi badan dan kaki tetap lurus. Badan
                turun
                tanpa menyentuh lantai atau tanah.
                Naik lagi dan dilakukan secara berulang.</p>
        </div>

        <div class="vid-row">
            <table class="video-details">
                <tr>
                    <th class="video">
                        <iframe src="https://www.youtube.com/embed/Q7cPaJZoOng?start=4" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                    </th>
                    <th class="details">
                        <h2>Workout Details</h2>
                        <br>
                        <div class="detail-list">
                            <p>Instructor : <strong>Mbak Sri</strong></p>
                            <p>Duration : <strong>15 minutes</strong></p>
                            <p>Calorie Burn : <strong>100-171</strong></p>
                            <p>Difficulty : <strong>Intermediate</strong></p>
                            <p>Equipment : <strong>Mat</strong></p>
                            <p>Trainning Type : <strong>Cardiovascular</strong></p>
                            <p>Video Player : <strong><a class="link" href="https://youtu.be/MgcZ3VQZLnc">View on Youtube</a></strong>
                            </p>
                        </div>
                    </th>
                </tr>
            </table>
        </div>
    </section>


    <section class="article-container">
        <div class="article-content">
            <h1 class="title">Manfaat Push Up</h1>
            <hr class="line-article">
            <div class="text">
                <p>
                    Manfaat dari <strong id="sports">Push Up</strong> sendiri adalah dapat memperkuat otot lengan dan juga otot perut. Manfaat lain yang didapatkan dari push up adalah dapat membakar kalori
                    yang cukup besar
                </p>
            </div>
        </div>

        <div class="article-content">
            <h1 class="title">Cara Melakukan Pushup</h1>
            <hr class="line-article">
            <div class="text">
                <p>
                    Melakukan gerakan push up dengan benar sangatlah penting demi menghindari kerusakan atau
                    cedera pada otot-otot tubuh. Oleh karena itu, berikut adalah Cara melakukan push up :
                </p>
                <ul class="list">
                    <li>Telungkup di atas matras dengan pergelangan tangan sejajar di bawah bahu.</li>
                    <li>Gerakkan lutut ke belakang sehingga tubuh (dari bahu hingga lutut) berada dalam satu garis lurus. Tahan posisi ini.</li>
                    <li>Kontraksikan otot perut dan angkat kaki serta tulang kering dari lantai.</li>
                    <li>Tekuk siku secara perlahan saat menurunkan dada ke lantai. Dekatkan dada beberapa sentimeter dari lantai, lalu dorong dengan telapak tangan agar lengan lurus dan kembali ke posisi awal.</li>
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