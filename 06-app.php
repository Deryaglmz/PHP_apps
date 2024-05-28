<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //lokal alandan globale ulaşabiliyor
    function Deneme(){
        $GLOBALS["Isim"] = "Derya";
    }
    Deneme();
    echo $Isim;
    //echo $GLOBALS["Isim"];

    $GLOBALS["Isim"] = "Derya";
    function Deneme3(){
        $GLOBALS["Isim"] = "Derya";
    }
    Deneme3();

    function Deneme2(){
        echo"Merhaba";
    }
    Deneme2();


    $Isim = "Derya";
    function Deneme4(){
        $GLOBALS["Isim"] = "Derya";
    }
    Deneme4();
?>
    
</body>
</html>