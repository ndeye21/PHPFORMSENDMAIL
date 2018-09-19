
<?php

echo $_POST['nom']."<br>";
echo $_POST['email']."<br>";
echo $_POST['mes']."<br>";
echo $_POST['gender']."<br>";

foreach($_POST['mycheck'] as $mycheck)
{
   echo  $mycheck ."<br>";
}
echo $_POST['pays']."<br>";
$destinataire ="ndeyelgi@gmail.com";
$sujet = "Confirmation de compte";
$message =$_POST['mes'];
$entete="Content-type: text/html; charset=iso-8859". "\n";

if (mail($destinataire,$sujet,$message,$entete))
{
    echo "<h1>Message envoyé </h1>";
}else{
    echo "envoi echoué";
}
/*if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ndeyelgi@gmail.com";
    $email_subject = "My php mail";
 
   
 
 
    // validation expected data exists
    if(!isset($_POST['nom']) ||
        !isset($_POST['email']) ||
        !isset($_POST['mes']) ||
        !isset($_POST['gender']) ||
        !isset($_POST['mycheck[]']) ||
        !isset($_POST['pays'])) {
       
 
     
 
    $nom = $_POST['nom']; // required
    $email = $_POST['email']; // required
    $mes = $_POST['mes']; // required
    $gender = $_POST['gender']; // required
    $mycheck = $_POST['mycheck[]']; // required
    $pays = $_POST['pays']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$nom)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($mes) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "nom: ".clean_string($nom)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "mes: ".clean_string($mes)."\n";
    $email_message .= "sexe: ".clean_string($gender)."\n";
    $email_message .= "sport favoris:".clean_string($mycheck[])."\n";
    $email_message .= "pays: ".clean_string($pays)."\n";

   
 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  */

?>