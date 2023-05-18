<!DOCTYPE html>
<html>
<?php include_once "helpers/hp_head.php"; ?>

<body>
  <?php include_once "components/cp_nav.php"; ?>

  <!-- Content for Contact Page -->
  <section class="contact-section">
    <div class="container">
      <h2>Contact Me</h2>
      <form action="process_form.php" method="POST">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" id="message" rows="5" required></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </section>

  <?php include_once "components/cp_footer.php"; ?>

  <?php include_once "helpers/hp_scripts.php"; ?>
</body>

<style>
  .contact-section {
    padding: 15px 0;
    text-align: center;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="email"],
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  button[type="submit"] {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
</style>

</html>
