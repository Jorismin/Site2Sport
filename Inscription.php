<?php




?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Inscription.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
<body>


  <!-- INSCRPTION -->
  <div class="container">
    <div class="title"> S'inscrire et recevoir notre newletter  !</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nom & Prenom</span>
            <input type="text" placeholder="John Doe" required>
          </div>
          <div class="input-box">
            <span class="details">Pseudo</span>
            <input type="text" placeholder="JohnDoe29" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="JohnDoe29@hotmail.com" required>
          </div>
          <div class="input-box">
            <span class="details">Numero de telephone</span>
            <input type="text" placeholder="55-55-55-55-55" required>
          </div>
          <div class="input-box">
            <span class="details">Mots de passe</span>
            <input type="text" placeholder="Mots de passe" required maxlength="15">
          </div>
          <div class="input-box">
            <span class="details">Confiramation mot de passe</span>
            <input type="text" placeholder="Confirmation" required maxlength="15"  >
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Genre</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Homme</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Femme</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
