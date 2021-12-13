window.onscroll = function () { displayNone() };

function displayNone() {
    if (window.matchMedia("(max-width: 767px)").matches) {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {

            document.getElementById("gototop").className = "";
            document.getElementById("navbar").className = "d-none";
            document.getElementById("langue").className = "d-none";
        
        } else {

            document.getElementById("gototop").className = "d-none";
            document.getElementById("navbar").className = "navbar navbar-expand-lg navbar-light sticky-top w-100";
            document.getElementById("langue").className = "ms-4 sticky-top";
        }
    } else if (window.matchMedia("(min-width: 767px)").matches && window.matchMedia("(max-width: 1023px)").matches) {

        if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {

            document.getElementById("gototop").className = "";
            document.getElementById("navbar").className = "d-none";
            document.getElementById("langue").className = "d-none";
        
        } else {

            document.getElementById("gototop").className = "d-none";
            document.getElementById("navbar").className = "navbar navbar-expand-lg navbar-light sticky-top w-100";
            document.getElementById("langue").className = "ms-4";
        }
    } else if (window.matchMedia("(min-width: 1024px)").matches) {

        if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {

            document.getElementById("gototop").className = "";
        
        } else {

            document.getElementById("gototop").className = "d-none";
        }
    }
}

function topFunction() {
    document.documentElement.scrollTop = 0;
}
