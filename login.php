
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
  }
?>

<html>
  <head>
    <style>
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }

      form {
        display: flex;
        flex-direction: column;
        padding: 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
        background-color: #fff;
      }

      form h1 {
        text-align: center;
        margin-bottom: 1rem;
      }

      form input[type="text"],
      form input[type="password"] {
        margin-bottom: 1rem;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
        width: 100%;
      }

      form input[type="submit"] {
        padding: 0.5rem;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        background-color: #4285f4;
        color: #fff;
        cursor: pointer;
        transition: all 0.2s;
      }

      form input[type="submit"]:hover {
        background-color: #357ae8;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="login.php" method="POST">
        <h1>Login to your account</h1>
        <input type="text" name="email" placeholder="Email" >
        <input type="password" name="password" placeholder="Password" >
        <button type="submit" name="logIn">Log in </button>
      </form>

      <a href="signUp.php">Sign up for a new account</a>

    </div>
  </body>
</html>

