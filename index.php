<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>FORM DMC DOMPET DHUAFA</title>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="Asset/logo.png" width="350" height="60" alt="Logo DMC"></a>
    </nav>

<div class="container">
    <br>
    <h4><center>DAFTAR DATA DONATUR DMC DOMPET DHUAFA</center></h4>
<?php

    include "koneksi.php";

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['id_data_donatur'])) {
        $id_data_donatur=htmlspecialchars($_GET["id_data_donatur"]);

        $sql="delete from data_donatur where id_data_donatur='$id_data_donatur' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>


     <tr class="table-danger">
            <br>
        <thead>
        <tr>
       <table class="my-3 table table-bordered">
            <tr class="table-primary">     
            <th>No</th>      
            <th>Nama</th>
            <th>Email</th>
            <th>No Handphone</th>
            <th>Asal Instansi</th>
            <th>Alamat</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>

        <?php
        include "koneksi.php";
        $sql="select * from data_donatur order by id_data_donatur desc";

        $hasil= mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data["Nama"]; ?></td>
                <td><?php echo $data["Email"];   ?></td>
                <td><?php echo $data["No_Handphone"];   ?></td>
                <td><?php echo $data["Asal_Instansi"];   ?></td>
                <td><?php echo $data["Alamat"];   ?></td>
                <td>
                    <a href="update.php?id_data_donatur=<?php echo htmlspecialchars($data['id_data_donatur']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_data_donatur=<?php echo $data['id_data_donatur']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
</div>

</body>
</html>
