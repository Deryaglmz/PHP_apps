<?php

//defined
$Knontrol = defined("ISIM");
if($Knontrol==true){
    echo"ISIM adında sabit bulunmakta";
}else{
    echo "ISIM adında herhenagi bir sabit bulunmamakta" . "<br>";
}


//isset
$Isim = "Volkan Alakent";
$Knontrol = isset($Isim);
if($Knontrol==true){
    echo"ISIM adında sabit bulunmakta";
}else{
    echo "ISIM adında herhenagi bir sabit bulunmamakta";
}


//empty
$Knontrol = empty($Isim);
if($Knontrol==true){
    echo"ISIM adında değişken bulunmamakta". "<br>";
}else{
    echo "ISIM adında değişken bulunmakta" . "<br>";
}


//FILTER_VALIDATE_INT
$Deger = "BTK dersleri";
if(filter_var($Deger, FILTER_VALIDATE_INT)){
    echo"Sınanan içerik integer veri türündedir". "<br>";
}else{
    echo "Sınanan içerik integer veri türünde değildir" . "<br>";
}


//FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED
$Deger = "https://www.btkakademi.gov.tr/ekran-kartlari/asus";
if(filter_var($Deger, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
    echo"Sınanan içerik URL adresidir". "<br>";
}else{
    echo "Sınanan içerik URL adresi değildir" . "<br>";
}


//is_string
$Deger = "BTK dersleri";
if(is_string($Deger)){
    echo"Sınanan içerik string veri türündedir". "<br>";
}else{
    echo "Sınanan içerik string veri türünde değildir" . "<br>";
}


//is_float
$Deger = 4.7;
if(is_float($Deger)){
    echo"Sınanan içerik float veri türündedir". "<br>";
}else{
    echo "Sınanan içerik float veri türünde değildir" . "<br>";
}


//function_exists
function Deneme(){
}
if(function_exists("Deneme")){
    echo "Deneme adında fonksiyon bulunmakta". "<br>";
}else{
    echo "Deneme adında fonksiyon bulunmamakta" . "<br>";
}


//file_exists
$Dosya = "C:/xampp/htdocs/PHP/42-app.php";
echo file_exists($Dosya);


//is_dir
$Dosya = "42-app.php";
if(is_dir($Dosya)) {
    echo "Belirtilen dosya bulundu" . "<br>";
}else {
    echo "Belirtilen dosya bulunamıyor" . "<br>";
}


//is_executable
$Dosya = "42-app.php";
if(is_executable($Dosya)) {
    echo "Belirtilen dosya çalıştırılabilir bir dosya" . "<br>";
}else {
    echo "Belirtilen dosya çalıştırılamaz bir dosya" . "<br>";
}



//extension_loaded
$EklentiAdi = "gd";
if(extension_loaded($EklentiAdi)) {
    echo "Kontrol edilen <b> " . $EklentiAdi. "ekelentisi sisteme yüklü" ."<br>";
}else {
    echo "Kontrol edilen <b> " . $EklentiAdi. "ekelentisi sisteme yüklü değil" ."<br>";
}
?>