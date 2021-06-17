$(document).ready(function(){

    //Togle para mostrar y esconder menú principal
    $("#mobile_menu").click(function(){
      if($("#main_menu_mobile").css("display") == "none"){
        $("#main_menu_mobile").css("display", "block");
      }else{
        $("#main_menu").removeAttr("style");
        $("#main_menu_mobile").css("display", "none");
      }
    });

    //Cerramos el menú al escalar ventana para evitar conflictos
    $(window).resize(() => {
      $("#main_menu").removeAttr("style");
      $("#main_menu_mobile").hide();
    });

});