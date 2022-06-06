<?php

use LDAP\Result;

require '../fungsi.php';

if (isset($_POST["login"])){
    header("Location: login.php");
}
elseif (isset($_POST["logout"])) {
    session_destroy();
    header("Location: beginer.php");
}

// Select Data
$sql="SELECT * FROM olahraga WHERE Kesulitan = 'Intermediete';";
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
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        
    </style>
</head>

<body class="home-page">
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
                <form action="home.php" method="post">
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
                </form>
                
            </div>
        </div>
    </header>

    <main>
        <div class="details">
            <h1>Welcome to FULL SEHAT</h1>
            <article>"Ini adalah sebuah web olahragawan sejati..</article>
            <article>bagi kalian kaum rebahan, jangan akses website ini :)"</article>
        </div>
        <br>
        <div class="kolom-pilihan">
            <h2>Daftar Olahraga Intermediete</h2>
            <br>
            <table class="nama-olahraga">
                <!-- <tr>
                    <td class="jarak"></td>
                    <td><img src="pic/foto/push-up.jpg" alt="push-up"> </td>
                    <td class="jarak"></td>
                    <td><img src="pic/foto/lari.jpg" alt="lari"> </td>
                    <td class="jarak"></td>
                    <td><img src="pic/foto/sit-up.jpg" alt="sit-up"> </td>
                    <td class="jarak"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="Push Up.php">PUSH UP</a></td>
                    <td></td>
                    <td><a href="LARI.php">LARI</a></td>
                    <td></td>
                    <td><a href="SIT-UP.php">SIT UP</a></td>
                    <td></td>
                </tr> -->
                
                
                <?php
                while ($row=mysqli_fetch_assoc($result)){
                    echo '<tr>';
                    echo '<td>';
                    echo '<div class="block-content">';
                    echo "<img src='".$row['gambar']."' alt='".$row['namaOlahraga']."'>";
                    echo '<br>';
                    echo "<a href='detail_page.php?id=".$row['idOlahraga']."'>".$row['namaOlahraga']."</a>";
                    
                    echo "</div>";
                    echo "</td>";
                    echo "</tr>";
                    echo "<tr><td>";
                    if(isset($_SESSION['username'])){
                        echo "<a href='edit_detail.php?id=".$row['idOlahraga']."'>Edit</a>";
                    }
                    echo        "<br><br>
                        </td></tr>";

                }
                ?>
                
                
            </table>
        </div>
        <br>
        <br>
        <div class="kolom-pilihan">
            <h2>Instruktur</h2>
            <table class="instruktur">
                <tr>
                    <td class="jarak"></td>
                    <td><img src="pic/instructor.png" alt="instructor"> </td>
                    <td class="jarak"></td>
                    <td><img src="pic/instructor.png" alt="instructor"> </td>
                    <td class="jarak"></td>
                    <td><img src="pic/instructor.png" alt="instructor"> </td>
                    <td class="jarak"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="">Mbak Sri</a></td>
                    <td></td>
                    <td><a href="">Mbak Ayu</a></td>
                    <td></td>
                    <td><a href="">Mbak Siti</a></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </main>


    <footer>
        <p class="CR">Copyright &copy; Fandy Abet Maxim</p>
    </footer>

</body>
<script>

</script>
</html>