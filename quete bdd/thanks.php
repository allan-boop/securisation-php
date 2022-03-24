<?php

$error = array();
$email = isset($_POST['user_email'])? $_POST['user_email']:'';
if(empty($_POST['user_last_name']))
{
    $error['user_last_name'] = "Your last name cannot be empty";
    if(isset($error['user_last_name'])) echo $error['user_last_name']; 

}

if(empty($_POST['user_first_name']))
{
    $error['user_first_name'] = "Your first name cannot be empty";
    if(isset($error['user_first_name'])) echo $error['user_first_name']; 

}

if(empty($_POST['user_email']))
{
    $error['user_email'] = "Your email cannot be empty";  
    if(isset($error['user_email'])) echo $error['user_email']; 

}
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
  $error['user_email1'] = "Invalid email";      
  if(isset($error['user_email1'])) echo $error['user_email1']; 

}

if(empty($_POST['subject']))
{
    $error['subject'] = "Select a subject";
    if(isset($error['subject'])) echo $error['subject']; 

}     

if(empty($_POST['user_phone']))
{
    $error['user_phone'] = "Your phone number cannot be empty";
    if(isset($error['user_phone'])) echo $error['user_phone']; 

}

if(empty($_POST['user_message']))
{
    $error['user_message'] = "Your message cannot be empty";
    if(isset($error['user_message'])) echo $error['user_message'];         

}

if(count($error) == 0)
{
    echo 'Merci '.$_POST['user_last_name'].$_POST['user_first_name']. ' de nous avoir contacté à propos de '.$_POST['subject'];
    echo PHP_EOL;
    echo 'Un de nos conseiller vous contactera soit à l’adresse '.$_POST['user_email'].' ou par téléphone au '.$_POST['user_phone'].' dans les plus brefs délais pour traiter votre demande :';
    echo PHP_EOL;
    echo $_POST['user_message'];
   exit();
}
?>
