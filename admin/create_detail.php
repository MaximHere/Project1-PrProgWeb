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

	$sql = "UPDATE olahraga SET namaOlahraga='".$namaOlahraga."', instruktor='".$instruktor."', durasi='".$durasi."', caloriBurn='".$caloriBurn."', kesulitan='".$kesulitan."', equipment='".$equipment."'
	, youtube='".$youtube."', embedYoutube='".$embedYoutube."', definisi='".$definisi."', manfaat='".$manfaat."', cara='".$cara."' WHERE idOlahraga= '".$id."' ";

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
            <div class="topBar-right">
                <input class="search-box" type="text" placeholder="Search Here">
                <button class="SearchButton">Search</button>
            </div>
        </div>
    </header>

    <main>
        <form action="edit_detail.php" method="post">
        <input type="hidden" name="idOlahraga" value="<?= $id;?>">
        <table class="video-details">
            
            <tr>
            
                <th class="video">
                <label for="namaOlahraga">Nama Olahraga</label>
                <input type="text" name="namaOlahraga" id="namaOlahraga" value="" onkeyup="update_field()"><br>
                    Embeded link: <input type="text" name="embedYoutube" value="">
                    <!-- <iframe width="1024" height="576" src="<?= $data['embedYoutube'] ;?>"
                        title="YouTube video player" frameborder="0" allowfullscreen></iframe> -->
                </th>
                <th class="details">
                    <h2>Workout Details</h2>
                    <br>
                    <div class="detail-list">
                        <p>Instructor : <input type="text" name="instruktor" value=""></p>
                        <p>Duration : <input type="text" name="durasi" value=""></p>
                        <p>Calorie Burn : <input type="text" name="caloriBurn" value=""></p>
                        <p>Difficulty : 
                            <select name="kesulitan" id="">
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediete">Intermediete</option>
                                <option value="Hard">Hard</option>
                            </select>
                            </p>
                        <p>Equipment : <input type="text" name="equipment" value=""></p>
                        <p>Trainning Type : <strong>Cardiovascular</strong></p>
                        <p>Link Youtube : <input type="text" name="youtube" value=""></p>
                    </div>
                </th>
            </tr>
        </table>
        <div class="artikel">
            <div class="Desc">
                <h2 class="Title">Apa itu Olahraga <span class="namaOlahraga"></span> ?</h2>
                <br>
                <p class="text">
                    <textarea name="definisi" id="definisi" cols="110" rows="5"></textarea>
                </p>
            </div>
            <div class="Desc">
                <h2 class="Title">Manfaat dari Olahraga <span class="namaOlahraga"></span></h2>
                <br>
                <p class="text">
                <textarea name="manfaat" id="manfaat" cols="110" rows="5"></textarea>
                </p>
            </div>

            <div class="Desc">
                <h2 class="Title"> Cara Melakukan <span class="namaOlahraga"></span> dengan Benar</h2>
                <br>
                <div class="text">
                    <p><textarea name="cara" id="cara" cols="110" rows="5"></textarea></p>
                    <br>
                </div>
            </div>
        </div>
        <button type="submit" name="submit_edit" class="submit">Create</button>
        </form>

        
    </main>

    <section class="col-komentar">
        <!-- <h3>Comment</h3>
        <form action="/form/submit" method="POST">
            <textarea class="comment" placeholder="Type your comment here."></textarea>
            <br>
            <button class="submit">Send</button>
          </form> -->
    </section>

    <footer>
        <p class="CR">Copyright &copy; Fandy Abet Maxim</p>
    </footer>

</body>
<script>
    update_field();
    function update_field(){
        var namaOlahraga = document.getElementById("namaOlahraga");
        var fieldJudul = document.getElementsByClassName("namaOlahraga");
        for (let i = 0; i < fieldJudul.length; i++) {
            fieldJudul[i].innerHTML = namaOlahraga.value;
            
        }
        // fieldJudul.innerHTML = namaOlahraga.value;
    }
</script>
</html>