<?php

//unset
$Isim = "Volkan";
echo $Isim . "<br>";
unset($Isim);


//var_export
$Deger = "Volkan Alakent";
$Tarih = 2019;
echo $Deger . "<br>";
var_export($Deger);
echo "<br>";
var_export($Tarih);


//printf
$Deger = "Volkan";
printf("Hoşgeldiniz %s bey", $Deger);


//sprintf
$Deger = 1.53725e+3;
$Sonuc = sprintf("Değerin kısa gösterim karşılığı %g", $Deger);
echo $Sonuc . "<br>";


//getenv
echo "<pre>";
print_r(getenv());
echo "<pre>";


//getenv
echo "<pre>";
print_r(getenv());
echo "<pre>";
echo "<br>" . "<br>" . "<br>";
putenv("ISIM=Derya");
putenv("SOYİSİM=Gülmez");
putenv("BİLGİ=BTK dersleri");
echo "İsim : " .  getenv("ISIM") . "<br>";
echo "Soyisim : " .  getenv("SOYİSİM") . "<br>";
echo "Bilgi : " .  getenv("BİLGİ") . "<br>";



//get_defined_vars
echo "<pre>";
print_r(get_defined_vars());
echo "<pre>";


//get_defined_constants
echo "<pre>";
print_r(get_defined_constants());
echo "<pre>";


//get_defined_functions
function Deneme(){
}
echo "<pre>";
print_r(get_defined_functions());
echo "<pre>";


//get_defined_functions
function Deneme2(){
}
echo "<pre>";
print_r(get_declared_classes());
echo "<pre>";


//get_declared_traits
trait Deneme{
}
echo "<pre>";
print_r(get_declared_traits());
echo "<pre>";


//get_included_files
print_r(get_included_files());


//php_ini_loaded_file
echo "php.ini dosyasının yolu : " . php_ini_loaded_file();


//ini_get_all
print_r(ini_get_all());

//
print_r(ini_get_all("mysqli",false));


//ini_set(), ini_get()
echo "display_errors değeri : " . ini_get("display_errors"). "<br>";
ini_set("display_errors",0);
echo "display_errors değeri : " . ini_get("display_errors"). "<br>";


//parse_ini_file()
echo "<pre>";
print_r(parse_ini_file("C:\xampp\php\extras\browscap.ini", true));
echo "<pre>";


//get_loaded_extensions()
print_r(get_loaded_extensions());


//get_extension_funcs()
print_r(get_extension_funcs("xml"));


//disk_total_space()
$Deger = disk_total_space("C:");
echo "Server'ın toplam disk kapasitesi : " . $Deger. "<br>";


//disk_free_space
$Deger = disk_free_space("C:");
echo $Deger. "<br>";


//memory_get_usage()
$Deger = memory_get_usage();
echo $Deger. "<br>";


//zend_version()
echo"Server'ın çalışmakta olan zend motoru sürümü : " . zend_version(). "<br>";


//phpversion()
echo"Server'ın çalışmakta olan PHP sistemi sürümü : " . phpversion(). "<br>";


//sys_get_temp_dir()
echo sys_get_temp_dir(). "<br>";


//eval
$Metin = 'echo "Volkan Alakent";';
eval($Metin);


//exec
exec("ping extraegitim.com", $Sonuc);
echo "<pre>";
print_r($Sonuc);
echo "<pre>";


//exit
echo"BTK eğitim";
exit();

?>