<?php


require_once 'connect.php';


if($_GET['tru']==1)

{



    setcookie("email", $_GET['email'], time()+25);


}

?>

<!DOCTYPE html>

<html lang="fr" >

<head>

    <meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">

    <?php

    if($_GET['tru']==2)

    {

        ?>



        <meta http-equiv="refresh" content="1; url=larchitecture/index.php" /> <!--  vers la page d'accueil -->



        <?php

    }

    else

    {

        ?>



        <meta http-equiv="refresh" content="25; url=larchitecture/index.php" /> <!--vers la page d'accueil-->



        <?php

    }

    ?>

    <title>Validation de votre désinscription de la newsletter de Larchitecture.fr</title>

</head>

<body>

<p align="center"><font size="5">Validation de votre désinscription</font></p>



<?php

if($_GET['tru']==1)



{

    ?>

    <font color="red">Attention, vous avez 25 secondes pour remplir le formulaire. Passé ce délai, celui-ci ne sera plus valide.</font>

    <form method="post" action="desinscription.php?tru=2">

        Entrez votre adresse e-mail : <input type="text" name="email" size="25" /><br />

        <input type="submit" value="Envoyer" name="submit" /> <input type="reset" name="reset" value="Effacer" />

    </form>

    <?php

}

elseif($_GET['tru']==2)

{


    $email_mail = mysqli::real_escape_string($_COOKIE['email']);

    $email_entre =mysqli::real_escape_string($_POST['email']);



    if($email_entre==$email_mail)

    {

        $supmail = $bdd->prepare("DELETE FROM newsletter WHERE email='" . $email_entre ."'"); //On supprime l'adresse de la BDD.
        $supmail->execute($email_entre);


        echo "Vous avez bien été désinscrit de la newsletter de Larchitecture ! Vous allez être redirigé dans 1 seconde.";



    }

    else

    {

        echo "Vous n'avez pas entré la bonne adresse e-mail !!";

    }

}

else

{

    echo "Il y a eu une erreur.";

}

?>

</body>

</html>