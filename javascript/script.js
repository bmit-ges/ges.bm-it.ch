/*Navigation Zertifikatseite*/
var zer1 = document.getElementById("zertifikat1");
var zer2 = document.getElementById("zertifikat2");
var zer3 = document.getElementById("zertifikat3");
var zer4 = document.getElementById("zertifikat4");
var zer4 = document.getElementById("zertifikat5");

var zer1p = document.getElementById("zert-p1");
var zer2p = document.getElementById("zert-p2");
var zer3p = document.getElementById("zert-p3");
var zer4p = document.getElementById("zert-p4");
var zer4p = document.getElementById("zert-p5");

var zer1title = document.getElementById("zert-titel1");
var zer2title = document.getElementById("zert-titel2");
var zer3title = document.getElementById("zert-titel3");
var zer4title = document.getElementById("zert-titel4");
var zer4title = document.getElementById("zert-titel5");

document.getElementById("zert-arrow-right").addEventListener("click",zert_arrow_right);
function zert_arrow_right(){

  
  if  (zer1.style.visibility  =="visible"){
    hidden_zer_1();
    visible_zer_2();
  }
  
  else if  (zer2.style.visibility  =="visible"){
    hidden_zer_2();
    visible_zer_3();
 }

  else if(zer3.style.visibility  =="visible"){
    hidden_zer_3();
    visible_zer_4();
  }
  else if(zer4.style.visibility  =="visible"){
    hidden_zer_4();
    visible_zer_5();
  }

  else{
    hidden_zer_5();
    visible_zer_1();
  }

}


document.getElementById("zert-arrow-left").addEventListener("click",zert_arrow_left);

function zert_arrow_left(){
  if  (zer1.style.visibility  =="visible"){
    hidden_zer_1();
    visible_zer_5();
  }
  else if (zer5.style.visibility  =="visible"){
    hidden_zer_5();
    visible_zer_4();
  }
  else if (zer4.style.visibility  =="visible"){
    hidden_zer_4();
    visible_zer_3();
  }
  else if (zer3.style.visibility =="visible"){
    hidden_zer_3();
    visible_zer_2();
  }
  else{
    hidden_zer_2();
    visible_zer_1();
  }
}

/* Funktion um Elemente ein und aus zublenden*/

function hidden_zer_1(){
    zer1.style.visibility ="hidden";
    zer1title.style.visibility ="hidden";
    zer1p.style.visibility="hidden";
  }
  
function hidden_zer_2(){
  zer2.style.visibility ="hidden";
  zer2title.style.visibility ="hidden";
  zer2p.style.visibility="hidden";

}
function hidden_zer_3(){
  zer3.style.visibility ="hidden";
  zer3title.style.visibility ="hidden";
  zer3p.style.visibility="hidden";

}
function hidden_zer_4(){
  zer4.style.visibility ="hidden";
  zer4title.style.visibility ="hidden";
  zer4p.style.visibility="hidden";

}
function hidden_zer_5(){
  zer5.style.visibility ="hidden";
  zer5title.style.visibility ="hidden";
  zer5p.style.visibility="hidden";

}

function visible_zer_1(){
  zer1.style.visibility="visible";
  zer1title.style.visibility="visible";
  zer1p.style.visibility="visible";
}

function visible_zer_2(){
  zer2.style.visibility="visible";
  zer2title.style.visibility="visible";
  zer2p.style.visibility="visible";
}

function visible_zer_3(){
  zer3.style.visibility="visible";
  zer3title.style.visibility="visible";
  zer3p.style.visibility="visible";
}

function visible_zer_4(){
  zer4.style.visibility="visible";
  zer4title.style.visibility="visible";
  zer4p.style.visibility="visible";
}

function visible_zer_5(){
  zer5.style.visibility="visible";
  zer5title.style.visibility="visible";
  zer5p.style.visibility="visible";
}

/*Navigation Projektseite*/

var proj_title1 = document.getElementById("proj_title1")
var proj_p1 = document.getElementById("proj_p1")
var proj_img1 =document.getElementById("proj_img1")

document.getElementById("proj-arrow-right").addEventListener("click",proj_arrow_right);

function proj_arrow_right(){

  
  if  (proj_img1.style.visibility  =="visible"){
    hidden_proj_1();
    visible_proj_1();
  }

}

document.getElementById("proj-arrow-left").addEventListener("click",proj_arrow_left);

function proj_arrow_left(){

  
  if  (proj_img1.style.visibility  =="visible"){
    hidden_proj_1();
    visible_proj_1();
  }

}

/* Funktion um Elemente ein und aus zublenden*/

function hidden_proj_1(){
  proj_title1.style.visibility ="hidden";
  proj_p1.style.visibility ="hidden";
  proj_img1.style.visibility="hidden";
}


function visible_proj_1(){
  proj_title1.style.visibility ="visible";
  proj_p1.style.visibility ="visible";
  proj_img1.style.visibility="visible";
}
