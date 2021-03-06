<?php

  global $login;

  session_start();

  if($login = false){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: index.php");
    header("Connection: close");
  }

  if(isset($_POST['logout'])){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: index.php");
    header("Connection: close");
    $login = false;
  }
?>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="slideshow.css">
  <script src="javascript/script.js" defer></script>
  <title>Zertifikate</title>
</head>

<body style="background-color:#000000;">

  <script type="text/javascript" language="Javascript"> 
    alert("Erfolgreich angemeldet");
  </script>

  <div class = "navZert">
    <form method = "post">
      <button type="submit" id="logout_button" name="logout">Logout</button>
    </form>
  </div>
   <!-- Navigation -->

   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
  <div class= "gridcontainer">
    
    <div class = "rectangle-zert">

      <!---- IMS F Zertifikat---->
      <div class="mySlides">
        <div class = "zergrid"> 
            <img id="zertifikat" src="bilder/imsf.jpg" alt="imsf">
        
          <div id=zert-titel>
            <p> IMS F Zertifikat</p>
          </div>
        
          <div id=zert-p>
            <p>
              IMS F Zertifikat mit Schwerpunktsfächern Chemie,
              <br>Biochemie und Eurythmie. Der IMS F Abschluss ist gleichwertig
              <br>wie der Fachmittelschulabschluss und ermöglicht den Besuch
              <br> einer Fachhochschule oder einer Höheren Fachschule.
            </p>
          </div>
        </div>
        
      </div>

      <!---beobachtungsschwerpunkt-->
      <div class="mySlides">
        <div class = "zergrid"> 
          <img id="zertifikat" src="bilder/beobachtungsschwerpunk.jpg" alt="beobachtungsschwerpunk">

            <div id=zert-titel>
              <p> Beobachtungsschwerpunk </p>
            </div>

            <div id=zert-p>
              <p>
                Zeugnis des Beobachtungsschwerpunktes aus dem zweiten
                <br>Schuljahr der Atelierschule. Schwerpunktfach war Mathematik.
                <br>Die geprüften Schwerpunkte lagen dabei auf Fachwissen
                <br>(Anwendung und Formulierung), Verständnis in den
                <br>verschiedenen Gebieten und Teamarbeit, hierbei
                <br>verschiedenen Themen an andere Mitschüler*innen
                <br>wie man die weitergebenkann und ob
                <br>sie das Erklärte danach selbst anwenden können.
              </p>
          </div>
        </div>
          
      </div>

      <!--Multicheck-->
      <div class="mySlides">
        <div class = "zergrid">
          <img id="zertifikat" src="bilder/multicheck.jpg" alt="multicheck">

          <div id=zert-titel>
            <p> Multicheck </p>
          </div>

          <div id=zert-p>
            <p>
              Einstufungstest in der Kategorie Informatikerin
              <br>EFZ Applikationsentwicklung.
            </p>
          </div>
        </div> 
      </div>

      <!--ECDL-Basic-->
      <div class="mySlides">
         <div class = "zergrid"> 
          <img id="zertifikat" src="bilder/coming-soon.jpg" alt="coming-soon">

            <div id=zert-titel>
              <p> ECDL Basic </p>
            </div>

            <div id=zert-p>
              <p>
                European Computer Driving Licence, anerkannter Computer Kurs.
                <br>ECDL Basic Zertifikat beinhaltet den Abschluss in
                <br>Computer-Grundlagen, Online-Grundlagen, Textverarbeitung
                <br>und Tabellenkalkulation.
                <br>
                <br>
                <br>Ich habe wie folgt in den einzelnen Modulen Abgeschlossen:
                <br>Computer-Grundlagen: 94%
                <br>Online-Grundlagen: 100%
                <br>Textverarbeitung: 97%
                <br>Tabellenkalkulation: 89%
              </p>
            </div> 
        </div>   
      </div>

      <!--ECDL-Standart-->
      <div class="mySlides">
          <div class = "zergrid"> 
            <img id="zertifikat" src="bilder/coming-soon.jpg" alt="coming-soon">
            
            <div id=zert-titel>
              <p> ECDL Standart </p>
            </div>

            <div id=zert-p>
              <p>
                European Computer Driving Licence, anerkannter Computer Kurs.
                <br>ECDL Standart Zertifikat beinhaltet das ECDL Basic Zertifikat plus 
                <br>den Abschluss in IT-Sicherheit, Präsentation 
                <br>und Online-Zusammenarbeit.
                <br>
                <br>
                <br>Ich habe wie folgt in den einzelnen Modulen Abgeschlossen:
                <br>IT-Sicherheit: 86%
                <br>Präsentation: 94%
                <br>Online-Zusammenarbeit: 100%
              </p>
            </div>
          </div>
      </div>
  </div>
  
  <footer>
    <div class = "footer-zert">Erstellt von Sibylle Gehring | HTML, CSS, JS, PHP</div>
  </footer>
</body>

</html>
 
