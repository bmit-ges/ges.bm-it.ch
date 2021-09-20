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
            <li><a href="kontakt.html">Kontakt</a></li>
          </ul>
        </nav>
        
      </header>
      <div class= "line"></div>
  </div>
  
  <div id=rectangle></div>
        <img id="img-mail" src="bilder/email.png" alt="mail">
        <img id="img-office" src="bilder/office.jpg" alt="office">

        <div id=mail-absender>
        <p>Ihre E-Mail</p>
        </div>

        <div id=name-absender>
        <p>Ihr Name</p>
    </div>

    <?php
        if(isset($_POST["submit"])){
        mail("sibylle.gehring@hotmail.com", "kontaktformular",'Name: '.$_POST["name"]. 'Email: '.$_POST["email"].'Nachricht: '.$_POST["nachricht"]);
        ?>
        <h1 style="color: green;">Erfolgreich!</h1>
        <?php 
    }
    ?>

    <form name="kontaktformular" action="index.php" method="post">
      <input id = "" type="email" id="email" name="email" required />
      <input type="text" id="name" name="name" required>
      <textarea id="nachricht" name="nachricht" required></textarea>
      <button type="submit" name="submit"> Senden</button>
  </form> 

</body>

</html>
