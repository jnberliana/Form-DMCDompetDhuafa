<!DOCTYPE html>
<html>
<head>
    
    <title>Form Data Donatur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="Asset/logo.png" width="350" height="60" alt="Logo DMC"></a>
    </nav>

<div class="container">
    <style>
    *{
    margin: 0;
    padding: 0;
    font-size: large;
    font-family: 'Helvetica';
    font-weight: bold;
}

body {
    min-height: 100vh;
    background-image: url(Asset/gedung1.JPG);
    background-size: cover;
    background-color: rgba(0 , 0, 0, 0.5);
}
</style>

    <?php

    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_data_donatur
    if (isset($_GET['id_data_donatur'])) {
        $id_data_donatur=input($_GET["id_data_donatur"]);

        $sql = "select * from data_donatur where id_data_donatur=$id_data_donatur";
        $hasil = mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_data_donatur=htmlspecialchars($_POST["id_data_donatur"]);
        $nama=input($_POST["nama"]);
        $email=input($_POST["email"]);
        $no_handphone=input($_POST["no_handphone"]);
        $asal_instansi=input($_POST["asal_instansi"]);
        $alamat=input($_POST["alamat"]);

        //Query update data pada tabel anggota
        $sql="update data_donatur set
			nama='$nama',
			email='$email',
			no_handphone='$no_handphone',
			asal_instansi='$asal_instansi',
			alamat='$alamat'";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:table.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }
    }

    ?>
    <p><center><h2>Update Data</h2></center></p>
         <style>

            .form{
                width: 700px;
                height: 100px;
            } 
            .container{
                display: grid;
                grid-template-columns:50%;
                grid-gap: 20px;
                color: #fff;
            }  
            .grid-cell-1 {
                background-color: purple;
                padding: 25px;
                border-radius: 6px;
            }
        </style>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />

        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" placeholder="abcde@gmail.com" required/>
        </div>
        <div class="form-group">
            <label for="phone">No Handphone :</label>
            <input type="number" name="no_handphone" id="+62" class="form-control"  placeholder="812345xxxxx" required>
        </div>
        <div class="form-group">
            <label>Asal Instansi :</label>
            <input type="text" name="asal_instansi" class="form-control" placeholder="Masukan Asal Instansi" required/>
        </div>
        <div class="form-group">
            <label>Alamat :</label>
            <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" required></textarea>
        </div>

        <input type="hidden" name="id_data_donatur" value="<?php echo $data['id_data_donatur']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <footer style="text-align: center;">
        <p>.</p>
    </footer>
    
    <footer style="background-color: lightgrey; padding:1px 0">
        <p style="color: black; text-align: center">DMC DOMPET DHUAFA</p>
    </footer>


</body>
</html>