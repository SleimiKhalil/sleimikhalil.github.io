<?php
  include "debut.htm";
?>  
<div id="corps">
  <p>Pour rejoindre la zone membre, vous devez vous inscrire.<br>Entrez les informations vous concernant et cliquez sur le bouton Valider.</p>
  <form action="mail.php" method="post">
    <label>Email</label><input type="mail" name="mail" id="mail" required><br>
    <label>Pseudo</label><input type="text" name="pseudo" id="pseudo" pattern="[a-zA-Z0-9]{3,8}" title="Le pseudo doit être composé de 3 à 8 caractères alphanumériques" required><br>
    <label>Mot de passe</label><input type="password" name="pass" pattern="[a-zA-Z0-9]{5,5}" title="Le mot de passe doit être composé de 5 caractères alphanumériques" required><br>
    <input type="submit" value="Valider">
  </form>
</div>	
<script>
  $(function(){
    $('mail').keypress(function(ev){
      temp = $('#mail').text();
      temp += String.fromCharCode(ev.keyCode).toLowerCase();
      $('#mail').text(temp);
    });
  });
</script>

<?php
  include "fin.htm";
?>  
