<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php

if(empty($_POST['nombre'])){
echo 'Error: Falta nombre';
exit ;
}
if(empty($_POST['edad'])){
echo 'Error: Falta edad';
exit ;
}
if(empty($_POST['email'])){
echo 'Error: Falta email';
exit ;
}
if(empty($_POST['cp'])){
echo 'Error: Falta cp';
exit ;
}
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$email=$_POST['email'];
$cp=$_POST['cp'];

//QUE GUARDE EN LA DB
?>
</body>
</html>