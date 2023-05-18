<!DOCTYPE html>
<html>

  <?php include_once "helpers/hp_head.php"; ?>

  <body>
    <!-- Background image that covers the whole viewport -->
    <div class="bg-image">
  <video class="bg-video" autoplay playsinline muted loop >
    <source src="videos/flower.mp4" type="video/mp4">
  </video>
  <video class="bg-video-large" autoplay playsinline muted loop >
    <source src="videos/flowersand.mp4" type="video/mp4">
  </video>
  <div class="grid"></div>
</div>
    
    
    <!-- Navigation bar -->
    <?php include_once "components/cp_nav.php"; ?>
    

    <!-- Main content -->
    <main class="container">
      <div class="row">
        <div class="col-lg-6">
        <h1>
  <span id="main-text">Texto inicial</span>
  <span id="typing-text">|</span>
</h1>
          <p class="text-black text-center mt-6 text-uppercase">Because future for ai and past for b&w </p>
        </div>
        <div class="col-lg-6">
          <img src="img/myportrait.jpeg" alt="my portrait" class="img-fluid img-portrait d-none">
        </div>
    </main>
    
    <?php include_once "components/cp_footer.php"; ?>

       
<?php include_once "helpers/hp_scripts.php"; ?>

  </body>


  
</html>
