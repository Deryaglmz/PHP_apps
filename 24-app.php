<?php

//goto
echo " Onur Tatlı<br>";
goto Egitimci;
//echo " Ümit Okudan";
Egitimci:
echo " Volkan Alakent";


//try, catch , finally, thtow, exception, getMessage
try{
    $Deger1 = 100;
    $Deger2 = 0;
    if($Deger2 == 0){
        throw new Exception("Hatalı işlem yapmaya çalışılıyor");
    }
    echo "Bölme işleminizin sonucu : " . $Deger1 / $Deger2;
}catch(Exception $Sonuc){
    echo "". $Sonuc->getMessage();
}


//error_reporting
error_reporting(E_ALL ^ E_WARNING);
trim("");



//while
$BaslangıcDegeri = 50;
while($BaslangıcDegeri >= 1){
    echo "Döngü çalışma numarası : " . $BaslangıcDegeri ."<br>";
    $BaslangıcDegeri--;
}


//do while
$Deger = 1;
do{
    echo $Deger . "<br>";
    $Deger++;
}while($Deger <= 50);



//for
for($Deger = 1; $Deger <= 10; $Deger++){
    echo $Deger ."<br>";
}


$Deger = 1;
while($Deger <= 100){
    echo $Deger ."<br>";
    if($Deger < 10){
        $Deger++;
    }elseif(($Deger > 10) and ($Deger <= 40)){
        $Deger = $Deger + 2;
    }else{
        $Deger = $Deger + 5;
    }    
}


//foreach
$Renkler = array("Mavi","Sarı","Siyah","Yeşil","Mor","Gri","Turuncu");
foreach($Renkler as $value){
    echo $value ."<br>";
}



$Isimler = array("Volkan", "Hakan", "Onur", array("Aslı","Hale","Banu","Derya"),"Levent", "Serkan");
print_r($Isimler);
echo"<br>";
foreach($Isimler as $Icerik){
    if(is_array($Icerik)){
        foreach($Icerik as $Deger){
            echo $Deger ."<br>";
        }
    }else{
        echo $Icerik ."<br>";
    }
}



$Isimler = array("Volkan", "Hakan", "Onur", array("Aslı","Hale","Banu","Derya"),"Levent", "Serkan");
print_r($Isimler);
echo"<br>";
foreach($Isimler as $Anahtar => $Icerik){
    if($Anahtar == 3){
        foreach($Icerik as $Deger){
            echo $Deger ."<br>";
        }
    }else{
        echo $Icerik ."<br>";
    }
}


//break
$Baslangıc = 1;
while($Baslangıc <= 100){
    echo $Baslangıc ."<br>";
    if($Baslangıc==10){
        break;
    }
    $Baslangıc++;
}


//continue
$Sayi = 0;
while($Sayi< 50){
    $Sayi++;

    if(($Sayi > 10) and ($Sayi< 20)){
        continue;
    }
    echo $Sayi ."<br>";
}


for($Sayi = 0; $Sayi< 100; $Sayi++){
    if(($Sayi>10) and ($Sayi< 20)){
        continue;
    }
    echo $Sayi ."<br>";
}
?>