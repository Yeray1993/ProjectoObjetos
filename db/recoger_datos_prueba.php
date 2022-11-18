<?php 
$esmayor=false;

if($_POST['edad']>=18){
    $esmayor=true;
}
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .color{
           
        }

        </style>
</head>
<body>
    <?php
    echo 'Nombre= '.$_POST['name'].'<br>';
    echo 'Edad= '.$_POST['edad'].'<br>';

    if($esmayor){
        echo '<div style="color:green;">';
        echo '<p>Eres mayor de 18</p><br><button href="google.es"> Click aqii</button>';
    echo 'felicidades';
    }else{
        echo '<div style="color:red;">';
        echo '<p>Eres un criajo</p><br>';
    }
    echo '</div>';
    ?>
</body>
</html>