<?php
   session_start();
    global $login;
    
    $login = $_SESSION["logedin"];
    $usernameLogin = $_POST["username"];
    $passwordLogin = hash("sha512", $_POST["password"]);
    $hash = "D404559F602EAB6FD602AC7680DACBFAADD13630335E951F097AF3900E9DE176B6DB28512F2E000B9D04FBA5133E8B1C6E8DF59DB3A8AB9D60BE4B97CC9E81DB";
   
    if($username != "" and $password != ""){
      if($username == "admin" and $password == $hash){
          $login = true;
      } else {
        echo  '<script type="text/javascript" language="Javascript"> alert("Anmeldung fehlgeschlagen!") </script>' ;
        $login = false;
      }
    }

    if(isset($login) and $login == true){
      header("HTTP/1.1 301 Moved Permanently");
      header("Location: zertifikate_login.php");
      header("Connection: close");
    } else {
      $login = false;
    }
    
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="largescreen.css">
    <link rel="stylesheet" href="mediumscreen.css">
    <link rel="stylesheet" href="smallscreen.css">
    <link rel="stylesheet" href="style.css">
    <script src="javascript/script2.js" defer></script>
    <title>Document</title>
</head>

<body>


    <form name="login" id="pw" action="zertifikate.php" method="post">
        
        <input type = "text" id ="username" name="username" placeholder="Username" require>
        <input type = "password" id ="password" name="password" placeholder="Password" require>
        <button type="submit" id="login_button" name="submit"> Login</button>
        <lable type = "text" class = "pzert" name = "hinweis">Bitte einloggen um Einsicht in die Zertifikate zu erhalten.</lable>
    </form>

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

    <form name="kontaktformular" class = "formkont" action="kontakt.php" method="post">
        <input type="email" id="email" name="email" placeholder="E-Mail" required />
        <input type="text" id="name" name="name" placeholder = "Name" required>
        <textarea id="nachricht" name="nachricht" placeholder = "Nachricht" required></textarea>
        <button type="submit" id="submit" name="submit"> Senden</button>
    </form> 

 
</body>

</html>

