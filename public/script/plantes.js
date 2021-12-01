window.onscroll = function() {displayNone()};

function displayNone() {

    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {

        document.getElementById("gototop").className = "";
        document.getElementById("navbar").className = "displaynone";
        
    } else {

        document.getElementById("gototop").className = "displaynone";
        document.getElementById("navbar").className = "navbar navbar-expand-lg navbar-light position-fixed w-100";
    }
}

function topFunction() {
    document.documentElement.scrollTop = 0;
}