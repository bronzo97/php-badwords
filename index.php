<?php 

$userName = 'Danilo';
$userSurname = 'Bronzo';

$length = strlen($userName);

if ($userName === 'Danilo') {
    $userName = '***';
}


// var_dump($_GET);

?>

<h1>Benvenuto <?php echo $userName . ' ' . $userSurname ?></h1>
<h2>Lunghezza nome: <?php echo $length ?></h2>



