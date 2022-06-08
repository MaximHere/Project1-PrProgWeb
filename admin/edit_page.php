<?php
require '../fungsi.php';


if($_GET){
	$id = $_GET["id"];
	$sql_q = "SELECT * FROM olahraga WHERE idOlahraga = '".$id."' ;";
    $querry=mysqli_query($konek,$sql_q);
    $data=mysqli_fetch_assoc($querry);
}
else if($_POST){
    $id = $_POST["idOlahraga"];
	$namaOlahraga = $_POST["namaOlahraga"];
	$instruktor = $_POST["instruktor"];
	$durasi = $_POST["durasi"];
	$caloriBurn = $_POST["caloriBurn"];
	$kesulitan = $_POST["kesulitan"];
	
	$equipment = $_POST["equipment"];
	$youtube = $_POST["youtube"];
    $embedYoutube = $_POST["embedYoutube"];
    $definisi = $_POST["definisi"];
    $manfaat = $_POST["manfaat"];
    $cara = $_POST["cara"];
    
    var_dump($_FILES);

    if ($_FILES['fileGambar']['size'] != 0){
        $isValid = true;
        $targetFolder = "../asset/foto/";

        if($_FILES['fileGambar']['type'] == "image/png"){
            $ext = ".png";
        }
        else if($_FILES['fileGambar']['type'] == "image/jpeg"){
            $ext = ".jpeg";
        }
        else{
            $isValid = false;
        }

        if ($isValid){
            $path = $targetFolder.$namaOlahraga.$ext;
            var_dump($path);
            if(move_uploaded_file($_FILES['fileGambar']['tmp_name'], $path)){
                $sql = "UPDATE olahraga SET namaOlahraga='".$namaOlahraga."', instruktor='".$instruktor."', durasi='".$durasi."', caloriBurn='".$caloriBurn."', 
                kesulitan='".$kesulitan."', equipment='".$equipment."', youtube='".$youtube."', embedYoutube='".$embedYoutube."', 
                definisi='".$definisi."', manfaat='".$manfaat."', cara='".$cara."', gambar='".$path."'  WHERE idOlahraga= '".$id."' ";

                
            }else{
                echo "<script>alert('Berhasil Upload File')</script>";
            }
        }
        
    }

    else{
        $sql = "UPDATE olahraga SET namaOlahraga='".$namaOlahraga."', instruktor='".$instruktor."', durasi='".$durasi."', caloriBurn='".$caloriBurn."', kesulitan='".$kesulitan."', equipment='".$equipment."'
	, youtube='".$youtube."', embedYoutube='".$embedYoutube."', definisi='".$definisi."', manfaat='".$manfaat."', cara='".$cara."' WHERE idOlahraga= '".$id."' ";
    }
	

	if(mysqli_query($konek, $sql)){
        echo "<script>alert('Berhasil mengubah data')</script>";
	}
	else{
        echo "<script>alert('Gagal mengubah data')</script>";
	}
    header("Location: ../detail_page.php?id=".$id);
}


	// $sql_q = "SELECT * FROM olahraga WHERE idOlahraga = ".$id."' ;";
	// $querry=mysqli_query($konek,$sql_q);
	// $data=mysqli_fetch_assoc($querry);

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
            <a href="../home.php"><img src="../asset/logo-blue.png" alt="logo"></a>

            <div class="search">
                <form action="../home.php" method="post">
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
    <form action="edit_page.php" method="post">
    <input type="hidden" name="idOlahraga" value="<?= $id;?>">
    <section class="head-container">
        <div class="title-head">
            <label for="namaOlahraga">Nama Olahraga: </label>
                <input type="text" name="namaOlahraga" id="namaOlahraga" value="<?= $data['namaOlahraga'] ;?>" onkeyup="update_field()">
            <p><label for="definisi">Definisi: </label><br>
                <textarea name="definisi" id="definisi" cols="80" rows="5"><?= $data['definisi'];?></textarea></p>
        </div>

        <div class="vid-row">
            <table class="video-details">
                <tr>
                    <th class="video">
                        <label for="embedYoutube">Embeded link: </label>
                    <input type="text" name="embedYoutube" value="<?= $data['embedYoutube'] ;?>"><br>
                    <label for="fileGambar" class="form-label">Upload Picture</label>
                    <input class="form-control" type="file" id="fileGambar" name="fileGambar">
                    </th>
                    <th class="details">
                        <h2>Workout Details</h2>
                        <br>
                        <div class="detail-list">
                            <p>Instructor : <strong><input type="text" name="instruktor" value="<?= $data['instruktor'];?>"></strong></p>
                            <p>Duration : <strong><input type="text" name="durasi" value="<?= $data['durasi'];?>"></strong></p>
                            <p>Calorie Burn : <strong><input type="text" name="caloriBurn" value="<?= $data['caloriBurn'];?>"></strong></p>
                            <p>Difficulty : <strong><select name="kesulitan" id="">
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediete">Intermediete</option>
                                <option value="Hard">Hard</option>
                            </select>
                            </strong></p>
                            <p>Equipment : <strong><input type="text" name="equipment" value="<?= $data['equipment'];?>"></strong></p>
                            <p>Trainning Type : <strong>Cardiovascular</strong></p>
                            <p>Link Youtube : <strong><input type="text" name="youtube" value="<?= $data['youtube'];?>"></strong></p>
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
                <p><textarea name="manfaat" id="manfaat" cols="80" rows="5"><?= $data['manfaat'];?></textarea></p>
            </div>
        </div>

        <div class="article-content">
            <h1 class="title">Cara Melakukan <?= $data['namaOlahraga']; ?> </h1>
            <hr class="line-article">
            <div class="text">
                <p><textarea name="cara" id="cara" cols="80" rows="5"><?=$data['cara'];?></textarea></p>
            </div>
        </div>
    </section>
    <div class="edit"> 
    <button class="admin-submit" type="submit" name="submit" onclick="confirm('Apakah anda yakin akan mengubah data ini?')">Save</button>
    </div>
    </form>


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
