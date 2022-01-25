
<?php 
    session_start();
    global $login;
    
    $login = $_SESSION["logedin"];

    $hash = "d404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db";
    
    if(isset($_POST['submit']) && $_POST['username'] != "" && $_POST['password'] != ''){

        if(array_key_exists("password", $_POST) && array_key_exists("username",$_POST)){
            $usernameCkeck = "Admin";
            $passwordCheck = hash('sha512', $_POST["password"]);
            if ($usernameCkeck == $_POST["username"] && $passwordCheck == $hash){
                echo'<script type="text/javascript" language="javascript" > alert("Anmeldung erfolgreich!")</script>';
                $login = true;
    
            
            } else { echo'<script  type="text/javascript" language="javascript"> alert("Anmeldung fehlgeschlagen!")</script>';
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
        
    } 
?>

        
<?php
    if(isset($_POST["submitK"])){
    mail("sibylle.gehring@hotmail.com", "kontaktformular",' Name: '.$_POST["name"]. ' Email: '.$_POST["email"].' Nachricht: '.$_POST["nachricht"]);
    ?>
    <script type="text/javascript" language="Javascript"> 
        alert("Erfolgreich gesendet")
    </script> 
    <?php 
    }
?>

<!DOCTYPE html>
<html lang="de">
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
    <nav> 
        <ul>
            <li><a href = "#jumpAboutMe">About Me</a></li>
            <li><a href = "#jumpLebensauf">Lebenslauf</a></li>
            <li><a href = "#jumpZertifikat">Zertifikate </a></li>
            <li><a href = "#jumpKontakt">Kontakt</a> </li>
        </ul>   
        
        <div class ="up" > <a href = "#jumpWelcome" > <div class = "uptxt">Up</div> </a></div>
    </nav>
    
    <content>
        <div class="gridWelcome" id = "jumpWelcome">
            <div class="kreis">Welcome</div>
        
            <div class = "welcome-animation-1"></div>
            <div class = "welcome-animation-2"></div>
            <div class = "welcome-animation-3"></div>
            <div class = "welcome-animation-4"></div>
            <div class = "welcome-animation-5"></div>
            <div class = "welcome-animation-6"></div>
        </div>

        <div class="gridAboutMe" id = "jumpAboutMe" >
          <img class = "pictureMe" src="bilder/testpic.png" alt="profilbild">
           
            <div class = "textposition">
                <p>
                    <b>Name: Sibylle Gehring | Nationalität: Schweizerin | Geburtsdatum: 18.12.1997 | Wohnort: Zürich</b>
                    <br>
                    <hr>
                    <br>
                    Geboren und aufgewachsen bin ich in der Stadt Zürich, gemeinsam mit meinen
                    Eltern und meinem älteren Bruder. Schon früh habe ich Interesse an Technologie gezeigt.
                    Vor allem mein Vater hat mir dabei sehr vieles gezeigt und erklärt.
                    Aber auch die Begeisterung für die Kunst wurde schon früh bei mir geweckt,
                    diese kam vor allem von meinem Grossvater. Zu meinen Hobbies gehören daher Zeichnen,
                    Malen in traditioneller aber auch digitaler Form. Zudem agiere ich schon seit meiner Grundschulzeit
                    als erste Ansprechperson bei technischen Problemen welche Freunde, Familie aber auch damals
                    Lehrpersonen immer wieder hatten. Die Liebe zur Technik lebe ich somit nicht nur im Beruf,
                    sondern auch privat gerne aus, eine der grössten Freuden ist für mich,
                    nachdem ein Problem gelöst wurde die Person, die Hilfe gesucht hat, zufrieden 
                    und glücklich zu sehen.
                </p>
            </div>
           
        </div>

        <h3 id = "jumpLebensauf"></h3>
        <div class="flip-card-1">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div id=year>
                        <p> Schulbildung </p>
                    </div>
                </div>
                <div class="flip-card-back">
                    <div id=year-p>
                        <p>
                            2020 - 2021
                            <br>
                            <br>
                            Nach einer schwierigen Zeit raffte ich mich
                            auf und fing bei der Firma ESPAS ein Aufbautraining an.
                            Schon schnell waren Fortschritte zusehen, weswegen ich nach
                            vier Monaten bereits die Berufsvorbereitung in der internen
                            Informatikabteilung beginnen konnte.
                            <br> 
                            <br>
                            2016 - 2018
                            <br>
                            <br>
                            Um meinen Sekundarabschluss zu erweitern, habe ich
                            mich schliesslich dazu entschieden, an der Atelierschule
                            den IMS F Abschluss zu machen, dieser ist gleichwertig
                            wie der Fachmittelschulabschluss. Spezialisiert habe ich mich
                            dabei auf Mathematik, Chemie, Biochemie und Eurythmie.
                            <br>
                            <br>
                            2013 - 2014
                            <br>
                            <br>
                            Das Berufvorbereitungsjahr absolvierte ich an der
                            Fachschule Viventa. Ich entschied mich  damals für die
                            Fachrichtung Gestaltung und Kunst. Neben den normalen Schulfächern
                            besuchte ich ebenfalls den Informatikunterricht, Theater,
                            bildnerisches Gestalten und dreidimensionales Gestalten
                            als Unterrichtsfächer
                            <br>
                            <br>
                                2010 - 2013
                            <br>
                            <br>
                            Während den drei Jahren Sekundarschule
                            besuchte ich in Albisrieden das Schulhaus Letzi
                            auf Sekundarniveau A mit der Einstufung 
                            1 in Mathematik und 2 in Französisch.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="flip-card-2">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div id=year>
                        <p> Berufliche Erfahrung</p>
                    </div>
                </div>
                <div class="flip-card-back">
                    <div id=year-p>
                        <p>
                            2019
                            <br>
                            <br>
                            Nach einer halbjährigen Pause, nach meinem IMS F Abschluss, entschied ich mich
                            übergangsmässig ein drei Monatiges Praktikum im kaufmännischen Bereich zu machen.
                            Das Praktikum absolvierte ich im Verein für Behinderten-Reisen.
                            Während dieser Zeit war ich für die Disposition verantwortlich und lernte
                            das zusammenarbeiten mit beeinträchtigten Menschen noch besser umzusetzen.
                            <br>
                            <br>
                            2014 - 2015
                            <br>
                            <br>
                            Meine erste Lehre fing ich als Bekleidungsgestalterin Fachrichtung
                            Damenbekleidung an der Fachschule für Mode und Gestaltung,
                            Modeco, an.
                            Nach einem Jahr brach ich diese jedoch ab, da ich merkte,
                            dass das Arbeiten mit Technik mir doch sehr fehlt.
                        </p>
                    </div>
                </div>
            </div>
        </div> 


        <div class = "gridLogin" id = "jumpZertifikat">
            <div id = "rectangleLogin"></div>

            <form name="login" id="pw" method="post">
                
                <input type = "text" id ="username" name="username" placeholder="Username" require>
                <input type = "password" id ="password" name="password" placeholder="Password" require>
                <button type="submit" id="login_button" name="submit">Login</button>
                <lable type = "text" class = "pzert" name = "hinweis">Bitte einloggen um Einsicht in die Zertifikate zu erhalten.</lable>
            </form>

        </div>

        <div class = "gridKontakt" id = "jumpKontakt">
        
            <div id = "rectangle"></div>
            
            <form name="kontaktformular" class = "formkont" method="post">
                <input type="email" id="email" name="email" placeholder="E-Mail" required />
                <input type="text" id="name" name="name" placeholder = "Name" required>
                <textarea id="nachricht" name="nachricht" placeholder = "Nachricht" required></textarea>
                <button type="submit" id="submit" name="submitK"> Senden</button>
            </form> 
            
        </div>

    </content>
 
    <footer>
        <div class = "footer-text">Erstellt von Sibylle Gehring | HTML, CSS, JS, PHP</div>
    </footer>

</body>

</html>

