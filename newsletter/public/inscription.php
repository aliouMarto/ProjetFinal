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

        <meta http-equiv="refresh" content="1; url=larchitecture/index.php" /> <!--vers la page d'accueil-->



        <?php

    }

    else

    {

        ?>



        <meta http-equiv="refresh" content="25; url=larchitecture/index.php" /> <!-- Redirection vers la page d'accueil du site si on tarde trop à entrer son e-mail. -->



        <?php

    }

    ?>



    <title>Validation de votre inscription à la newsletter de MonSite.fr</title>



</head>

<body>

<p align="center"><font size="5">Validation de votre inscription</font></p>

<?php

if($_GET['tru']==1)

{

    ?>

    <font color="red">Attention, vous avez 25 secondes pour remplir le formulaire. Passé ce délai, celui-ci ne sera plus valide.</font>

    <form method="post" action="inscription.php?tru=2">

        Entrez votre e-mail : <input type="text" name="email" size="25" /><br />

        <input type="submit" value="Envoyer" name="submit" /> <input type="reset" name="reset" value="Effacer" />

    </form>

    <?php

}

elseif($_GET['tru']==2)

{

    $email_mail = mysqli::real_escape_string($_COOKIE['email']);

    $email_entre = mysqli::real_escape_string($_POST['email']);



    if($email_entre==$email_mail)

    {

        $stmt = $bdd->prepare("INSERT INTO newsletter(mail) VALUES (?)");
        $stmt->bindvalue(array($mail));
        echo "Vous avez bien été inscrit à la newsletter de Larchitecture.fr ! Vous allez être redirigé dans 1 seconde.";



    }

    else

    {



        echo "Vous n'avez pas entré la bonne adresse e-mail !";



    }

}

else

{

    echo "Il y a eu une erreur.";

}

?>

</body>

</html>