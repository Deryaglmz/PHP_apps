<?php

//array_marge
$Dizi1 = array("Volkan","Hakan", "Onur");
$Dizi2 = array("Berk","Berat", "Mahmut");
$YeniDizi = array_merge($Dizi1, $Dizi2);
echo"<pre>";
print_r($YeniDizi);
echo"<pre><br/>";


$Dizi1 = array(0 => "Volkan", 1=> "Hakan", 2=>"Onur");
$Dizi2 = array(0 =>"Berk", 2 =>"Berat", 3 => "Mahmut");
$YeniDizi = array_merge($Dizi1, $Dizi2);
echo"<pre>";
print_r($YeniDizi);
echo"<pre><br/>";

//array_merge_recursive
$Dizi1 = array("Bir"=> "Volkan", "İki"=> "Hakan", "Uc"=>"Onur");
$Dizi2 = array("Bir"=>"Berk", "İki"=> "Berat", "Uc"=> "Mahmut");
$YeniDizi = array_merge_recursive($Dizi1, $Dizi2);
echo"<pre>";
print_r($YeniDizi);
echo"<pre><br/>";


//array_combine()
$Dizi1 = array("Volkan","Hakan", "Onur");
$Dizi2 = array("Berk","Berat", "Mahmut");
$Sonuc = array_combine($Dizi1, $Dizi2);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_slice()
$Isimler = array("Volkan","Hakan", "Onur","Berk","Berat", "Mahmut");
$Sonuc = array_slice($Isimler ,3,2, true);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_chunk()
$Isimler = array("Volkan","Hakan", "Onur","Berk","Berat", "Mahmut","Pelin", "Derya");
$Sonuc = array_chunk($Isimler ,2, true);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//arry_column()
$Takimlar = array(array("KurulusYili" => "1097", "TakimAdi" => "Fenerbahçe"), array("KuruluşYili" => "1905","TakimAdi" => "Galatasaray"), array("KuruluşYili" => "1903","TakimAdi" => "Beşiktaş"));
$Sonuc = array_column($Takimlar,"TakimAdi","KurulusYili");
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_intersect
$Deger1 =  array("Volkan","Hakan", "Onur","Berk","Berat", "Mahmut","Pelin", "Derya");
$Deger2 = array("Ahmet","Kemal","Aslan","Metin","Deniz","Yusuf","Berat");
$Sonuc = array_intersect($Deger1, $Deger2);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_intersect_key
$Deger1 =  array("Volkan","Hakan", "Onur","Berk","Berat", "Mahmut","Pelin", "Derya");
$Deger2 = array("Ahmet","Kemal","Aslan","Metin","Deniz","Yusuf","Berat");
$Sonuc = array_intersect_key($Deger1, $Deger2);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_intersect_assoc
$Deger1 =  array("deger1" => "Volkan","Hakan", "Onur","Berk", "Berat", "Mahmut","Pelin");
$Deger2 = array("Ahmet","Kemal","Aslan","Metin","Deniz","Yusuf","Berat","deger1" => "Volkan");
$Sonuc = array_intersect_assoc($Deger1, $Deger2);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_diff
$Deger1 =  array("Volkan","Hakan", "Onur","Berk", "Berat", "Mahmut","Pelin");
$Deger2 = array("Ahmet","Kemal","Aslan","Metin","Deniz","Yusuf","Berat","Volkan");
$Sonuc = array_diff($Deger1, $Deger2);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_diff_key
$Deger1 =  array("Volkan","Hakan", "Onur","Berk", "Berat", "Mahmut","Pelin");
$Deger2 = array("Ahmet","Kemal","Aslan","Metin","Deniz","Yusuf","Berat","Volkan");
$Sonuc = array_diff_key($Deger1, $Deger2);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_diff_assoc
$Deger1 =  array("Volkan","Hakan", "Onur","Berk", "Berat", "Mahmut","Pelin");
$Deger2 = array("Ahmet","Kemal","Aslan","Metin","Deniz","Yusuf","Berat","Volkan");
$Sonuc = array_diff_assoc($Deger1, $Deger2);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_replace
$Deger1 =  array("Volkan","Hakan", "Onur","Berk", "Berat", "Mahmut","Pelin");
$Deger2 = array("Ahmet","Kemal","Aslan","Metin","Deniz","Yusuf","Berat","Volkan");
$Sonuc = array_replace($Deger1, $Deger2);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_replace_recursive
$Deger1 =  array("Volkan","Hakan", "Onur","Berk", "Berat", "Mahmut","Pelin");
$Deger2 = array("Ahmet","Kemal","Aslan","Metin","Deniz","Yusuf","Berat","Volkan");
$Sonuc = array_replace_recursive($Deger1, $Deger2);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_filter
$Deger =  array("Volkan","Hakan", "Onur","Berk"," ", "Berat", "Mahmut"," ","Pelin");
$Sonuc = array_filter($Deger);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_filter
$Deger =  array("Volkan",5, "Hakan", "Onur","Berk",5,"Volkan ", "Berat", "Mahmut","Berat","Pelin");
$Sonuc = array_unique($Deger);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//range()
$Islem = range(0,100);
echo"<pre>";
print_r($Islem);
echo"<pre><br/>";


$Islem = range("a", "z",5);
echo"<pre>";
print_r($Islem);
echo"<pre><br/>";


//array_fill()
$Islem = array_fill(0,5,"Derya");
echo"<pre>";
print_r($Islem);
echo"<pre><br/>";


//array_fill_keys()
$Islemler= array("Volkan","Hakan","Levent");
$Sonuc = array_fill_keys($Islemler, "BTK");
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";
?>