<?php 
if(isset($_POST['signUp'])){
  $validation = [];

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  
  if(empty($email)){
    $validation['email'] = 'Email field is required';
  } else {
      $password =  $_POST['email'];
  }

  if(empty($password)){
    $validation['password'] = 'Password field is required';
  } else {
      $password =  $_POST['password'];
  }

  if(empty($firstName)){
      $validation['firstName'] = 'First name field is required.';
  } else {
      $firstName = $_POST['firstName'];
  }
  
  if(empty($lastName)){
      $validation['lastName'] = 'Last name field is required.';
  } else {
      $lastName = $_POST['lastName'];
  }

  echo "Welcome ". $firstName . " " . $lastName;

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
      form input[type="email"],
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
      <form action="signUp.php" method="POST">
        <h1>Sign Up</h1>
        <input type="text" name="firstName" placeholder="First Name">
        <input type="text" name="lastName" placeholder="Last Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password" >
        <button type="submit" name="signUp">Sign up </button>
      </form>
    </div>
  </body>
</html>

 
