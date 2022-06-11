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
        $targetFolder = "pic/foto/";

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
    header("Location: detail_page.php?id=".$id);
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
    <title>EDIT OLAHRAGA</title>
    <link rel="stylesheet" href="../style/edit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <section class="header">
        <nav>
            <a href="../home.php"><img src="../asset/logo-blue.png" alt="logo"></a>
            <div class="nav-right">
                <h1>Edit Olahraga</h1>
            </div>
        </nav>
    </section>

    <div class="title">
        <h1>Edit Olahraga</h1>
        <hr>
    </div>
    

    <section class="tambah-container">
        <form action="edit_detail.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idOlahraga" value="<?= $id; ?>">


            <div class="tambah-content">
                <label>Nama Olahraga</label>
                <input type="text" name="namaOlahraga" id="namaOlahraga" value="<?= $data['namaOlahraga']; ?>" onkeyup="update_field()" required>
            </div>

            <div class="tambah-content">
                <label>Gambar</label>
                <input class="form-control" type="file" id="fileGambar" name="fileGambar">
            </div>

            <div class="tambah-content">
                <label>Deskripsi</label>
                <textarea name="definisi" id="definisi"><?= $data['definisi']; ?></textarea>
            </div>

            <div class="tambah-content">
                <label>Embeded link video</label>
                <input type="text" name="embedYoutube" value="<?= $data['embedYoutube']; ?>">
            </div>
            <br>


            <h1>Detail Olahraga</h1>
            <hr class="hr-detail">
            <br>

            <div class="tambah-content">
                <label>Instruktur</label>
                <div class="custom-select">
                    <select name="kesulitan" id="">
                        <option value="Mbak Ayu">Mbak Ayu</option>
                        <option value="Mbak Sri">Mbak Sri</option>
                        <option value="Mbak Siti">Mbak Siti</option>
                    </select>
                </div>

            </div>

            <div class="tambah-content">
                <label>Durasi</label>
                <input type="text" name="durasi" value="<?= $data['durasi']; ?>">
            </div>

            <div class="tambah-content">
                <label>Kalori</label>
                <input type="text" name="caloriBurn" value="<?= $data['caloriBurn']; ?>">
            </div>

            <div class="tambah-content">
                <label>Tingkat Kesulitan</label>
                <div class="custom-select">
                    <select name="kesulitan" id="">
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediete">Intermediete</option>
                        <option value="Hard">Hard</option>
                    </select>
                </div>
            </div>

            <div class="tambah-content">
                <label>Equipment</label>
                <input type="text" name="equipment" value="<?= $data['equipment']; ?>">
            </div>

            <div class="tambah-content">
                <label>Link Video</label>
                <input type="text" name="youtube" value="<?= $data['youtube']; ?>">
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
                    <textarea name="manfaat" id="manfaat" cols="110" rows="5"><?= $data['manfaat']; ?></textarea>
                    </p>
                </div>
            </div>

            <div class="tambah-content">
                <label>Cara melakukan</label>
                <br>
                <div class="text">
                    <p><textarea name="cara" id="cara" cols="110" rows="5"><?= $data['cara']; ?></textarea></p>
                    <br>
                </div>
            </div>

            <div>
                <button type="submit" name="submit_edit" class="submit">Update</button>
            </div>
        </form>
    </section>


    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>

</body>
<script>
    update_field();

    function update_field() {
        var namaOlahraga = document.getElementById("namaOlahraga");
        var fieldJudul = document.getElementsByClassName("namaOlahraga");
        for (let i = 0; i < fieldJudul.length; i++) {
            fieldJudul[i].innerHTML = namaOlahraga.value;

        }
        // fieldJudul.innerHTML = namaOlahraga.value;
    }
</script>

</html>