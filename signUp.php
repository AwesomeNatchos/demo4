
<?php
include 'includes/head.php';
?>
<?php
include 'includes/nav.php';
?>

<div class="container">
  <form>
    <h1>Sign Up</h1>
    <input class="form-text" type="text" placeholder="First Name" required>
    <input class="form-text" type="text" placeholder="Last Name" required>
    <input class="form-text" type="email" placeholder="Email" required>
    <input class="form-text" type="email" placeholder="Confirm Email" name="confirm_email" required>
    <input class="form-text" type="password" placeholder="Password" required>
    <input class="form-text" type="password" placeholder="Confirm Password" name="confirm_password" required>
    <input class="submit" type="submit" value="Sign Up">
    <p> You already have an account? <a href="login.php"> Login </a></p>
  </form>
</div>
<?php
include 'includes/footer.php';
?>

