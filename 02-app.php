<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php
    echo "PHP Eğitimi";

    echo 8;

    echo <<<END
        Benim adım Derya .
        Php eğitimi alıyorum.
    END;

    echo 'Türkiye\'nin yeni eğitim serisi';
    echo "Türkiye'nin yeni eğitim serisi";
    echo "Türkiye\"nin yeni eğitim serisi";
    echo 'Türkiye"nin yeni eğitim serisi';

    echo "Benim adım Derya .", " - " , "Php eğitimi alıyorum.";
    echo ("Türkiye'nin yeni eğitim serisi");
?>

<?="derya"?>  // tek satırlıl kullanım
</body>
</html>