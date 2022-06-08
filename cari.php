<?php
require "fungsi.php";

if(isset($_POST["cari"])){
    $cari = $_POST["cari"];
    $sql = "SELECT * FROM olahraga WHERE namaOlahraga LIKE '".$cari."';";
    $result = mysqli_query($konek, $sql);
}
else{
    echo "<script>alert('Pencarian Gagal'); location.href='home.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    while ($row = mysqli_fetch_assoc($result)){
        echo "Nama Olahraga".$row['namaOlahraga'];
    }
    ?>
</body>
</html>