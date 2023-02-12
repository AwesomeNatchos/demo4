<!-- Include Bootstrap CSS and JavaScript -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">

    <!-- Brand Logo -->
    <a class="navbar-brand" href="#">
      <img src="pictures\todo_icon1.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>

    <!-- Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation Items -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <!-- Sign In and Sign Up -->
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/demo4/login.php">SIGN IN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/demo4/signUp.php">SIGN UP</a>
        </li>
        <!-- Search Form -->
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </ul>
    </div>
  </div>
</nav>