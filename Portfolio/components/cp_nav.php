<nav class="navbar navbar-expand-lg navbar-light text-uppercase p-md-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/LogoPreto1.png" alt="Logo" class="img-fluid logotipo logobranco"></a>
    <button class="navbar-toggler z-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active fw-bold' : ''; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'albums.php' || basename($_SERVER['PHP_SELF']) == 'portraits.php' || basename($_SERVER['PHP_SELF']) == 'landscapes.php' || basename($_SERVER['PHP_SELF']) == 'products.php') ? 'active fw-bold' : ''; ?>" href="albums.php">Albums</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active fw-bold' : ''; ?>" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active fw-bold' : ''; ?>" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
