<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      //Include Head
      include_once("./views/templates/head.php");
    ?>
    <link rel="stylesheet" href="./views/pages/organization/organization.css">
    <link rel="stylesheet" href="./views/templates/header/header.css">
    <link rel="stylesheet" href="./views/templates/footer/footer.css">

    <title>Butterfly Protocol :: Organization</title>
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
          <img src="./assets/img/organization.svg" alt="Organization" data-aos="fade-right" data-aos-duration="1000">
        </div>
        <div class="s2_content">
          <div>
            <span>Organization</span>
            <h1>Butterfly organization</h1>
            <p>The Butterfly Protocol is intended to be a decentralized autonomous organization (DAO) that focuses on bringing the most robust naming environment to the decentralized internet. <br/><br/> Butterfly was built to allow anyone in the world who has an internet connection to access and create content and applications without fear of censorship. Its leaders guide more than they dictate the future of what Butterfly can be. With a combination of proprietary and open-source tools and platforms, Butterfly allows anyone to participate by sponsoring top-level domains, creating dapps and more.</p>
          </div>
        </div>
        <p>The Butterfly Protocol is intended to be a decentralized autonomous organization (DAO) that focuses on bringing the most robust naming environment to the decentralized internet. <br/><br/> Butterfly was built to allow anyone in the world who has an internet connection to access and create content and applications without fear of censorship. Its leaders guide more than they dictate the future of what Butterfly can be. With a combination of proprietary and open-source tools and platforms, Butterfly allows anyone to participate by sponsoring top-level domains, creating dapps and more.</p>
      </div>
    
      <div class="section_3">
        <div class="s3_voxel">
          <img src="./assets/img/cube_voxel.svg" alt="">
        </div>
        <div class="s3_description">
          <h1>Guided by</h1>
         </div>
        <div class="s3_profiles" data-aos="fade-up" data-aos-duration="1000">
          <div class="card_profile">
            <img src="./assets/img/Dana-Farbo.jpeg" alt="Dana Forbo - Strategy">
            <h3><a href="https://www.linkedin.com/in/dfarbo/" target="_blank"><img src="./assets/img/linkedin_icon.svg" width="20px" alt=""></a> DANA FARBO</h3>
            <p>Strategy</p>
          </div>
  
          <div class="card_profile">
            <img src="./assets/img/Eddie-Quiroz.jpeg" alt="Eddie Quiroz - Decentralized Application Expansion">
            <h3><a href="https://www.linkedin.com/in/eaquiroz/" target="_blank"><img src="./assets/img/linkedin_icon.svg" width="20px" alt=""></a> EDDIE QUIROZ</h3>
            <p>Decentralized Application Expansion</p>
          </div>
  
          <div class="card_profile">
            <img src="./assets/img/Josh-Robinson.jpeg" alt="Josh Robinson - Technology Vision and Architecture">
            <h3><a href="https://www.linkedin.com/in/thejoshrobinson/" target="_blank"><img src="./assets/img/linkedin_icon.svg" width="20px" alt=""></a> JOSH ROBINSON</h3>
            <p>Technology Vision and Architecture</p>
          </div>
  
          <div class="card_profile">
            <img src="./assets/img/Jacobo-Castellanos.jpg" alt="Jacobo Castellanos - Common Interface Design">
            <h3><a href="https://www.linkedin.com/in/jacobo-castellanos-9ba74330/" target="_blank"><img src="./assets/img/linkedin_icon.svg" width="20px" alt=""></a> JACOBO CASTELLANOS</h3>
            <p>Common Interface Design</p>
          </div>
        </div>
        <div class="s3_bigvoxel">
          <img src="./assets/img/cube2_voxel.svg" alt=" ">
        </div>
      </div>

      <div class="section_4">
        <h4>Learn more from the team</h4>
        
        <div class="video_frame">
          <iframe src="https://player.vimeo.com/video/495597907" width="900" height="450" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="img_voxel_right"><img src="./assets/img/cube_voxel.svg" alt=""></div>
        
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
