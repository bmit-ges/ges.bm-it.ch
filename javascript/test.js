document.getElementById("zert-arrow-right").addEventListener("click",right_click);

function right_click(){
    if  (document.getElementById("zertifikat1").style.visibility="visible"){
        function hidden_zer_1()
        function visibility_zer_2()
    }
    if  (document.getElementById("zertifikat2").style.visibility="visible"){
        function hidden_zer_2()
        function visibility_zer_3()

    }

    if  (document.getElementById("zertifikat3").style.visibility="visible"){
        function hidden_zer_3()
        function visibility_zer_4()
    }

    if  (document.getElementById("zertifikat4").style.visibility="visible"){
        function hidden_zer_4()
        function visibility_zer_1()
    }

}


document.getElementById("zert-arrow-left").addEventListener("click",left_click);

function left_click(){
    if  (document.getElementById("zertifikat1").style.visibility="visible"){
        function hidden_zer_1()
        function visibility_zer_4()
    }
    if  (document.getElementById("zertifikat4").style.visibility="visible"){
        function hidden_zer_4()
        function visibility_zer_3()
    }
    if  (document.getElementById("zertifikat3").style.visibility="visible"){
        function hidden_zer_3()
        function visibility_zer_2()
    }

    if  (document.getElementById("zertifikat2").style.visibility="visible"){
        function hidden_zer_2()
        function visibility_zer_1()
    }
}


function hidden_zer_1(){
    document.getElementById("zertifikat1").style.visibility="hidden";
    document.getElementById("zert-titel1").style.visibility="hidden";
    document.getElementById("zert-p1").style.visibility="hidden";
  }
  
  function hidden_zer_2(){
    document.getElementById("zertifikat2").style.visibility="hidden";
    document.getElementById("zert-titel2").style.visibility="hidden";
    document.getElementById("zert-p2").style.visibility="hidden";
  
  }
  function hidden_zer_3(){
    document.getElementById("zertifikat3").style.visibility="hidden";
    document.getElementById("zert-titel3").style.visibility="hidden";
    document.getElementById("zert-p3").style.visibility="hidden";
  
  }
  function hidden_zer_4(){
    document.getElementById("zertifikat4").style.visibility="hidden";
    document.getElementById("zert-titel4").style.visibility="hidden";
    document.getElementById("zert-p4").style.visibility="hidden";
  
  }
  
  function visibility_zer_1(){
    document.getElementById("zertifikat1").style.visibility="visible";
    document.getElementById("zert-titel1").style.visibility="visible";
    document.getElementById("zert-p1").style.visibility="visible";
  }
  
  function visibility_zer_2(){
    document.getElementById("zertifikat1").style.visibility="visible";
    document.getElementById("zert-titel1").style.visibility="visible";
    document.getElementById("zert-p1").style.visibility="visible";
  }
  
  function visibility_zer_3(){
    document.getElementById("zertifikat1").style.visibility="visible";
    document.getElementById("zert-titel1").style.visibility="visible";
    document.getElementById("zert-p1").style.visibility="visible";
  }
  
  function visibility_zer_4(){
    document.getElementById("zertifikat1").style.visibility="visible";
    document.getElementById("zert-titel1").style.visibility="visible";
    document.getElementById("zert-p1").style.visibility="visible";
  }