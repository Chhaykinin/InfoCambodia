var prevScrollpos = window.pageYOffset;
const navbar = document.getElementById("navbar");
const letter = document.querySelectorAll(".menu_bar a");
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        navbar.style.top = "0";
        navbar.style.background="white";
        navbar.style.borderBottom="1px solid black";
        for(var i=0 ; i<letter.length; i++){
            letter[i].style.color="#000";
        }
        navbar.style.borderBottom="1px solid #d1d5db";
    } else {
        navbar.style.top = "-81px";
    }
    prevScrollpos = currentScrollPos;
}