$(document).ready(function(){

    //Togle para mostrar y esconder menú principal
    $("#mobile_menu").click(function(){
      if($("#main_menu").css("display") == "none"){
        $("#main_menu").css("display", "block");
      }else{
        $("#main_menu").removeAttr("style");
      }
    });

    //Cerramos el menú al escalar ventana para evitar conflictos
    $(window).resize(() => {
      $("#main_menu").removeAttr("style");
    });

});