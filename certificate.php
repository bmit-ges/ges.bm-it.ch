<?php
  global $login;

  session_start();

  if($login = false){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: index.php");
    header("Connection: close");
  }
  /*
  if(isset($_POST['logout'])){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: index.php");
    header("Connection: close");
    $login = false;
  }
  */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ges.bm-it.ch</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/largescreen.css">
    <link rel="stylesheet" href="css/mediumscreen.css">
    <link rel="stylesheet" href="css/smalscreen.css">
    <link rel="stylesheet" href="css/certificate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php#aboutme">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#cv">Lebenslauf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#projects">Projekte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#form">Zertifikate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#form">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="img-container">
        <img class="slide" src="img/ecdl.jpg">
        <img class="slide" src="img/imsf.jpg">
        <img class="slide" src="img/multicheck.jpg">
    </div>
    <div class="button-container">
        
        <button class="btn btn-outline-light" onclick="plusDivs(-1)">❮ Prev</button>
        <button class="btn btn-outline-light" onclick="currentDiv(1)">1</button> 
        <button class="btn btn-outline-light" onclick="currentDiv(2)">2</button> 
        <button class="btn btn-outline-light" onclick="currentDiv(3)">3</button> 
        <button class="btn btn-outline-light" onclick="plusDivs(1)">Next ❯</button>
    </div>

    <script>
   
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function currentDiv(n) {
        showDivs(slideIndex = n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("slide");
        var dots = document.getElementsByClassName("no");
        if (n > x.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }

        x[slideIndex-1].style.display = "block";  
  
        }
    </script>


    <footer>
        <div class="footer-container">
            <p class="footer-text"> Erstellt von Sibylle Gehring | HTML, CSS, JS, JQuery, PHP, Bootstrap</p>
        </div>
    </footer>

</body>

</html>