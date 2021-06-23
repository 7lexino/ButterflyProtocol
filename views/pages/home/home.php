<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      //Include Head
      include_once("./views/templates/head.php");
    ?>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./views/pages/home/home.css">
    <link rel="stylesheet" href="./views/templates/header/header.css">
    <link rel="stylesheet" href="./views/templates/footer/footer.css">
    
    <!-- Recursos Ventanas Modales -->
    <link rel="stylesheet" href="./assets/css/modal.css">
    <script src="./assets/js/modal.js"></script>

    <!-- Recursos Slider -->
    <script src="./assets/js/slider.js"></script>

    <title>Butterfly Protocol :: Home</title>
  </head>

  <body>
    <div class="main_container">
      <div class="section_1">
        <?php
          //Include Main Header
          include_once("./views/templates/header/header.php");
        ?>
      
        <article class="s1_c1">
          <h1>The Decentralized Naming System for the New Internet</h1>
          <p>Blockchain Domains, Flexible Naming, True Ownership, Censorship Resistant, Decentralized control</p>
          <div class="group_buttons">
            <button class="btnGrp btnActivo" name="radioButtons1" id="btnFind"><img width="30px" src="./assets/img/find.svg" alt=""> Find</button>
            <button class="btnGrp" name="radioButtons1" id="btnRegister"><img width="35px" src="./assets/img/register.svg" alt=""> Register</button>
            <button class="btnGrp" name="radioButtons1" id="btnUse"><img width="22px" src="./assets/img/use.svg" alt=""> Use</button>
          </div>
        </article>
      
      </div>
     
      <div class="section_2">
        <h4>For Current Top-Level Domains</h4>
        <div id="layout_stats" class="layout_tld" data-aos="fade-left" data-aos-duration="1000">
          <img src="./assets/img/Find-Dashboard-Butterfly.png" alt="">
          <img src="./assets/img/Register-Dashboard-Butterfly.png" alt="">
          <img src="./assets/img/Use-Dashboard-Butterfly.png" alt="">
        </div>
        <a href="https://app.butterflyprotocol.io/#/dashboard">
          <button class="button_launch">Launch app</button>
        </a>
      </div>
    
      <div class="section_3">
        <div class="s3_content">
          <h4>Sponsor Top-Level Domains</h4>

          <div class="group_buttons2">
           <button id="btnCommunity"><img src="./assets/img/community.svg" alt="">For Community</button>
            <button id="btnPrivate"><img src="./assets/img/private.svg" alt="">For Private Use</button>
          </div>

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

          <img class="img_voxel" data-aos="fade-up" data-aos-duration="1000" src="./assets/img/voxels.svg" alt="">
        </div>
      </div>

      <div class="section_4">
        <h4>Butterfly is more than a replacement. It’s an upgrade.</h4>
        <hr>
        
        <div class="container_boxes">
          
          <div>
            <div>
              <img src="./assets/img/icon_1.svg" alt="" srcset="" style="margin-top:10px">
            </div>
            <h6>Censorship Resistance</h6>
            <p>Websites are constantly being blocked by hostile state actors. With Butterfly, your name lives on the blockchain forever and can’t be taken down.</p>
          </div>
  
          <div>
            <div>
              <img src="./assets/img/icon_2.svg" alt="" srcset="" style="margin-top:-7px">
            </div>
            <h6>Decentralized Control</h6>
            <p>Butterfly takes control back from centralized authorities and gives it to the people who own the names.</p>
          </div>
  
          <div>
            <div>
              <img src="./assets/img/icon_3.svg" alt="" srcset="">
            </div>
            <h6>True Ownership</h6>
            <p>You found the perfect name for your site, so why should you pay every year just to keep it? Or get it taken away just because you pissed the wrong people off? With Butterfly, when you own a name, you own it forever.</p>
          </div>
  
          <div>
            <div>
              <img src="./assets/img/icon_4.svg" alt="" srcset="" style="margin-top:-6px">
            </div>
            <h6>Flexible Naming</h6>
            <p>With the existing system, you are limited to simple ASCII characters. With Butterfly, you can use Chinese names like 商业 and even emojis.☺</p>
          </div>
          
          <div>
            <div>
              <img src="./assets/img/icon_5.svg" alt="" srcset="">
            </div>
            <h6>Global Identification</h6>
            <p>One name, many ways to connect. A single name can go to your website, used to send you a secure message, or link to a crypto wallet.</p>
          </div>
  
          <div>
            <div>
              <img width="50px" src="./assets/img/icon_6.svg" alt="" srcset="" style="margin-top:-3px;">
            </div>
            <h6>Profitable</h6>
            <p>Not only can you sell names you own through the built-in auction site, but you can sell sub names too. With Butterfly, making money from online properties is no longer the domain of squatters.</p>
          </div>
  
          <div>
            <div>
              <img src="./assets/img/icon_7.svg" alt="" srcset="" style="margin-top:-9px">
            </div>
            <h6>Future Proof</h6>
            <p>Everything in Butterfly can be upgraded from how the record is stored to where it points.</p>
          </div>
  
          <div>
            <div>
              <img src="./assets/img/icon_8.svg" alt="" srcset="" style="margin-top:-7px; margin-left:-5px">
            </div>
            <h6>Simple</h6>
            <p>Install the simple browser extension and you are ready to access the new internet. There are no servers to install, and no need trying to figure out what the heck a C record is.</p>
          </div>
        </div>
      </div>

      <?php
        //Footer
        include_once("./views/templates/footer/footer.php");
      ?>
    </div>
  </body>
</html>
