<?php
require '../fungsi.php';

if(!isset($_SESSION['username'])){
    header("Location: ../index.php");
}

if ($_POST) {
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

    $isValid = true;
    $targetFolder = "asset/foto_/";

    if($_FILES['fileGambar']['type'] == "image/png"){
        $ext = ".png";
    }
    else if($_FILES['fileGambar']['type'] == "image/jpeg"){
        $ext = ".jpeg";
    }
    else{
        $isValid = false;
    }

    

    var_dump($_FILES);

    if ($isValid){
        $path = $targetFolder.$namaOlahraga.$ext;
        var_dump($path);
        if(move_uploaded_file($_FILES['fileGambar']['tmp_name'], "../".$path)){
            $sql = "INSERT INTO olahraga VALUES ('', '" . $namaOlahraga . "', '".$instruktor."', '" . $durasi . "', '" . $caloriBurn . "', '" . $kesulitan . "', '" . $equipment . "', '" . $youtube . "', '" . $embedYoutube . "', '" . $definisi . "', '" . $manfaat . "', '" . $cara . "', '" . $path . "'); ";
            
            
            $sql2 = "INSERT INTO olahraga (`namaOlahraga`, `idInstruktor`, `durasi`, `caloriBurn`, `kesulitan`, `equipment`, `youtube`, `embedYoutube`, `definisi`, `manfaat`, `cara`, `gambar`) VALUES ('" . $namaOlahraga . "', '".$instruktor."', '" . $durasi . "', '" . $caloriBurn . "', '" . $kesulitan . "', '" . $equipment . "', '" . $youtube . "', '" . $embedYoutube . "', '" . $definisi . "', '" . $manfaat . "', '" . $cara . "', '" . $path . "'); ";

            if(execute_querry($sql2)){
                header("Location: db.php");
            }
            else{
                echo "<script>alert('Data gagal ditambah!')</script>";
            }
        }
    }
    else{
        echo "<script>alert('Data gagal ditambah!, File tidak Valid!')</script>";
    }

    // if (mysqli_query($konek, $sql)) {
    //     echo "<script>alert('Berhasil mengubah data')</script>";
    // } else {
    //     echo "<script>alert('Gagal mengubah data')</script>";
    // }

    // $sql_q = "SELECT * FROM olahraga WHERE idOlahraga = ".$id."' ;";
    // $querry=mysqli_query($konek,$sql_q);
    // $data=mysqli_fetch_assoc($querry);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Olahraga</title>
    <link rel="stylesheet" href="../style/edit.css">
    <link rel="icon" href="../asset/minilogo-blue.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <section class="header">
        <nav>
            <a href="../index.php"><img src="../asset/logo-blue.png" alt="logo"></a>
            <div class="nav-right">
                <h1>Tambah Olahraga</h1>
            </div>
        </nav>
    </section>
    

    <div class="title">
        <h1>Tambah Olahraga</h1>
        <hr>
    </div>


    <section class="tambah-container">

        <form action="create_detail.php" method="post" enctype="multipart/form-data">
 


            <div class="tambah-content">
                <label>Nama Olahraga</label>
                <input type="text" name="namaOlahraga" required>
            </div>

            <div class="tambah-content">
                <label>Gambar</label>
                <input type="file" name="fileGambar" id="fileGambar">
            </div>

            <div class="tambah-content">
                <label>Deskripsi</label>
                <input type="text" name="definisi" required>
            </div>

            <div class="tambah-content">
                <label>Embeded link video</label>
                <input type="text" name="embedYoutube" required>
            </div>
            <br>


            <h1>Detail Olahraga</h1>
            <hr class="hr-detail">
            <br>

            <div class="tambah-content">
                <label>Instruktur</label>
                <div class="custom-select">
                    <select name="instruktor" id="instruktor">
                        <option value="">Pilih Instruktor</option>
                        <?php
                        $data = execute_querry("SELECT * FROM instruktor");
                        while ($row = mysqli_fetch_assoc($data)){
                            echo "<option value='".$row['idInstruktor']."'>".$row['namaInstruktor']."</option>";
                        }
                        ?>
                    </select>
                </div>

            </div>

            <div class="tambah-content">
                <label>Durasi</label>
                <input type="text" name="durasi" required>
            </div>

            <div class="tambah-content">
                <label>Kalori</label>
                <input type="text" name="caloriBurn" required>
            </div>

            <div class="tambah-content">
                <label>Tingkat Kesulitan</label>
                <div class="custom-select">
                    <select name="kesulitan" id="kesulitan">
                        <option value="">Pilih Kesulitan</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediete">Intermediete</option>
                        <option value="Hard">Hard</option>
                    </select>
                </div>
            </div>

            <div class="tambah-content">
                <label>Equipment</label>
                <input type="text" name="equipment" required>
            </div>

            <div class="tambah-content">
                <label>Link Video</label>
                <input type="text" name="youtube" required>
            </div>

            <br>
            <h1>Artikel</h1>
            <hr class="hr-artikel">
            <br>

            <div class="tambah-content">
                <label>Manfaat</label>
                <br>
                <div class="text">
                    <p class="text">
                        <textarea name="manfaat" id="manfaat" cols="110" rows="5" required></textarea>
                    </p>
                </div>
            </div>

            <div class="tambah-content">
                <label>Cara melakukan</label>
                <br>
                <div class="text">
                    <p><textarea name="cara" id="cara" cols="100%" rows="5" required></textarea></p>
                    <br>
                </div>
            </div>

            <div>
                <button type="submit" name="submit_edit" class="submit" onclick="checkValid();">Tambah Olahraga</button>
            </div>
        </form>
    </section>


    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>

</body>
<script src="crud.js"></script>

</html>