// function myFunction2() {
//     document.getElementById("masked").style.display = "none";
// }

// function myFunction() {  
//     document.getElementById("masked").style.display = "block";
// }

window.onscroll = function () { displayNone() };

function displayNone() {
    if (window.matchMedia("(max-width: 767px)").matches) {
        if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {

            document.getElementById("gotobot").className = "displaynone";
            document.getElementById("gototop").className = "";
            document.getElementById("navbar").className = "displaynone";
        
        } else {

            document.getElementById("gotobot").className = "";
            document.getElementById("gototop").className = "displaynone";
            document.getElementById("navbar").className = "navbar navbar-expand-lg navbar-light sticky-top w-100";
        }
    } else if (window.matchMedia("(min-width: 768px)").matches) {

        if (document.body.scrollTop > 525 || document.documentElement.scrollTop > 525) {

            document.getElementById("gotobot").className = "displaynone";
            document.getElementById("gototop").className = "";
            document.getElementById("navbar").className = "displaynone";
        
        } else {

            document.getElementById("gotobot").className = "";
            document.getElementById("gototop").className = "displaynone";
            document.getElementById("navbar").className = "navbar navbar-expand-lg navbar-light sticky-top w-100";
        }
    }
}

function topFunction() {
    document.documentElement.scrollTop = 0;
}
