


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

  <?php
 
  $username = "admin";
  $password = "hi";

  if(isset($_POST['login'])){
    if($_POST['username']=== $username && $_POST['password'] === $password){
      ?>
      <script type="text/javascript" language="Javascript"> 
        alert("Loggedin");
      </script> 
     <?php 
  
    }

  }else{
    ?>
        <script type="text/javascript" language="Javascript"> 
          alert("Falsches Login");
        </script> 
    <?php 
  }

 ?>

 <div class = "rectangle-pw">

    <form name="einloggen" id = "zertfrom" action="zertifikate.php" method="post">
        <input type="text" id="username" name="username" placeholder="Username" required />
        <input type="password" id="password" name="password" placeholder = "Password" required>
        <button type="submit" id="login" value="login"> Login</button>
    </form> 
  </div>

  <footer>
    <div class = "footer-text">Erstellt von Sibylle Gehring | HTML, CSS, JS, PHP</div>
  </footer>
</body>

</html>