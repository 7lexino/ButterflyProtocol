$(document).ready(function(){

    var modal = document.getElementById("ModalId");
    var btn = document.getElementById("community-id");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
    modal.style.display = "block";
    }

    span.onclick = function() {
    modal.style.display = "none";
    }

    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }


    var modal2 = document.getElementById("ModalId2");
    var btn2 = document.getElementById("private-id");
    var span2 = document.getElementsByClassName("close2")[0];


    btn2.onclick = function() {
    modal2.style.display = "block";
    }

    span2.onclick = function() {
    modal2.style.display = "none";
    }

    window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
    }

});