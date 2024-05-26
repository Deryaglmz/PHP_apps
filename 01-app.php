<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
    <script type="text/javascript" language="javascript">
        function Deneme(){
            document.getElementById("ıslemAlanı").innerHTML = "PHP Eğitim";
        }
        </script>
</head>
<body>
<?php
     echo" Derya ";
?>
<input type="button" onclick="Deneme();"><br />
<div id="ıslemAlanı"></div>
</body>
</html>