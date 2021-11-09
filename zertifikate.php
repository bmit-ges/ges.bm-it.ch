<?php
   session_start();
    global $login;
    
    $login = $_SESSION["logedin"];

   
    if($_POST["username"] AND $_POST["password"] and $_POST["username"] != "" AND $_POST["password"] != ""){
      if($_POST["username"] == "admin" and $_POST["password"]== 1234){
        $_SESSION["username"] = $_POST["username"];
        $login = true;
      } else {
        echo  '<script type="text/javascript" language="Javascript"> alert("Anmeldung fehlgeschlagen!") </script>' ;
        $login = false;
      };
    };

    if(isset($login) and $login == true){
      header("HTTP/1.1 301 Moved Permanently");
      header("Location: http://ges.bm-it.ch/zertifikate_login.php");
      header("Connection: close");
    } else {
      $login = false;
    };
    
  ?>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <script src="javascript/script.js" defer></script>
  <title>Zertifikate</title>
</head>

<body style="background-color:#000000;">


  <div class="main-rec">
      <header>
        <nav id = menu class="menu">
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about_me.html">About Me</a></li>
            <li><a href="projekte.html">Projekte</a></li>
            <li><a href="zertifikate.php">Zertifikate</a></li>
            <li><a href="lebenslauf.html">Lebenslauf</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
          </ul>
        </nav>
        
      </header>
      <div class= "line"></div>
 
  </div>
 
  <div class ="rectangle-pw"></div>

  <form name="login" id="pw" action="zertifikate.php" method="post">
    <input type = "text" id ="username" name="username" placeholder="Username" require>
    <input type = "password" id ="password" name="password" placeholder="Password" require>
    <button type="submit" id="login_button" name="submit"> Login</button>
  </form>
  
  

  <footer>
    <div class = "footer-text">Erstellt von Sibylle Gehring | HTML, CSS, JS, PHP</div>
  </footer>
</body>

</html>