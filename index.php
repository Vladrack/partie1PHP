<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ExercicePartie1PHP</title>
</head>
<body>
<?php
$name = 'Frebourg';
$firstName = 'Cedric';
$age = 23;
echo $name . ' ' . $firstName
?>
<p><?php echo $name . ' ' . $firstName?></p>
<p><?= $firstName . ' ' . $name . ' ' . $age?></p>
<hr>
<?php
$objet = 'Paletot';
$message = 'Quand il caille';
  ?> 
<p><?php echo $objet . ' ' . $message?></p>
<hr>
<?php
$km = '1 km';
?>
<p><?php echo $km?></p>
<?php
$km = '3 km';
?>
<p><?php echo $km ?></p>
<?php
$km = '125 km';
?>
<p><?php echo $km ?></p>
<hr>
<?php
$name = 'Frebourg' ;
?>
<p>Bonjour <?= $name . ' '?>, comment vas-tu?</p>
<hr>
<?php
$answer = 'no';
if ($answer =='yes') {
    echo 'Vous avez répondu oui';
} 
else {
    echo 'Vous avez repondu non';
}
?>
<hr>
<?php
$number = '140';
?>
<?= ($number + '30') / '2'?>







</body>
</html>