/*Slideshow*/

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n){
    showSlides(slideIndex += n);
}

function currentSlide(n){
    showSlides(slideIndex = n);
}

function showSlides(n){
    var i;
    var slides = document.getElementsByClassName("mySlides");
    
    if(n > slides.length){
        slideIndex = 1
    }

    if(n < 1){
        slideIndex = slides.length
    }

    for(i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }

    slides[slideIndex-1].style.display = "block";
}

/*home*/


function hideRect(){

    
    setTimeout(function(){
        var x = document.getElementsByClassName("home-rect1");
        var y = document.getElementsByClassName("home-rect2");

        for (var i=0; i<x.length; i+=1){
            x[i].style.display = "none"
        }

        for (var j=0; j<y.length; j+=1){
            y[j].style.display = "none"
        }
    },3400);

}