
<?php
  if(isset($_POST['logIn'])){
    $validation = [];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    //checking if email field is filled
    if(!isset($_POST['email']) || ($_POST['email'] === '')){
      $validation['email'] = 'email field is required';
      echo 'userName needed';
    } else {
        $email =  $_POST['email'];

      //checking if password field is filled
      if(!isset($_POST['password']) || ($_POST['password']) === ''){
        $validation['password'] = 'Password field is required';
        echo 'Password is required';
      } else {
          $password =  $_POST['password'];
          echo "Welcome in ". $email;
  
        // USER HAS FILLED IN ALL THE FIELDS
        
      }
    }

  } else {
    echo 'something went wrong';
    echo 'No post request sendt';
  }?>

<?php include 'includes/head.php'; ?>

<body>
  
<?php include 'includes/nav.php'; ?>


<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
        <div class="card" style="width: 25rem;">
      <div class="card-body">
            <!-- Form -->
            <form class="form-example" action="login.php" method="post">
                <h1>Log in</h1>
                
                <!-- Input fields -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control username" id="username" placeholder="Username..." name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input name="password" type="password" class="form-control password" id="password" placeholder="Password..." name="password">
                </div>

                <button type="submit" name="logIn" class="btn btn-primary btn-customized">Login</button>
                <a class="link active" href="signUp.php"><button class="btn btn-primary btn-customized"> Sign up</button></a>

                
            </form>
      </div>
        </div>
        </div>
    </div>
</div>


</body>
  <?php include 'includes/footer.php'; ?>
</html>

