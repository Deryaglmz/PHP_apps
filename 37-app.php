<?php

//date_default_timezone_get()
$Zaman = date_default_timezone_get();
echo"Zaman dilimi : ".$Zaman;


//timezone_identifiers_list()
$ZamanDilimleri = timezone_identifiers_list(8);
echo"<pre>";
print_r($ZamanDilimleri);
echo"<pre>";


//date_default_timezone_set()
$Zaman = date_default_timezone_set("America/Merida");
$YeniZaman = date_default_timezone_get();
echo"Zaman dilimi : ".$YeniZaman. "<br>";


//date_default_timezone_set()
date_default_timezone_set("America/Merida"). "<br>";


//date()
$Zaman = date("d.m.Y H.i.s");
echo"Zaman : ".$Zaman;


//checkdate
$Deger = checkdate(12, 8,1980);
if ($Deger == 1) {
    echo"Girilen değer geçerli";
}else{
    echo "Girilen değer geçerli değil";
}


//getdate()
$Zaman = getdate();
echo"<pre>";
print_r($Zaman);
echo"<pre>" . "<br>";


//localtime()
$Zaman = localtime();
echo"<pre>";
print_r($Zaman);
echo"<pre>". "<br>";


//time()
$ZamanDamgasi = time();
echo"Zaman : ".$ZamanDamgasi. "<br>";


//mktime()
$ZamanDamgasi = mktime(15,20,55, 12, 8, 1980);
echo"Zaman : ".date("d.m.Y H.i.s"). "<br>";


//microtime()
$ZamanDamgasi = microtime();
echo"Zaman : ".$ZamanDamgasi. "<br>";


//gettimeofday()
$Zaman = gettimeofday();
echo"<pre>";
print_r($Zaman);
echo"<pre>" . "<br>";


//date_create()
$Tarih = date_create();
print_r($Tarih). "<br>";


$Zaman = date_create();
echo"<pre>";
print_r($Zaman);
echo"<pre>". "<br>";


//date_date_set(), date_time_set()
$Tarih = date_create("1980-12-08");
date_date_set($Tarih, 1978, 07, 05);
date_time_set($Tarih, 13, 55, 34);
echo"<pre>";
print_r($Tarih);
echo"<pre>";


//date_timestamp_get()
$Zaman = date_create("1980-12-08");
$ZamanDamgasi = date_timestamp_get($Zaman);
echo"Zaman damgası değeri : ".$ZamanDamgasi. "<br>";


//date_timestamp_set()
$Zaman = date_create();
date_timestamp_set($Zaman, 345070800);
echo"<pre>";
print_r($Zaman);
echo"<pre>" . "<br>";


//date_create_from_format()
$Zaman = date_create_from_format("d-m-Y", "08-12-1980");
echo"<pre>";
print_r($Zaman);
echo"<pre>" . "<br>";


//date_format()
$Zaman = date_format($Zaman,"d.m.Y H.i.s");
echo"<pre>";
print_r($Zaman);
echo"<pre>" . "<br>";


//date_modify()
$Zaman = date_create("08-12-1980");
echo"<pre>";
print_r($Zaman);
echo"<pre>" . "<br>";
date_modify($Zaman, "+3 hour");
echo"<pre>";
print_r($Zaman);
echo"<pre>" . "<br>";


//date_add(), date_interval_create_from_date_string()
$Zaman = date_create("08-12-1980");
echo"<pre>";
print_r($Zaman);
echo"<pre>" . "<br>";
date_add($Zaman, date_interval_create_from_date_string("-1 year"));
echo"<pre>";
print_r($Zaman);
echo"<pre>" . "<br>";


//date_diff
$ZamanBir = date_create("1980-12-08");
$ZamanIki = date_create("1978-07-05");
$Islem = date_diff($ZamanBir, $ZamanIki);
echo"<pre>";
print_r($Islem);
echo"<pre>" . "<br>";


//format
$ZamanBir = date_create("1980-12-08");
$ZamanIki = date_create("1978-07-05");
$Islem = date_diff($ZamanBir, $ZamanIki);
$formatla = $Islem->format("%y Yıl %m Ay %d Gün");
echo $formatla . "<br>";


//strtotime()
$Zaman = date("Y-m-d");
$Sonuc = strtotime($Zaman);
echo $Sonuc . "<br>";


//date_sun_info
$ZamanDamgasi = strtotime("1980-12-08");
echo $ZamanDamgasi . "<br>";
$Sor = date_sun_info($ZamanDamgasi, 41.01798636995669, 28.916323181072162);
echo"<pre>";
print_r($Sor);
echo"<pre>" . "<br>";
?>