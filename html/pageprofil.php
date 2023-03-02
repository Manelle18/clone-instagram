<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid bg-black">
                    <div class="col-3 text-center">
                        <img src="../image/logo 3.png" class= "logo "style="display: block; margin: 0 auto;">
                    </div>
                    <a href="../index.php" class="text-light me-2" style="text-decoration: none;">DÉCONNEXION
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="40" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                          <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                          <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                      </svg></a>
                      <a href="../html/pageprofil.html" class="text-light me-2" style="text-decoration: none;">
                      <div class="container-fluid col-4 mt-5 pt-4 me-4 ">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg>
                              <h6 class="mt-2">PROFIL</h6> 
                      </div></a>
              </div>    
          </nav>
          <main>
              
        <div class="container">
            <div class="row">
              <div class="col-md-4">
                <img src="../image/index.png" class="img-fluid rounded-circle mx-auto d-block">
              </div>
              <div class="col-md-8 text-bg-dark">
                <h1>
                </h1>
                <p class="lead text-bg-dark">BIO:</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">PSEUDO: </li>
                  <p><?= $_COOKIE['pseudo']?>
                <img src="../image/chine.jpg">
                <img src="../image/lac.jpg">
                </ul>
              </div>
            </div>
          </div>
          
     </main>
        

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