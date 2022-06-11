<?php
session_start();
$konek = mysqli_connect("localhost", "root", "", "fullsehat") or die("Koneksi Mubal");

function execute_querry($sql){
    global $konek;
    return mysqli_query($konek, $sql);
}

?>
