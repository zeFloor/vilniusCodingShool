
//--------------------------------------FAQ toggle function-------------------------------------------------------------

let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");

        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
        // Making sure only one FAQ question is opened
        for(var j = 0; j < acc.length; j++) {
            var panelTwo = acc[j].nextElementSibling;
            if(panelTwo == panel) {
                continue
            } else {
                if(panelTwo.style.display === "block") {
                    panelTwo.style.display = "none";
                    acc[j].classList.toggle("active");
                }
            }
        }
    }
}



//-------------------------------------Smooth Scroll function--------------------------------------------------------

  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        // Adds # to URL
        window.location.hash = hash;
      });
    } // End if
  });


  //----------------------------------Testimonials slides-----------------------------------------------------------

  let btnN = document.querySelector('.nextBtn')
  let btnP = document.querySelector('.previousBtn')
  let container = document.getElementsByClassName('item')
  
  btnN.addEventListener('click', buttonNext)
  btnP.addEventListener('click', buttonPrev)
  
  function buttonNext() {
      btnP.classList.remove('arrowGray')
      for(var i = 0; i < container.length -1; i++) {
          var currItem = container[i].classList
          var nextItem = container[i+1].classList
  
          if(container[i].classList.contains('apear') == true) {
              if(i == container.length - 2) {
                  btnN.classList.remove('arrowBlue')
                  btnN.classList.add('arrowGray')
                  currItem.toggle('apear')
                  currItem.toggle('hide')
                  nextItem.toggle('hide')
                  nextItem.toggle('apear')
              } else {
                  btnP.classList.add('arrowBlue')
                  currItem.toggle('apear')
                  currItem.toggle('hide')
                  nextItem.toggle('hide')
                  nextItem.toggle('apear')
                  break  
              }  
          }
      }
  }
  
  function buttonPrev() {
      btnN.classList.remove('arrowGray')
      for(var i = 1; i < container.length; i++) {
          var currItem = container[i].classList
          var prevItem = container[i-1].classList
          
          if(container[i].classList.contains('apear') == true) {
              if(i == 1) {
                  btnP.classList.remove('arrowBlue')
                  btnP.classList.add('arrowGray')
                  currItem.toggle('apear')
                  currItem.toggle('hide')
                  prevItem.toggle('hide')
                  prevItem.toggle('apear')
              } else {
                  btnN.classList.add('arrowBlue')
                  currItem.toggle('apear')
                  currItem.toggle('hide')
                  prevItem.toggle('hide')
                  prevItem.toggle('apear')
                  break
              }
          }
      } 
  }

//-----------------------------------Slideshow for phones on tablet and mobile------------------------------------------

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block"; 
    dots[slideIndex-1].className += " active";
}



//---------------------------------------Burger for main navigation bar on mobile ------------------------------------

function toggleBurger() {
    var x = document.getElementById("burger");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
}



//--------------------------------------------- LogIn/SignUp and Refresh Watch screen ------------------------------------------------


let loginBtn = document.querySelector('.loginBtn')
let signupBtn = document.querySelector('.signupBtn')
let logoBtn = document.querySelector('.logo')
let watchScreen = document.querySelector('#watch-screen')
let loginForm = document.querySelector('.watch-login')
let signupForm = document.querySelector('.watch-signup')

var watchscrn = watchScreen.classList
var logForm = loginForm.classList
var signForm = signupForm.classList


function loginScreen() {

    if(watchScreen.classList.contains('fadeIn') == true) {
        watchscrn.remove('fadeIn')
        watchscrn.add('watch-screen-background')
        logForm.remove('hide')
        logForm.add('apear')
    } else if(signForm.contains('apear') == true) {
        signForm.remove('apear')
        signForm.add('hide')
        logForm.remove('hide')
        logForm.add('apear')
    }
}

function signupScreen() {

    if(watchScreen.classList.contains('fadeIn') == true) {
        watchscrn.remove('fadeIn')
        watchscrn.add('watch-screen-background')
        signForm.remove('hide')
        signForm.add('apear')
    } else if(logForm.contains('apear') == true) {
        logForm.remove('apear')
        logForm.add('hide')
        signForm.remove('hide')
        signForm.add('apear')
    }
}

function refreshScreen() {

    if(watchScreen.classList.contains('watch-screen-background') == true) {
        watchscrn.remove('watch-screen-background')
        watchscrn.add('fadeIn')
        if(logForm.contains('apear') == true) {
            logForm.remove('apear')
            logForm.add('hide')
        } else {
            signForm.remove('apear')
            signForm.add('hide')
        }
    }
}

let logoutBtn = document.getElementById('logout')
let logged = document.querySelector('.redred')

function loggedIn() {
    if(logoutBtn == null) {
        logged.classList.remove('hide')
        logged.classList.add('apear')
    }
    
}
