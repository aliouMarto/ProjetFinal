<?php


require_once 'connect.php';


?>

<!--**
 * Created by PhpStorm.
 * User: zakar
 * Date: 17/05/2017
 * Time: 23:11
 */-->
<!DOCTYPE html>

<html lang="fr" >

<head>

    <title>La newsletter L'Architecture</title>

</head>

<body>

<?php

if(isset($_GET['email']))

{



    if( !empty($_POST['email']) AND $_GET['email']==1 AND isset($_POST['new']))

    {

        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))

        {



            if($_POST['new']==0)

            {





                $email = $_POST['email'];

                $message = 'Pour valider votre inscription à la newsletter de L\'Architecture, <a href="newsletter/public/inscription.php?tru=1&amp;email='.$email.'">cliquez ici</a>.';



                $destinataire = $email;

                $objet = "Inscription à la newsletter de L'Architecture" ;



                $headers  = 'MIME-Version: 1.0' . "\r\n";

                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                $headers .= 'From: architecture@gmail.fr ' . "\r\n";

                if ( mail($destinataire, $objet, $message, $headers) )

                {
                    echo "Pour valider votre désinscription, veuillez cliquer sur le lien dans l'e-mail que nous venons de vous envoyer.";

                }

                else

                {

                    echo "Il y a eu une erreur lors de l'envoi du mail pour votre désinscription.";

                }

            }

            else

            {

                echo "Il y a eu une erreur !";

            }

        }

        else

        {

            echo "Vous n\'avez pas entré une adresse e-mail valide ! Veuillez recommencer !";

        }

    }

    else

    {

        echo "Il y a eu une erreur.";

    }

}

else

{

    ?>

    La newsletter :

    <form method="post" action="index.php?email=1">

        Adresse e-mail : <input type="text" name="email" size="25" /><br />

        <input type="checkbox" name="new" value="0" />S'inscrire

        <input type="checkbox" name="new" value="1" />Se désinscrire<br />

        <input type="submit" value="Envoyer" name="submit" /> <input type="reset" name="reset" value="Effacer" />

    </form>

    <?php

}

?>

</body>

</html>




