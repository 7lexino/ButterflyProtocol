<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      //Include Head
      include_once("./views/templates/head.php");
    ?>

    <link rel="stylesheet" href="./views/pages/resources/resources.css">
    <link rel="stylesheet" href="./views/templates/header/header.css">
    <link rel="stylesheet" href="./views/templates/footer/footer.css">

    <!-- Recursos Ventanas Modales -->
    <link rel="stylesheet" href="./assets/css/modal.css">
    <script src="./assets/js/modal.js"></script>
    
    <title>Butterfly Protocol :: Resources</title>
  </head>
  <body>
    
    <div class="main_container">
      <div class="section_1">
        <?php
          //Include Main Header
          include_once("./views/templates/header/header.php");
        ?>  
      </div>
    
      <div class="section_2">
        <div class="s2_img">
          <img src="./assets/img/img_redes.svg" alt="Resources" data-aos="fade-right" data-aos-duration="1000">
        </div>
        <div class="s2_content">
          <div>
            <span>Resources</span>
            <h1>Butterfly Protocol</h1>
            <p>We create an environment where anyone can build decentralized apps and resources for using the decentralized web. As development progresses, we aim to keep the community aware of the applications that are being developed.<br><br> To understand more about how Butterfly works and opportunities for contributing and participating, start with the whitepaper and brief overview:</p>
            <div class="btns_group">
              <a target="_blank" href="https://www.butterflyprotocol.io/documents/whitepaper.pdf">
                <button class="btn_whitepaper">Whitepaper</button>
              </a>
              <a target="_blank" href="https://www.butterflyprotocol.io/documents/overview.pdf">
                <button class="btn_overview">Overview document</button>
              </a>
            </div>
          </div>
        </div>
        <p>We create an environment where anyone can build decentralized apps and resources for using the decentralized web. As development progresses, we aim to keep the community aware of the applications that are being developed.<br><br> To understand more about how Butterfly works and opportunities for contributing and participating, start with the whitepaper and brief overview:</p>
      </div>
      
      <div class="s2_video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/WAuvy6tlt80" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    
      <div class="section_3">
        <div class="s3_voxel">
          <img src="./assets/img/cube_voxel.svg" alt="">
        </div>
        
        <div class="s3_container">
          <h4>Enable Domains</h4>
          <button id="btnCommunity" class="btn_faq"><img src="./assets/img/community.svg" alt="">For Community</button>
          
          <!-- Modal -->
          <div id="modalId" class="modal">
              <div class="modal_layout">
                <!-- Modal content -->
                <div class="modal_box">
                  <span class="close_modal"><li class="fas fa-times"></li></span>
                  <div id="modalContent" class="modal_content"></div>
                </div>
              </div>
            </div>
          <!-- -->
          <div class="s3_video">
            <iframe width="1000" height="450" src="https://www.youtube.com/embed/soDY4Pmt7BM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        
        <div class="s3_voxel v_left">
          <img src="./assets/img/cube_voxel.svg" alt="">
        </div>
      </div>

      <div class="section_4">
        <h4>DApps, Wallets, Browser Extensions and More</h4>
        <hr>
        <p>Butterfly is in the process of bring a robust ecosystem of interconnectivity to all things decentralized, blockchain and crypto.</p>
      </div>
    
      <!-- <div class="section_5">
        <div class="s5_c1">
          <h2>Get Involved</h2>
          <p>Subscribe to our mailing list or contact us through any of the following channels</p>
        </div>
        <div class="s5_c2">
          <div class="ctct-inline-form" data-form-id="a822e1e4-8dfe-453b-a057-55c3cc8f9dcf"></div>
        </div>
      </div> -->

      <?php
        //Footer
        include_once("./views/templates/footer/footer.php");
      ?>
    </div>
  </body>
</html>
