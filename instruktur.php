<?php
require 'fungsi.php';

$id = $_GET["id"];
$sql_q = "SELECT * FROM instruktor WHERE idInstruktor = '" . $id . "' ;";
$querry = mysqli_query($konek, $sql_q);
$data = mysqli_fetch_assoc($querry);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Olahraga</title>
    <link rel="stylesheet" href="style/edit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="asset/logo-blue.png" alt="logo"></a>
            <div class="nav-right">
                <h1>Informasi Instruktor</h1>
            </div>
        </nav>
    </section>
    

    <div class="title">
        <h1>Informasi Instruktor</h1>
        <hr>
    </div>


    <section class="tambah-container">

        <form action="tambah_instruktor.php" method="post">

            <div class="tambah-content">
                <p>Nama Instruktor: <?= $data['namaInstruktor'];?></p>
                
            </div>
            <br>
            <br>
            <div>
                <button type="submit" name="submit_edit" class="submit">edit Instruktor</button>
            </div>
        </form>
    </section>


    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>

</body>
</html>