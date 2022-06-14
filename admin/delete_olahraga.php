<?php
require '../fungsi.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql_q = "SELECT * FROM olahraga NATURAL JOIN instruktor WHERE idOlahraga = '".$id."' ;";
    $querry=mysqli_query($konek,$sql_q);
    $data=mysqli_fetch_assoc($querry);

    $targetFolder = "asset/foto_/";

    $regex = "/([(A-za-z)+0-9]*\s*)+\.[a-z]+/";
    $fileLama = array();
    preg_match($regex, $data['gambar'], $fileLama);

    if(execute_querry("DELETE FROM olahraga WHERE idOlahraga =".$id.";")){
        unlink("../".$targetFolder.$fileLama[0]);
        echo "<script>alert('Data Berhasil dihapus')</script>";
        header("Location: ../index.php");
        }
        else{
            echo "<script>alert('Data gagal dihapus')</script>";
        }
    }
?>