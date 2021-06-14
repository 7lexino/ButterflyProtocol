<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      //Include Head
      include_once("./views/templates/head.php");
    ?>
    <link rel="stylesheet" href="./views/pages/token/token.css">

    <title>Butterfly Protocol :: Token</title>
  </head>
  <body>

    <div class="container-fluid">
      
    </div>

    <div class="main_container">
      <div class="section_1">
        <?php
          //Include Main Header
          include_once("./views/templates/header.php");
        ?>
      </div>
         
      <div class="section_2">
        <div class="s2_img">
          <img src="./assets/img/img_s1.svg" alt="">
        </div>
        <div class="s2_content">
          <div>
            <span>Token</span>
            <h1>Butterfly Protocol tokens (BFLY) are publicly traded on several exchanges.</h1>
          </div>
        </div>
      </div>

      <div class="section_3">
        <div class="s3_content">
          <h4>Other ways to trade include</h4>
          <div class="group_buttons2">
            <a href="#"><button><img src="./assets/img/community.svg" alt="">1Inch</button></a>
            <a href="#"><button><img src="./assets/img/private.svg" alt="">PancakeSwap</button></a>
          </div>
          <p>View Governance Token Contract on<br>Etherscan <a href="">here.</a></p>
          <img class="img_voxel" data-aos="fade-up" data-aos-duration="1000" src="./assets/img/cube_token.svg" alt="">
        </div>
      </div>

      <div class="section_4">
        <h4>Maximum total supply will drop from the original 100 million when Top-Level Domains are sponsored. As of June 2021, close to 1 million or 1% of total supply has already been burned.</h4>
      </div>

      <div class="section_3 h_auto">
        <div class="s3_content s3_content2">
          <h4>Original Tokenomics</h4>
          <hr>
          <p>The tokenomics around Butterfly are in place to bring hundreds 
            or thousands of new Top-Level Domains (TLD) to the decentralized web. 
            Each TLD is sponsored with either a community focused TLD or a private 
            TLD. The tokenomics around a public TLD is based on a decreasing use 
            of BFLY starting at the original 10,000 being burned to create a new 
            TLD and decreasing over time to the minimum of 100. Private sponsorship 
            requires 100,000 BFLY and then give the sponsor takeover rights for the TLD.
            <br><br>All TLDs are ERC-721 tokens and carry on as the respective TLD Root. However, private 
            TLD sponsors can have the root locked and then take the TLD cross chain. This opens 
            up a significant range of opportunities for sponsors.
            <br><br>See the original tokenomics <a href="">here.</a>
          </p>
        </div>
      </div>

      <?php
        //Footer
        include_once("./views/templates/footer.php");
      ?>

    <!-- Begin Constant Contact Active Forms -->
    <script> var _ctct_m = "a5b89f36f45290075e5533325d23a827"; </script>
    <script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- End Constant Contact Active Forms -->
  </body>
</html>
