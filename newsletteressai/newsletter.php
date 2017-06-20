<?php
/**
 * Created by PhpStorm.
 * User: zakar
 * Date: 16/05/2017
 * Time: 13:33
 */

//Declaration de la Constante MVC
define("MVC","./mvc/");

//importation de la class newsletter

include MVC.'classNewsletter.php';

$Newsletter = new classNewsletter('newsletter');
var_dump($Newsletter);

?><!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //Affichage du résultat de la requete
    if(!empty($NewsLetter->info)){
        echo $Newsletter->info;
}
?>
    <br />
<?php

    //Affichage du formulaire
    //de la newsletter
    echo $NewsLetter->form();

?>
</body>
</html>





