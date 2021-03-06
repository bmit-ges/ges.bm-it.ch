<?php 
    session_start();
    global $login;

    $hash = "ad3c25da8fdf8c03836df78225df357eb2a43a578ad8bb61733deb5005e6a758849ee29a12a5f5f66d6d2675d144b80d2fdc74d436b8fd64f3eec79b5285a966";
    
    if(isset($_POST['submit']) && $_POST['username'] != "" && $_POST['password'] != ''){

        if(array_key_exists("password", $_POST) && array_key_exists("username",$_POST)){
            $usernameCkeck = "Admin";
            $passwordCheck = hash('sha512', $_POST["password"]);
            if ($usernameCkeck == $_POST["username"] && $passwordCheck == $hash){
                $login = true; 
            } else { echo'<script  type="text/javascript" language="javascript"> alert("Anmeldung fehlgeschlagen!")</script>';

                $login = false;
            }
        }        
    } 

    if($login == true){
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: zertifikate_login.php");
        header("Connection: close");
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
    <title>ges.bm-it.ch</title>
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
                    <b>Name: Sibylle Gehring | Nationalit??t: Schweizerin | Geburtsdatum: 18.12.1997 | Wohnort: Z??rich</b>
                    <br>
                    <hr>
                    <br>
                    Geboren und aufgewachsen bin ich in der Stadt Z??rich, gemeinsam mit meinen
                    Eltern und meinem ??lteren Bruder. Schon fr??h habe ich Interesse an Technologie gezeigt.
                    Vor allem mein Vater hat mir dabei sehr vieles gezeigt und erkl??rt.
                    Aber auch die Begeisterung f??r die Kunst wurde schon fr??h bei mir geweckt,
                    diese kam vor allem von meinem Grossvater. Zu meinen Hobbies geh??ren daher Zeichnen,
                    Malen in traditioneller aber auch digitaler Form. Zudem agiere ich schon seit meiner Grundschulzeit
                    als erste Ansprechperson bei technischen Problemen welche Freunde, Familie aber auch damals
                    Lehrpersonen immer wieder hatten. Die Liebe zur Technik lebe ich somit nicht nur im Beruf,
                    sondern auch privat gerne aus, eine der gr??ssten Freuden ist f??r mich,
                    nachdem ein Problem gel??st wurde die Person, die Hilfe gesucht hat, zufrieden 
                    und gl??cklich zu sehen.
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
                            Fachschule Viventa. Ich entschied mich  damals f??r die
                            Fachrichtung Gestaltung und Kunst. Neben den normalen Schulf??chern
                            besuchte ich ebenfalls den Informatikunterricht, Theater,
                            bildnerisches Gestalten und dreidimensionales Gestalten
                            als Unterrichtsf??cher
                            <br>
                            <br>
                                2010 - 2013
                            <br>
                            <br>
                            W??hrend den drei Jahren Sekundarschule
                            besuchte ich in Albisrieden das Schulhaus Letzi
                            auf Sekundarniveau A mit der Einstufung 
                            1 in Mathematik und 2 in Franz??sisch.
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
                            Nach einer halbj??hrigen Pause, nach meinem IMS F Abschluss, entschied ich mich
                            ??bergangsm??ssig ein drei Monatiges Praktikum im kaufm??nnischen Bereich zu machen.
                            Das Praktikum absolvierte ich im Verein f??r Behinderten-Reisen.
                            W??hrend dieser Zeit war ich f??r die Disposition verantwortlich und lernte
                            das zusammenarbeiten mit beeintr??chtigten Menschen noch besser umzusetzen.
                            <br>
                            <br>
                            2014 - 2015
                            <br>
                            <br>
                            Meine erste Lehre fing ich als Bekleidungsgestalterin Fachrichtung
                            Damenbekleidung an der Fachschule f??r Mode und Gestaltung,
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

