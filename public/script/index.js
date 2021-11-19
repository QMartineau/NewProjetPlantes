function myFunction2() {
    document.getElementById("masked").style.display = "none";
}

function myFunction() {  
    document.getElementById("masked").style.display = "block";
}

window.onscroll = function() {displayNone(), scrollFunction()};

function displayNone() {
    if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
        document.getElementById("gotobot").className = "displaynone";
    } else {
        document.getElementById("gotobot").className = "";
    }
}

function scrollFunction() {
    if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
        document.getElementById("gototop").style.display = "block";
    } else {
        document.getElementById("gototop").style.display = "none";
    }
}

function topFunction() {
    document.documentElement.scrollTop = 0;
}