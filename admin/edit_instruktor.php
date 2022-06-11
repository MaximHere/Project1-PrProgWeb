<?php
require '../fungsi.php';

if($_GET){
	$id = $_GET["id"];
	$sql_q = "SELECT * FROM instruktor WHERE idInstruktor = '".$id."' ;";
    $querry=execute_querry($sql_q);
    $data=mysqli_fetch_assoc($querry);
}
else if ($_POST) {
    $id = $_POST["idInstruktor"];
    $namaInstruktor = $_POST["namaInstruktor"];
    
    $sql = "UPDATE instruktor SET namaInstruktor='".$namaInstruktor."' WHERE idInstruktor= '".$id."' ";

    if (execute_querry($sql)) {
        echo "<script>alert('Berhasil menambah data')</script>";
    } else {
        echo "<script>alert('Gagal menambah data')</script>";
    }
    header("Location: db.php");
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <section class="header">
        <nav>
            <a href="../home.php"><img src="../asset/logo-blue.png" alt="logo"></a>
            <div class="nav-right">
                <h1>Tambah Instruktor</h1>
            </div>
        </nav>
    </section>
    

    <div class="title">
        <h1>Tambah Instruktor</h1>
        <hr>
    </div>


    <section class="tambah-container">

        <form action="edit_instruktor.php" method="post">
            <input type="hidden" name="idInstruktor" value="<?= $id; ?>">
            <div class="tambah-content">
                <label>Nama Instruktor</label>
                <input type="text" name="namaInstruktor" value="<?=$data['namaInstruktor'] ;?>" required>
            </div>

            <div>
                <button type="submit" name="submit_edit" class="submit" >Edit Instruktor</button>
            </div>
        </form>
    </section>


    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>

</body>
<script>
    
</script>

</html>