<!DOCTYPE html>
<html>

  <?php include_once "helpers/hp_head.php"; ?>

  <body>
    
  <div class="page-content">
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
    <main class="main-container">
  <div>
    <h1>
      <span id="main-text">Welcome to</span>
      <span id="typing-text"></span>
    </h1>
    <p class="text-black text-uppercase">Merging the past with the present.</p>
  </div>
  <div>
    <img src="img/myportrait.jpeg" alt="my portrait" class="img-fluid img-portrait d-none">
  </div>
</main>
<style>
  .close-btn {
    /* ... outros estilos ... */
    font-size: 32px; /* Aumentar o tamanho da cruz para 32 pixels */
    /* ... outros estilos ... */
  }
</style>




    
    <?php include_once "components/cp_footer.php"; ?>

       
  <?php include_once "helpers/hp_scripts.php"; ?>
</div>
  </body>
</html>
