function myFunction2() {
    document.getElementById("masked").style.display = "none";
}

function myFunction() {  
    document.getElementById("masked").style.display = "block";
}

window.onscroll = function() {displayNone()};

function displayNone() {
    if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
        document.getElementById("gotobot").className = "displaynone";
    } else {
        document.getElementById("gotobot").className = "";
    }
}