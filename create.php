<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>DMC DOMPET DHUAFA</title>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="Asset/logo.png" width="350" height="60" alt="Logo DMC"></a>
    </nav>

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

<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data)    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $email=input($_POST["email"]);
        $no_handphone=input($_POST["no_handphone"]);
        $asal_instansi=input($_POST["asal_instansi"]);
        $alamat=input($_POST["alamat"]);

        //Query input menginput data kedalam tabel anggota
        $sql="insert into data_donatur (nama,email,no_handphone,asal_instansi,alamat) values
		('$nama','$email','$no_handphone','$asal_instansi','$alamat')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>

   <p><center><h1>DATA KEHADIRAN</h1></center></p>  

   <style>
    .form{
        width: 700px;
        height: 100px;
    } 
    </style>
    
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class=”container”>
        <style>
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

        
        <div class=”grid-cell-1″>
        <div class="form-group"> 
            <label>Nama :</label>
           <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
        </div>
        </div>

        <div class=”grid-cell-2″>
        <div class="form-group">
            <label>Email :</label>
            <input type="text" name="email" class="form-control" placeholder="Masukan email" required/>
        </div>
        </div>

        <div class=”grid-cell-3″>
       <div class="form-group">
            <label>No Handphone :</label>
            <input type="number" name="no_handphone" id="+62" class="form-control"  placeholder="812345xxxxx" required>
		</div>
        </div>

        <div class=”grid-cell-4″>
        <div class="form-group">
            <label>Asal Instansi :</label>
            <input type="text" name="asal_instansi" class="form-control" placeholder="Masukan Asal Instansi" required/>
        </div>
        </div>

        <div class=”grid-cell-5″>
        <div class="form-group">
            <label>Alamat :</label>
            <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alamat" required></textarea>
        </div>       
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>

    <footer style="text-align: center;">
        <p>.</p>
    </footer>
    
    <footer style="background-color: lightgrey; padding:1px 0">
        <p style="color: black; text-align: center">DMC DOMPET DHUAFA</p>
    </footer>

</body>
</html>