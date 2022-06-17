<?php
require 'fungsi.php';
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
}

if(isset($_POST['difficulty'])){
    $diff = " AND kesulitan = '".$_POST['difficulty']."'";
}else{
    $diff = "";
    echo "<script>disable('difficulty');</script>";
}

if(isset($_POST['instruktor'])){
    $inst = " AND idInstruktor = '%".$_POST['instruktor']."%'";
}else{
    $inst = "";
}


if(isset($_POST['cari'])){
    $cari = strtolower($_POST["cari"]);
}

$sql = "SELECT * FROM olahraga NATURAL JOIN instruktor WHERE namaOlahraga LIKE '%".$cari."%'".$inst.$diff.";";    
$result = execute_querry($sql);
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
            <form action="advance_search.php" method="post">
                <input class="search-box" type="text" placeholder="Search Here" name="cari" value="<?=$cari;?>">
                <button class="login-btn" name="advance">Advance Search</button>
                
                <br><br>
                <input type="checkbox" name="akdif" id="akdif" onclick="modify('akdif', 'difficulty');" checked>
                <label for="difficulty">Tingkat Kesulitan</label>
                <select name="difficulty" id="difficulty">
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediete">Intermediete</option>
                    <option value="Hard">Hard</option>
                </select>

                <br><br>
                <input type="checkbox" name="akins" id="akins" onclick="modify('akins', 'instruktor');" checked>
                <label for="instruktor">Instruktor</label>
                <select name="instruktor" id="instruktor">
                    <?php
                        $data = execute_querry("SELECT * FROM instruktor");
                        while ($row = mysqli_fetch_assoc($data)){
                            echo "<option value='".$row['idInstruktor']."'>".$row['namaInstruktor']."</option>";
                        }
                    ?>
                </select>
            </form>
    </div>

    <div class="hasil">
        <h2><?php
        if(isset($_POST['cari'])){
            echo mysqli_num_rows($result);
        }else{
            echo "0";
        }
        
        ?> hasil </h2>
        <hr class="hr-hasil">
        <div>
            <ul>
                <?php
                if(isset($_POST['cari']) and mysqli_num_rows($result)>0){
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
<script>
    
function modify(idstr, idmod){
    var x = document.getElementById(idstr);
    if(x.checked){
        enable(idmod);
    }
    else{
        disable(idmod);
    }
}

function disable(idstr) {
document.getElementById(idstr).disabled = true;
}

function enable(idstr) {
document.getElementById(idstr).disabled = false;
}

function unchecked(idstr){
    document.getElementById(idstr).checked = false;
}
</script>
<?php
if(!isset($_POST['instruktor'])){
    echo "<script>disable('instruktor'); unchecked('akins');</script>";
}
if(!isset($_POST['difficulty'])){
    echo "<script>disable('difficulty'); unchecked('akdif');</script>";
}
?>
</html>