<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid bg-black">
            <div class="col-4 pt-1">
               <a href="html/inscription.html"><button type="button" class="btn btn-outline-danger">INSCRIPTION</button></a>
                </div>
                    <div class="col-4 text-center">
                     <img src="./image/logo 3.png" class= "logo "style="display: block; margin: 0 auto;">
                    </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
            </div>
        </div>    
    </nav>

<div style="text-align: center ">
    <form action="process/page_connexion.php" method="POST">
      <br><br><br><h2>CONNEXION</h2>
      <br><br><label for="pseudo">Pseudo :</label>
      <br><input type="text" id="pseudo" name="pseudo"><br><br>
      <label for="password">Mot de passe :</label>
      <br><input type="password" id="password" name="password"><br><br>
      <br><input type="submit" value="Sign up">
    </form>
</div>
<?php
  if(!empty($_GET['error'])) {
    ?><p style="color:red; text-align: center;" class="pt-5"> <?= $_GET['error']?></p>
  <?php } ?>
<footer class="container-fluid bg-black fixed-bottom">
    <div >
      <nav>
        <a class="colorss text-light" href="#">Accueil</a>
        <a class="colorss text-light" href="#">À propos</a> |
        <a class="colorss text-light" href="#">Contact</a>
      </nav>
      <p>Copyright © 2023 CLONE INSTAGRAM. Tous droits réservés.</p>
    </div>
  </footer>
  

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>