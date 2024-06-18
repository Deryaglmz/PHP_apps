<?php

//scandir
$Dizin = "./";
$Listele = scandir($Dizin, 1);
echo "<pre>";
print_r($Listele);
echo "<pre>";


//glob
$Dizin = "*";
$Listele = glob($Dizin);
echo "<pre>";
print_r($Listele);
echo "<pre>";

//glob
$Dizin = "/*";
$Listele = glob($Dizin);
echo "<pre>";
print_r($Listele);
echo "<pre>";

//GLOB_MARK
$Dizin = "*";
$Listele = glob($Dizin, GLOB_MARK);
echo "<pre>";
print_r($Listele);
echo "<pre>";

//GLOB_BRACE
$Dizin = "D*.rar";
$Listele = glob($Dizin, GLOB_BRACE);
echo "<pre>";
print_r($Listele);
echo "<pre>";


//getcwd
$Dizin = getcwd();
echo "Geçerli dizin : " . $Dizin ."<br>";


//chdir
$Dizin = getcwd();
echo "Geçerli dizin : " . $Dizin ."<br>";
$YeniDizin = "Resimler/";
chdir($YeniDizin);
$Suankidizin = getcwd();
echo "Geçerli dizin : " . $Suankidizin ."<br>";


//opendir, readdir, closedir
$Dizin = "./";
$DizinAc = opendir($Dizin);
while (($Oku = readdir($DizinAc)) != false ){
    echo $Oku ."<br>";
}
closedir($DizinAc);


//fopen, fclose
$Dosya = "php.txt";
$DosyayıAc = fopen($Dosya,"r");
if($DosyayıAc){
    echo $Dosya . "Dosya açıldı";
}else{
    echo $Dosya . "Dosya açma işleminde hata oluştu";
}
fclose($DosyayıAc);


//fgets
$Dosya = "php.txt";
$DosyaAc = fopen($Dosya,"r");
$Oku = fgets($DosyaAc);
echo $Oku ."<br>";


//fread
$Dosya = "php.txt";
$DosyaAc = fopen($Dosya,"r");
$Oku = fread($DosyaAc, 5);
echo $Oku ."<br>";


//ftell
$Dosya = "php.txt";
$DosyaAc = fopen($Dosya,"r");
$Konum = ftell($DosyaAc);
echo $Konum ."<br>";


//file
$Icerik = "php.txt";
$IcerikOku = file($Icerik);
echo "<pre>";
print_r($IcerikOku);
echo "<pre>";


//readfile
$Icerik = "php.txt";
$IcerikOku = readfile($Icerik);
echo "<pre>";
print_r($IcerikOku);
echo "<pre>";


//fwrite
$Icerik = "BTK dersleri";
$Dosya =  "php.txt";
$DosyaAc = fopen($Dosya,"w");
fwrite($DosyaAc, $Icerik);
fclose($DosyaAc);


//fputs
$Icerik = "BTK dersleri";
$Dosya =  "php.txt";
$DosyaAc = fopen($Dosya,"w");
fputs($DosyaAc, $Icerik);
fclose($DosyaAc);


//ftruncate
$Dosya =  "php.txt";
$DosyaAc = fopen($Dosya,"a");
ftruncate($DosyaAc, 6);
fclose($DosyaAc);


//file_get_contents
$Dosya =  "https://www.hepsiburada.com/";
$Oku = file_get_contents($Dosya);
echo $Oku;


//file_put_contents
$Icerik =  "BTK videoları";
$Dosya = "php.txt";
file_put_contents($Dosya, $Icerik);


//fgetcsv
$Dosya =  "php.txt";
$DosyaAc = fopen($Dosya,"r");
$Cozumle = fgetcsv($DosyaAc);
echo $Cozumle;
fclose($DosyaAc);


//fputcsv
$Icerikler = array(
    "Volkan,Volkan@gmail.com,0530 223 55 55,İstanbul",
    "Hakan,Hakan@gmail.com,0530 444 66 55,İstanbul",
    "Onur,Onur@gmail.com,0530 555 66 55,İstanbul",
);
$Dosya =  "php.txt";
$DosyaAc = fopen($Dosya,"w");
foreach ($Icerikler as $Dger) {
    fputcsv($DosyaAc, explode("," , $Dger), ";");
}
fclose($DosyaAc);
?> 