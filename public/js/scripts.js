window.addEventListener('load',cargar)
window.addEventListener('scroll',nav)
window.addEventListener('scroll',scrollFunction)
function cargar(){
  $('document').ready(function(){
        var menuBtn = $('.menu-icon');
        menu= $('.navigation ul');

        menuBtn.click (function(){
            if( menu.hasClass('show')){
               menu.removeClass('show');
            } else{
              menu.addClass('show');
            }
       });
    });
}

var prevScrollpos = window.pageYOffset;
function nav() {
    var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
       document.querySelector(".navbar").style.top = "0";
      } else {
       document.querySelector(".navbar").style.top = "-150px";
       }
     prevScrollpos = currentScrollPos;
}

function scrollFunction() {
       if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
           document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}












