<?php
include 'includes/head.php';
?>
<?php
include 'includes/nav.php';
?>


<div class="container">
  <form>
    <h1>Login</h1>
    <input class="form-text" type="email" name="email" placeholder="Enter Your Email " required>
    <input class="form-text" type="password" placeholder="Password" required>
    <input class="submit" type="submit" value="Sign in">
    <p> Don't you have an account? <a href="signUp.php">Sign up </a></p>
  </form>
</div>

<?php
include 'includes/footer.php';
?>