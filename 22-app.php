<?php

//if
if(5>10){
    echo "if koşulu geçerli pldu ve kod bloğu çalıştı";
}elseif(6> 10){
    echo "1. elseif koşulu geçerli oldu ve kod bloğu çalıştı";
}elseif(7> 10){
    echo "2. elseif koşulu geçerli oldu ve kod bloğu çalıştı";
}elseif(8> 10){
    echo "3. elseif koşulu geçerli oldu ve kod bloğu çalıştı";
}else {
    echo "if ve elseif koşulu geçersiz oldu ve else kod buloğu çalıştı" . "<br>";
}


$Saat = 3;
if(($Saat>=0) and ($Saat<=6)){
    echo "İyi geceler";
}elseif(($Saat>6) and ($Saat<= 9)){
    echo "Günaydın";
}elseif(($Saat>10) and ($Saat<= 17)){
    echo "İyi Günler";
}elseif(($Saat>17) and ($Saat<= 23)){
    echo "İyi akşamlar";
}else {
    echo "Belirtilen deger ({$Saat}) bir saat dilimi değildir". "<br>";
}


$Saat = 20;
if(($Saat>=0) and ($Saat<=6)){
    if($Saat == 0){
        echo "İyi geceler. Saat şuan 00.00";
    }elseif($Saat == 1){
        echo "İyi geceler. Saat şuan 01.00";
    }elseif($Saat == 2){
        echo "İyi geceler. Saat şuan 02.00";
    }elseif($Saat == 3){
        echo "İyi geceler. Saat şuan 03.00";
    }elseif($Saat == 4){
        echo "İyi geceler. Saat şuan 04.00";
    }elseif($Saat == 5){
        echo "İyi geceler. Saat şuan 05.00";
    }
}elseif(($Saat>6) and ($Saat<= 9)){
    echo "Günaydın";
}elseif(($Saat>10) and ($Saat<= 17)){
    echo "İyi Günler";
}elseif(($Saat>17) and ($Saat<= 23)){
    echo "İyi akşamlar";
}else {
    echo "Saat geçersiz bir değer içeriyor";
}


if(5> 0):
    echo "if koşulu geçerli pldu ve kod bloğu çalıştı";
elseif(20 > 10):
    echo "elseif koşulu geçerli oldu ve kod bloğu çalıştı";
else:
    echo "if ve elseif koşulu geçersiz oldu ve else kod buloğu çalıştı" . "<br>";
endif;


$Ayadi = "Haziran";
if(($Ayadi== "Mart") or ($Ayadi== "Nisan") or ($Ayadi== "Mayıs")):
    echo $Ayadi . "ayı bir ilkbahar ayıdır";
elseif(($Ayadi== "Haziran") or ($Ayadi== "Temmuz") or ($Ayadi== "Ağustos")):
    echo $Ayadi . "ayı bir yaz ayıdır";
elseif(($Ayadi== "Eylül") or ($Ayadi== "Ekim") or ($Ayadi== "Kasım")):
    echo $Ayadi . "ayı bir sonbahar ayıdır";
elseif(($Ayadi== "Aralık") or ($Ayadi== "Ocak") or ($Ayadi== "Şubat")):
    echo $Ayadi . "ayı bir kış ayıdır";
else:
    echo "Girilmeyen değer ({$Ayadi}) bir ay adı değildir";
endif;


//switch
$Ayadi = "Aralık";
switch($Ayadi){
    case $Ayadi = "Ocak":
        echo $Ayadi . "ayı 1. aydır";
    break;
    case $Ayadi = "Şubat":
        echo $Ayadi . "ayı 2. aydır";
    break;
    case $Ayadi = "Mart":
        echo $Ayadi . "ayı 3. aydır";
    break;
    case $Ayadi = "Nisan":
        echo $Ayadi . "ayı 4. aydır";
    break;
    case $Ayadi = "Mayıs":
        echo $Ayadi . "ayı 5. aydır";
    break;
    case $Ayadi = "Haziran":
        echo $Ayadi . "ayı 6. aydır";
    break;
    case $Ayadi = "Temmuz":
        echo $Ayadi . "ayı 7. aydır";
    break;
    case $Ayadi = "Ağustos":
        echo $Ayadi . "ayı 8. aydır";
    break;
    case $Ayadi = "Eylül":
        echo $Ayadi . "ayı 9. aydır";
    break;
    case $Ayadi = "Ekim":
        echo $Ayadi . "ayı 10. aydır";
    break;
    case $Ayadi = "Kasım":
        echo $Ayadi . "ayı 11. aydır";
    break;
    case $Ayadi = "Aralık":
        echo $Ayadi . "ayı 12. aydır";
    break;
    default:
        echo $Ayadi . "Bir ay adı değildir";
}


$Saat = 3;
switch ($Ayadi){
    case($Saat>=0) and ($Saat<=6):
        echo "İyi geceler";
    break;
    case($Saat>6) and ($Saat<= 9):
        echo "Günaydın";
    break;    
    case($Saat>10) and ($Saat<= 17):
        echo "Günaydın";
    break;    
    case($Saat>17) and ($Saat<= 23):
        echo "Günaydın";
    break;
    default:
    echo "Belirtilen deger ({$Saat}) bir saat dilimi değildir". "<br>";
}



$Saat = 3;
switch ($Ayadi){
    case($Saat>=0) and ($Saat<=6):
        switch  ($Ayadi){
            case($Saat<= 0):
                echo "İyi geceler";
            break;
        }
    break;
    case($Saat>6) and ($Saat<= 9):
        echo "Günaydın";
    break;    
    case($Saat>10) and ($Saat<= 17):
        echo "Günaydın";
    break;    
    case($Saat>17) and ($Saat<= 23):
        echo "Günaydın";
    break;
    default:
    echo "Belirtilen deger ({$Saat}) bir saat dilimi değildir". "<br>";
}


$Deger = 8;
switch($Deger):
    case $Deger> 8;
        echo "Koşul geçerli oldu";
    break;
    case $Deger> 9;
        echo "Koşul geçerli oldu";
    break;
    default:
        echo "Koşul geçersiz"."<br>";
endswitch;



//ternary
$Deger = "Volkan";
$Sonuc = ($Deger=="Volkan") ? "Doğru" : "Yanlış";
echo $Sonuc;


$Deger = 2;
$Mesaj1 = "Merhaba volkan nasılsın?";
$Mesaj2 = "Merhaba hakan nasılsın?";
echo ($Deger==1) ? $Mesaj1 : $Mesaj2;
?>
