<?php

$VeritabaniHostAdresi = "localhost";
$VeritabaniKullaniciAdi = "root";
$VeritabaniKullaniciSifresi = "9900";
$VeritabaniAdi = "btkdersleri";

$VeritabaniBağlantisi = mysqli_connect($VeritabaniHostAdresi, $VeritabaniKullaniciAdi, $VeritabaniKullaniciSifresi, $VeritabaniAdi );
mysqli_set_charset($VeritabaniBağlantisi,"utf8");

echo"<pre>";
print_r($VeritabaniBağlantisi);
echo"<pre>";

mysqli_close($VeritabaniBağlantisi);



//
$VeritabaniBağlantisiBir = new mysqli("localhost","root", "9900","btkdersleri");
$VeritabaniBağlantisiBir->set_charset("utf8");
if($VeritabaniBağlantisiBir->connect_errno){
    echo "1. Veritabanı bağlantısı sağlanamadı. <br>";
    echo"Hata : " . $VeritabaniBağlantisiBir->connect_errno . " <br>";
}else{
    echo "1. Veritabanı bağlantısı kuruldu.  <br>";
}

$VeritabaniBağlantisiİki = new mysqli("localhost","root", "9900","btkdersleri");
$VeritabaniBağlantisiİki->set_charset("utf8");
if($VeritabaniBağlantisiİki->connect_errno){
    echo "2. Veritabanı bağlantısı sağlanamadı. <br>";
    echo"Hata : " . $VeritabaniBağlantisiİki->connect_errno . " <br>";
}else{
    echo "2. Veritabanı bağlantısı kuruldu.  <br>";
}

$VeritabaniBağlantisiBir->close();
$VeritabaniBağlantisiİki->close();



//yeni veritabanı ekleme
$VeritabaniBağlantisi =  mysqli_connect("localhost","root", "9900","btkdersleri");
mysqli_set_charset($VeritabaniBağlantisi,"utf8");

if(mysqli_connect_errno()){
    echo "Veritabanı bağlantı hatası. <br>";
    echo"Hata mesajı : " . mysqli_connect_errno() . " <br>";
}else{
    echo "Veritabanı bağlantısı kuruldu.  <br>";
}

$Sorgu = mysqli_query($VeritabaniBağlantisi, "CREATE DATABASE dersler CHARACTER SET utf8 COLLATE utf8mb3_general_ci");
    if($Sorgu){
        echo "Veritabanı oluşturuldu";
    }else{
        echo "Sorgu hatası";
    }
mysqli_close($VeritabaniBağlantisi);



//yeni tablo ekleme
$VeritabaniBağlantisi =  mysqli_connect("localhost","root", "9900","btkdersleri");
mysqli_set_charset($VeritabaniBağlantisi,"utf8");

if(mysqli_connect_errno()){
    echo "Veritabanı bağlantı hatası. <br>";
    echo "Hata mesajı : " . mysqli_connect_errno() . " <br>";
}else{
    echo "Veritabanı bağlantısı kuruldu.  <br>";
}

$Sorgu = mysqli_query($VeritabaniBağlantisi, "CREATE TABLE deneme (
    id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Adi varchar(100) CHARACTER SET utf8 COLLATE utf8mb3_general_ci NOT NULL,
    Soyadi varchar(100) CHARACTER SET utf8 COLLATE utf8mb3_general_ci NOT NULL,
    EmailAdresi varchar(255) CHARACTER SET utf8 COLLATE utf8mb3_general_ci NOT NULL UNIQUE,
    Durumu tinyint(1) UNSIGNED NOT NULL,
    KayitTarihi timestamp NOT NULL DEFAULT current_timestamp,
    YoneticiciAciklamasi text CHARACTER SET utf8 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8mb3_general_ci");

if($Sorgu){
    echo "Tablo oluşturuldu";
}else{
    echo "Sorgu hatası";
}
mysqli_close($VeritabaniBağlantisi);



//PDO
$VeritabaniHostAdresi = "localhost";
$VeritabaniKullaniciAdi = "root";
$VeritabaniKullaniciSifresi = "9900";
$VeritabaniAdi = "btkdersleri";

$VeritabaniBağlantisi = new PDO("mysql:host=$VeritabaniHostAdresi;dbname=$VeritabaniAdi;charset=utf8,$VeritabaniKullaniciAdi, $VeritabaniKullaniciSifresi");
echo"<pre>";
print_r($VeritabaniBağlantisi);
echo"<pre>";

$VeritabaniBağlantisi = null;



//
$VeritabaniBağlantisi = new PDO("mysql:host=localhost;dbname=btkdersleri;charset=utf8,root, 9900");
echo"<pre>";
print_r($VeritabaniBağlantisi);
echo"<pre>";

$VeritabaniBağlantisi = null;
?>
