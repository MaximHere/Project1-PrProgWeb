<?php
require 'fungsi.php';

if(isset($_POST['advance'])){
    $lokasi = "Location: advance_search.php?cari=".$_POST['cari'];
    header($lokasi);
}
if(isset($_POST['cari'])){
    $cari = strtolower($_POST["cari"]);
    if($cari === "mudah" or $cari === "gampang" or $cari === "easy" or $cari === "ez"){
        $sql = "SELECT * FROM olahraga NATURAL JOIN instruktor WHERE kesulitan = 'Beginner' OR kesulitan = 'Intermediete'";
    }elseif($cari === "susah" or $cari === "sulit"){
        $sql = "SELECT * FROM olahraga NATURAL JOIN instruktor WHERE kesulitan = 'Hard' OR kesulitan = 'Intermediete'";
    }else{
        $sql = "SELECT * FROM olahraga NATURAL JOIN instruktor WHERE namaOlahraga LIKE '%".$cari."%' OR namaInstruktor LIKE '%".$cari."%' OR kesulitan LIKE '%".$cari."%';";
    }
    
    $result = execute_querry($sql);
    

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/search.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="asset/minilogo-blue.png" type="image/icon type">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>HEALTH & FITNESS</title>
</head>

<body>
<section class="header">
        <nav>
            <a href="index.php"><img src="asset/logo-blue.png" alt="logo"></a>
            <div class="nav-right">
                <form action="indexs.php" method="post">
                    <div class="user-btn">
                       
                    </div>
                </form>
            </div>
        </nav>
        <div class="nav-links">
            <ul>
                <li><a href="index.php" class="link">HOME</a></li>
                <li><a href="instruktur.php" class="link">INSTRUKTUR</a></li>
                <li>
                    <a class="link">TINGKAT KESULITAN</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="diff/beginner.php">Beginner</a></li>
                            <li><a href="diff/intermediete.php">Intermediete</a></li>
                            <li><a href="diff/advanced.php">Advanced</a></li>
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


    <div class="search">
        <h1>hasil pencarian</h1>
            <hr class="hr-search">
            <form action="search.php" method="post">
                <input class="search-box" type="text" placeholder="Search Here" name="cari" value="<?=$_POST["cari"] ;?>" >
                <button class="login-btn" name="">Search</button>
                <button class="sign-btn" name="advance">Advance Search</button>
            </form>
    </div>

    <div class="hasil">
        <h2><?=mysqli_num_rows($result);?> hasil </h2>
        <hr class="hr-hasil">
        <div>
            <ul>
                <?php
                if(mysqli_num_rows($result)>0){
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<li><a href='admin/detail_page.php?id=".$row["idOlahraga"]."'>".$row["namaOlahraga"]."</a>";
                        echo "<table>";
                        echo "<tr><td>Instruktor: ".$row["namaInstruktor"]."</td></tr>";
                        echo "<tr><td>Kesulitan: ".$row["kesulitan"]."</td></tr>";
                        echo "";
                        echo "</table>";
                        echo "</li>";
                    }
                }else{
                    echo "Tidak ada Hasil";
                }
                
                ?>
            </ul>
        </div>
    </div>

    
    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>
</body>
</html>