$(document).ready(function(){

    var modal = document.getElementById("modalId");
    var modal_layout = document.getElementsByClassName("modal_layout")
    var btnCommunity = document.getElementById("btnCommunity");
    var btnPrivate = document.getElementById("btnPrivate");
    var close = document.getElementsByClassName("close_modal")[0];

    let strCommunity = "Community Sponsorships are where anyone can sponsor a Top-Level Domain for a small amount of BFLY tokens. The original amount of BFLY needed was 10,000 and has been going down 10 BFLY per day until it stops going down at 100 BFLY. Refer to the Overview document to see how this is put into place.";
    let strPrivate = "Private Sponsorship is when 100,000 BFLY tokens are used to do a total takeover of the Top-Level Domain, giving the sponsor full control over using the TLD for their desired use. It can form the basis of a DApp, a token sale or other ways in which management of a TLD has value.";
    
    function CerrarModal(){
        modal.style.display = "none";
    }

    btnCommunity.onclick = function() {
        $("#modalContent").html(strCommunity);
        modal.style.display = "block";
    }

    btnPrivate.onclick = function() {
        $("#modalContent").html(strPrivate);
        modal.style.display = "block";
    }

    close.onclick = function() {
        modal.style.display = "none";
    }


    $(".modal_layout").click(function(){
        CerrarModal();
    });

    $(".modal_box").click(function(e){
        e.stopPropagation();
    });

    $(document).on("keyup", function (e) {
        if (e.keyCode == 27) {
            CerrarModal();
        }
    });

});