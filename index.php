<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form DMC Dompet Dhuafa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
</head>
 
<body>

<!--- CSS --->
<style>
body{
    background-color:#ffffff;
    margin:0px;
    padding:0px;
}
 
ul{
    list-style:none;
}
 
a{
    text-decoration:none;
}
 
section{
    width:100%;
    height:95vh;
    position: relative;
}
 
nav{
    display: flex;
    justify-content: space-between;
    align-items:center;
    height:60px;
    background-color:#FFFFFF;
    box-shadow:2px 2px 12px rgba(0,0,0,0.2);
    padding:0px 5%;
     
}
nav ul{
    display: flex;
}
 
.text-container p:nth-child(1){
    font-family: calibri;
    font-weight: bold;
    color: #6d6d6d;
    font-size: 22px;
}
 
.text-container p:nth-child(2){
    font-family: calibri;
    font-weight: bold;
    letter-spacing: 2px;
    color: #1a1a1a;
    font-size: 60px;
}
 
.text-container p:nth-child(3){
    font-family: myriad pro regular;
    color: #403e3e;
    font-size: 30px;
    line-height: 30px;
}
 
.text-container p:nth-child(4){
    font-family: calibri;
    color: #403e3e;
    font-size: 17px;
    margin-top: 10px;
    line-height: 30px;
}
 
.text-container{
    position: absolute;
    left: 13%;
    top: 42%;
    transform: translate(-13%, -42%);
}
 
.text-container button{
    width: 130px;
    height: 42px;
    border-radius: 10px;
    font-family: calibri;
    font-weight: bold;
    font-size: 14px;
    outline: none;
    margin: 0px 10px;
}
 
.down-cv{
    background-color: #0b0b0b;
    color: #ffffff;
    border: none;
}
 
.model{
    height: 560px;
    position: absolute;
    bottom: 60px;
    left: 80%;
    transform: translateX(-70%);
}
 
footer p{
    font-family: calibri;
}
 
footer p:nth-child(1){
    font-size: 30px;
    font-weight:bold;
    color:#FFFFFF;
    line-height:10px;
}
 
footer p:nth-child(2){
    font-size: 16px;
    color:#7e7d7d;
    width:600px;
    text-align: center;
}
 
footer{
    height:300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    background-color: #191919;
}
 
.social-icons a{
    width:40px;
    height:40px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color:#e6e3e3;
    margin:20px 10px;
    border-radius:50%;
}
 
.social-icons{
    display: flex;
     
}
.copyright{
    color:#565555;
    font-size: 15px;
    position: absolute;
    left:50%;
    bottom:10px;
    transform: translateX(-50%);
}

.logo{
    font-family:RoadTest;
    color:#000000;
    font-size: 30px;
    font-weight: bold;
}
 
body{
    background-color:#ffffff;
    margin:0px;
    padding:0px;
}
    </style>

    <section>
        <!--- navigation --->
        <nav>
            <!--- logo --->
            <img class="logo" src="Asset/logo1.png" width="300" height="55">
            DMC DOMPET DHUAFA
        </nav>
 
        <!--- text --->
        <div class="text-container">
            <p>Hello, Kawan Baik DMC DD</p>
            <p>FORM KEHADIRAN</p>
            <p>Yuk, isi dlu sebelum melakukan kegiatan
            <br>of course writing.</p>
            <a href="create.php" class="btn btn-dark" role="button">Masuk</a>
        </div>
        <!-- model -->
        <img alt="model" class="model" src="Asset/dd.jpeg" padd>
    </section>
 
 
    <!-- footer -->
    <footer>
        <p>Ada yang dapat kami bantu?</p>
             
        <!--social-->
        <div class="social-icons">
            <a href="https://www.dmcdompetdhuafa.org"><i class="fab fa-website-f"></i></a>
            <a href="https://wa.me/628116116916"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/dmcdompetdhuafa/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.tiktok.com/@dmcdompetdhuafa"><i class="fab fa-tiktok"></i></a>
            <a href="https://x.com/DMCDompetDhuafa"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/@dmcdompetdhuafaorg"><i class="fab fa-youtube"></i></a>
        </div>
         
        <!--copyright-->
        <p class="copyright">Copyright by DMC Dompet Dhuafa</p>
    </footer>
 
</body>
 
</html>