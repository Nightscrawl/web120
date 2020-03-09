var call = function(elementId) {

    var a = document.getElementsByClassName("desc-d");
    var b = document.getElementById(elementId);
    
    for (var i = 0; i < a.length; i++) {
        a[i].style.display = "none";
    }

    b.style.display = "block";  

}