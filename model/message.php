<?php
if(isset($_POST['mailform']))
{
     if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['sujet']) AND !empty(['message']))
     {
        $header = "MIME-Version: 1.0\r\n";
        $header.= 'From:"Historiandpen.com"<support@historiandpen.com>'."\n";
        $header.='Content-Type:text/html; chraset="utf-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
          Nom de l\'expéditeur :  '.$_POST['name'].' Mail de l\'expéditeur :  '.$_POST['email'].' Sujet : '.$_POST['sujet'].'   Message:  '.$_POST['message'];

        mail("chrisboukongou@gmail.com","Contact - mon site",$message);
        $msg='<h2 style="text-align: center; color: red;">Votre message a bien été envoyé</h2>';
     }
     else
     {
        $msg = "Tout les champs doivent être complétés !";
     }
}



?>