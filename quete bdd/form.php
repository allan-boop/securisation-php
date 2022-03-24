<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>My test page</title>
    <link href="./form.css" rel="stylesheet">
  </head>
  <body>
    <p>This is my page</p>
    <form method="post" action="thanks.php">
    <div>
      <label for="last_name">last name :</label>
      <input type="text" id="last_name" name="user_last_name">
    </div>
    <div> 
      <label for="first_name">First name :</label>
      <input type="text" id="first_name" name="user_first_name">
    <div>
      <label for="mail">e-mail&nbsp;:</label>
      <input type="email" id="mail" name="user_email">
    </div>
    <div>
      <label for="phone">phone&nbsp;:</label>
      <input type="tel" id="phone" name="user_phone">
    </div>
    <div>
      <select  name="subject">
      <option value="reclamation">réclamation</option>
      <option value="demande_de_devis">demande de devis</option>       
    </div>
    <div>
      <label for="msg">Message :</label>
      <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>
  </body>
</html>