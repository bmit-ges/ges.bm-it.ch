<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Kontakt</title>
</head>

<body style="background-color:#000000;">

 
  
  <div class="main-rec">
      <header>
        <nav id = menu class="menu">
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about_me.html">About Me</a></li>
            <li><a href="projekte.html">Projekte</a></li>
            <li><a href="zertifikate.html">Zertifikate</a></li>
            <li><a href="lebenslauf.html">Lebenslauf</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
          </ul>
        </nav>
        
      </header>
      <div class= "line"></div>
  </div>
  
  <div id=rectangle></div>
      <img id="img-mail" src="bilder/stamp.png" alt="stamp">
      <img id="img-office" src="bilder/office.jpg" alt="office">
  </div>

    <?php
        if(isset($_POST["submit"])){
        mail("sibylle.gehring@hotmail.com", "kontaktformular",' Name: '.$_POST["name"]. ' Email: '.$_POST["email"].' Nachricht: '.$_POST["nachricht"]);
        ?>
        <script type="text/javascript" language="Javascript"> 
          alert("Erfolgreich gesendet")
        </script> 
        <?php 
    }
    ?>

 

  <form name="kontaktformular" action="kontakt.php" method="post">
      <input type="email" id="email" name="email" placeholder="E-Mail" required />
      <input type="text" id="name" name="name" placeholder = "Name" required>
      <textarea id="nachricht" name="nachricht" placeholder = "Nachricht" required></textarea>
      <button type="submit" id="submit" name="submit"> Senden</button>
  </form> 

  
  <footer>
    <div class = "footer-text">Erstellt von Sibylle Gehring | HTML, CSS, JS, PHP</div>
  </footer>

</body>

</html>
