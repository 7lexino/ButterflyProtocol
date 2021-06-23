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
      $("#layout_stats").animate({scrollLeft: 0}, 600);
      $(".btnGrp").removeClass("btnActivo");
      $("#btnFind").addClass("btnActivo");
    });

    $("#btnUse").click(() => {
      let width = $("#layout_stats").width();
      $("#layout_stats").animate({scrollLeft: width}, 600);
      $(".btnGrp").removeClass("btnActivo");
      $("#btnUse").addClass("btnActivo");
    });

    $("#btnRegister").click(() => {
      let outerwidth = $("#layout_stats")[0].scrollWidth;
      let width = $("#layout_stats").width();
      let mid = (outerwidth-width)/3;
      $("#layout_stats").animate({scrollLeft: mid});
      $(".btnGrp").removeClass("btnActivo");
      $("#btnRegister").addClass("btnActivo");
    });

});