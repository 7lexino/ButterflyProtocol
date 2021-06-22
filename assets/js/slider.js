$(document).ready(function(){

  // const slider = document.querySelector('.layout_tdl');
  // let isDown = false;
  // let startX;
  // let scrollLeft;

  // slider.addEventListener('mousedown', (e) => {
    
  //   isDown = true;
  //   slider.classList.add('active');
  //   startX = e.pageX - slider.offsetLeft;
  //   scrollLeft = slider.scrollLeft;
  // });

  // slider.addEventListener('mouseleave', () => {
    
  //   isDown = false;
  //   slider.classList.remove('active');
  // });

  // slider.addEventListener('mouseup', () => {
    
  //   isDown = false;
  //   slider.classList.remove('active');
  // });

  // slider.addEventListener('mousemove', (e) => {
  //   if(!isDown) return;
  //   e.preventDefault();
  //   const x = e.pageX - slider.offsetLeft;
  //   const walk = (x - startX) * 1; //scroll-fast
  //   slider.scrollLeft = scrollLeft - walk;
  //   console.log(walk);
  // });





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

});