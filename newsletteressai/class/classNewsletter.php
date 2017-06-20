<?php

/**
 * Created by PhpStorm.
 * User: zakar
 * Date: 16/05/2017
 * Time: 13:41
 ******/

include_once  MVC.'class/classDb.php';

class classNewsletter extends DB{


    public $newsletter;
    public $action = 0;
    public $info;
    public function newsletter($name){
        //
        //header();
        //cette methode permet d'envoyer le formulaire
        //d'email pour la newsletter
        //
        //
        $aValid = array('-', '_');
        $tmp_name = str_replace($aValid, '', $name);

        if(!ctype_alnum($tmp_name)) {
            echo "Le nom de la table n'est pas valide.";
            exit();
        }

        $this->table = $name;
        $this->header();
    }

    public function header(){

        if{
        isset($_POST['form_email_'.$this->newsletter])
        && !empty($_POST['form_email_'.$this->newsletter])
        }
        {
            $this->action = 1;

            $email = htmlentities($_POST['form_email_'.$this->table],ENT_QUOTES);

            if($this->addMail($email)){
                $this->info = $this->h1Merci;
                return 1;
            }
            return null;
            )
            return 2;
        }
)


        //addMail();
        //insert l'email dans la base
        //
        //

}

    public function addMail($email)
    {

        //form()
        $date = time();
        $ipAddr = $_SERVER['REMOTE_ADDR'];

        //verification du format mail

        $email = (filter_var($email, FILTER_VALIDATE_EMAIL))?$email:false;
        if($email){
            $this->info = $this->h1EmailInvalid;
            return null;
        }

        $queryTable = <<<TABLECREATE  
 
        CREATE TABLE IF NOT EXISTS $this->table {
          id      int(11)         PRIMARY KEY NOT NULL AUTO_INCREMENT,
          email   varchar(220)    DEFAULT NULL,
          ip_addr VARCHAR(20)     DEFAULT NULL,
          date    int(11)         DEFAULT NULL,
        };
TABLECREATE;

        //creation de la requête pour verifier l'existence de l'email
        $queryMail = <<<QUERYMAIL
        
        SELECT * FORM $This->TABLE
        WHERE email = '$email';
QUERYMAIL;

        $queryInsert = <<<QUERYINSERT
        
        INSERT INTO $this->table (email, ip_addr, date)
        VALUES ('$email','$ipAddr', '$date');
        
QUERYINSERT;

        //connexion a la base de donnee
        $link = mysql_connect($this->host, $this->user, $this->password)
        or die("Impossible de se connecter : " . mysql_error());
        mysql_select_db($this->dbName)
        or die("Impossible de se connecter : " . mysql_error());

        mysql_query($queryTable);

        $resultMail = mysql_query($queryMail);

        if (mysql_num_rows($resultMail) == 0) {
            $insertMail = mysql_query($queryInsert);
            return $insertMail;
            $this->info = $this->h1EmailExiste;
        }

    

public function form(){

    $form = <<<FORMULAIRE


    <form methode="post" id ="form_$this->table" name="form_$this->table"
        style="margin-left: auto; margin-right: auto; width: 250px; text-align: center">

        $this->h1LabelNewsLetter

        <br />
        <input type="text" id="form_email_$this->table" name="form_submit_email_$">
        <br />
    </form>


FORMULAIRE;

    return $form;

}

?>
