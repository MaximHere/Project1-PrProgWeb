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
            <h1>SIT UP</h1>
            <p><strong id="sports">Sit Up</strong> adalah latihan ketahanan abdomen untuk menguatkan dan
                mengencangkan
                otot-otot perut. Sit up dilakukan dengan cara badan berbaring telentang lalu mengangkat badan.
                Sit
                up
                melatih kekuatan otot rectus
                abdominis, abdominis transversal, obliques selain fleksor pinggul, dada, dan leher. Sit Up ini
                dilakukan
                dengan badan telentang, kemudian lutut
                ditekuk, lalu badan diangkat sampai posisi duduk sambil tangan mengepal kepala.
            </p>
        </div>

        <div class="vid-row">
            <table class="video-details">
                <tr>
                    <th class="video">
                        <iframe src="https://www.youtube.com/embed/MgcZ3VQZLnc" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                    </th>
                    <th class="details">
                        <h2>Workout Details</h2>
                        <br>
                        <div class="detail-list">
                            <p>Instructor : <strong>Mbak Siti</strong></p>
                            <p>Duration : <strong>30 minutes</strong></p>
                            <p>Calorie Burn : <strong>250-343</strong></p>
                            <p>Difficulty : <strong>Hard</strong></p>
                            <p>Equipment : <strong>Mat</strong></p>
                            <p>Trainning Type : <strong>Cardiovascular</strong></p>
                            <p>
                                Video Player : <strong><a href="https://youtu.be/MgcZ3VQZLnc">View on Youtube</a></strong>
                            </p>
                        </div>
                    </th>
                </tr>
            </table>
        </div>
    </section>


    <section class="article-container">
        <div class="article-content">
            <h1 class="title">Manfaat Sit Up</h1>
            <hr class="line-article">
            <div class="text">
                <p>
                    <strong id="sports">Sit Up</strong> dapat meningkatkan kekuatan dan menambah massa otot,
                    terutama
                    pada
                    otot perut dan pinggul. Gerakan pada tulang belakang saat melakukan Sit Up bisa meringankan
                    kekakuan
                    pada tulang belakang dan pinggul, sehingga pinggul lebih fleksibel, dan mobilitas tubuh
                    meningkat.
                    Sit
                    Up dapat mengencangkan otot perut tetapi tidak dengan menghilangkan lemak yang berada dibawah
                    otot
                    perut, misalnya pada lemak
                    yang menyelimuti organ dalam, seperti liver ataupun usus. Latihan Sit Up tak dapat menjangkau
                    proses
                    pembakaran lemak di organ bagian dalam tubuh.Olahraga ini bagus untuk melatih pernafasan
                    diafragma,
                    dengan diafragma yang sehat
                    dan kuat maka dapat memperbaiki pola pernafasan, meningkatkan fungsi pernafasan, dan
                    meningkatkan
                    daya
                    tahan atletik.
                </p>
            </div>
        </div>

        <div class="article-content">
            <h1 class="title">Cara Melakukan Sit Up</h1>
            <hr class="line-article">
            <div class="text">
                <p>
                    Melakukan gerakan sit up dengan benar sangatlah penting demi menghindari kerusakan atau
                    cedera pada otot-otot tubuh. Oleh karena itu, berikut adalah langkah melakukan sit up yang
                    benar:
                </p>

                <ul class="list">
                    <li>Mulailah dengan posisi berbaring telentang, kemudian tekuk lutut dan kaki menapak di lantai,
                        agar tubuh tetap stabil.</li>
                    <li>Letakkan tangan dalam posisi silang di atas dada atau letakkan di dekat telinga.</li>
                    <li>Letakkan tangan dalam posisi silang di atas dada atau letakkan di dekat telinga.</li>
                    <li>Turunkan badan kembali ke posisi berbaring seperti semula sambil menarik napas.</li>
                </ul>

                <p>
                    Anda bisa mendapatkan manfaat sit up dengan melakukan 10 kali sit up sehari. Setelah itu,
                    Anda bisa menambahnya secara bertahap sesuai kemampuan tubuh. Sit up merupakan salah satu
                    olahraga
                    otot
                    yang memiliki banyak manfaat, Meski begitu, Anda perlu hati-hati melakukannya karena jika
                    tekniknya
                    salah, sit up berisiko menyebabkan cedera.
                    Agar lebih aman, sebaiknya Anda minta bantuan instruktur fitness atau menonton beberapa tayangan
                    video
                    di internet tentang cara melakukan sit up yang benar. Bila perlu berkonsultasilah terlebih
                    dahulu
                    dengan
                    dokter untuk mengetahui keamanan melakukan sit up terhadap kondisi tubuh Anda.
                </p>
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