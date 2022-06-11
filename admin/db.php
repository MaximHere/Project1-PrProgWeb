<?php
require '../fungsi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(execute_querry("DELETE FROM olahraga WHERE idOlahraga =".$id.";")){
        echo "<script>alert('Data Berhasil dihapus')</script>";
        }else{
            echo "<script>alert('Data gagal dihapus')</script>";
        }
    }
if(isset($_GET['inst'])){
    $id = $_GET['inst'];
    if(execute_querry("DELETE FROM instruktor WHERE idInstruktor =".$id.";")){
        echo "<script>alert('Data Berhasil dihapus')</script>";
        }else{
            echo "<script>alert('Data gagal dihapus')</script>";
        }
    }
    


// Select Data
$sql = "SELECT * FROM olahraga;";
$result = execute_querry($sql);

$sqlinst = "SELECT * FROM instruktor;";
$hasil = execute_querry($sqlinst);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/db.css">
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
            <div class="nav-right">
                <!-- <form action="home.php" method="post">
                    <div class="user-btn">
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo "<button class='login-btn' name='logout'>Logout</button>";
                        } else {
                            echo "<button class='login-btn' name='login'>Login</button>";
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo "";
                        } else {
                            echo "<button class='sign-btn' name='signup'>Sign Up</button>";
                        }
                        ?>
                    </div>
                </form> -->
            </div>
        </nav>
        <div class="nav-links">
            <ul>
                <li><a href="../home.php" class="link">HOME</a></li>
                <li><a href="create_detail.php" class="link">TAMBAH OLAHRAGA</a></li>
                <li><a href="tambah_instruktor.php" class="link">TAMBAH INSTRUKTOR</a></li>
            </ul>
        </div>
        <br>

    </section>

    <div class="title">
        <h1>Database Olahraga</h1>
        <hr>
    </div>

    <section class="tabel-olahraga">
        <table class="container">
            <thead class="table-header">
                <td>#</td>
                <td>Nama Olahraga</td>
                <td>Nama Instruktur</td>
                <td>Kesulitan</td>
                <td>Foto Olahraga</td>
                <td>Actions</td>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tbody class='table-row'>";
                echo "<td>".$row['idOlahraga']."</td>";
                echo "<td>".$row['namaOlahraga']."</td>";
                echo "<td>coba</td>";
                // echo "<td>".$row['instruktor']."</td>";
                echo "<td>".$row['kesulitan']."</td>";
                echo "<td><img src='".$row['gambar']."' alt=''></td>";
                echo "<td><button class='act-btn' onclick='edit_olahraga(".$row['idOlahraga'].");'>Edit</button>";
                echo " || ";
                echo "<button onclick='delete_olahraga(".$row['idOlahraga'].");'>Delete</button></td>";
            }
            ?>
            <tbody class="table-row">
                <td><button onclick='edit();'>Edit</button></td>
                <td>coba</td>
                <td>coba</td>
                <td>coba</td>
                <td class="action-btn">
                        <!-- see detail -->
                        <!-- edit -->
                        <!-- delete -->
                </td>
            </tbody>
            
        </table>

    </section>

    <br>
    <br>
    <br>

    <div class="title">
        <h1>Database Olahraga</h1>
        <hr>
    </div>

    <section class="tabel-olahraga">
        <table class="container">
            <thead class="table-header">
                <td>#</td>
                <td>Nama Instruktur</td>
                <td>Actions</td>
            </thead>
            <?php
            while ($baris = mysqli_fetch_assoc($hasil)){
                echo "<tbody class='table-row'>";
                echo "<td>".$baris['idInstruktor']."</td>";
                echo "<td>".$baris['namaInstruktor']."</td>";
                echo "<td><button onclick='edit_instruktor(".$baris['idInstruktor'].");'>Edit</button>";
                echo " || ";
                echo "<button onclick='delete_instruktor(".$baris['idInstruktor'].");'>Delete</button></td>";
            }
            ?>
        
            
        </table>

    </section>

    <section class="footer">
        <h5>Copyright &copy; Fandy Abet Maxim</h5>
    </section>
</body>
<script>
    function edit_olahraga(id){
        location.href="edit_detail.php?id="+id;
    }

    function delete_olahraga(id){
        location.href="db.php?id="+id;
    }

    function edit_instruktor(id){
        location.href="edit_instruktor.php?id="+id;
    }
    function delete_instruktor(id){
        location.href="db.php?inst="+id;
    }
</script>
</html>