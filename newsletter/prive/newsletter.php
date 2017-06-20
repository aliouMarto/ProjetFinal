<?php

require_once 'connect.php';


?>


<!DOCTYPE html>

<html lang="fr" >

<head>


    <title>Envoi de la newsletter</title>

    <style type="text/css">

        h2, th, td

        {

            text-align:center;

        }

        table

        {

            border-collapse:collapse;

            border:2px solid white;

            margin:auto;

        }

        th, td

        {

            border:1px solid black;

        }

    </style>

</head>

<body>

<p align=center><font size="6"><font color="red">Envoi de la newsletter</font></font></p>



<?php

// On se connecte.

mysql_connect("localhost", "root", "");

mysql_select_db("larchitecture");


$news = mysql_query('SELECT contenu,timestamp FROM news ORDER BY id DESC LIMIT 0, 5');



$fichier_message = '<html>

<head>

    <title>Newsletter de L\'Architecture de votre région</title>

</head>

<body bgcolor="black">

<font face="verdana"><font color="white"><font size="5"><p align="center"><font color="red"><u>Balzac61</u></font></p></font>

<font size="3">

<p align="left">Voici les dernières news de L\'Architecture.com:<br /><ul>'; //On définit le message.



while($donnee = mysql_fetch_assoc($news))

{

    $fichier_message .= '<li>'.$donnee["contenu"].'(le'.date("D, d M Y H:i:s",$donnee["timestamp"]).')</li>'; //On ajoute les news au message.

}



$fichier_message .= '</ul></body>

</html>';






$liste_vrac = mysql_query("SELECT email FROM newsletter");



// On définit la liste des inscrits.

$liste = 'newsletter/newsletter.php';

while ($donnees = mysql_fetch_assoc($liste_vrac))

{

    $liste .= ',';

    $liste .= $donnees['email'];

}

$message = $fichier_message;

$destinataire = $liste;



$date = date("d/m/Y");



$objet = "Newsletter de L'Architecture $date";

$headers  = 'MIME-Version: 1.0' . '\r\n';

$headers .= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';

$headers .= 'From: l\'architecture.com' . '\r\n';

$headers .= 'Bcc:' . $liste . '' . '\r\n';



if ( mail($destinataire, $objet, $fichier_message, $headers) )

{

    ?>

    Envoi de la newsletter réussi.

    <?php

}

else

{

    ?>

    Échec de l'envoi de la newsletter.

    <?php

}

?>

<br /><br /><u>Liste des inscrits :</u><br />

<table>

    <tr>

        <th>e-mail</th>

    </tr>

    <?php



    $liste_inscrits_vrac = mysql_query("SELECT email FROM newsletter");

    while ($donnees = mysql_fetch_assoc($liste_inscrits_vrac))

    {

        ?>



        <tr>

            <td><?php echo ($donnees['email']); ?></td>

        </tr>



        <?php

    }

    ?>

</table>

</body>

</html>

<!-- code dossier prive  groupe13 -->

