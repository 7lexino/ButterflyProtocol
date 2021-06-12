$(document).ready(function(){

    const slider = document.getElementById("layout_stats")
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
      isDown = false;
    });
    slider.addEventListener('mouseup', () => {
      isDown = false;
    });
    slider.addEventListener('mousemove', (e) => {
      if(!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX);
      slider.scrollLeft = scrollLeft - walk;
    });

    

    $("#btnFind").click(() => {
      let left = $("#layout_stats").width();
      $("#layout_stats").scrollLeft(-left);

    });

    $("#btnUse").click(() => {
      let left = $("#layout_stats").width();
      $("#layout_stats").scrollLeft(left);

    });

    $("#btnRegister").click(() => {
      let left = $("#layout_stats").width();
      $("#layout_stats").scrollLeft(left/5);
    });

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