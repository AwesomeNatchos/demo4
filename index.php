
<?php
include 'includes/cssjsInit.html';
?>

<?php if(isset($_POST['addTask'])){
  $validation = [];
  $title = $_POST['title'];
  $dueDate = $_POST['dueDate'];
  $description = $_POST['description'];
  $addTask = $_POST['addTask'];

  //Checking if title field is filled
  if(!isset($_POST['title']) || $_POST['title'] === ''){
    $validation['title'] = 'Title is required';
    echo 'Title is required';
  } else {
    $title = $_POST['title'];

    //Checking if due date is filled
    if(!isset($_POST['dueDate']) || $_POST['dueDate'] == ''){
      $validation['dueDate'] = 'Please fill in due date';
      echo 'Please fill in due date';
    } else {
      $dueDate = $_POST['dueDate'];

      //Checking if description is filled
      if(!isset($_POST['description']) || $_POST['description'] === ''){
        $validation['description'] = 'Please fill in the description';
        echo 'Please fill in the description';
      }else {
        $description = $_POST['description'];
        
        //  ALL REQUIRED FIELDS ARE FILLED
        
        echo 'Your new task ' . $title . ' has been registered';
      }
    }
  }
} else {
  echo 'Something went wrong <br>';
  echo 'No post request';
}
?>



<?php include 'includes/head.php';?>

<?php include 'includes/nav.php'; ?>


<!-- <?php
 //include 'includes/aside.php';
  ?> -->

<div class="container h-100">
<div class="row h-100 justify-content-center align-items-center">

  <div class="card" style="width: 25rem;">
    <div class="card-body">
      
      <h2>Add Task</h2>
    <form class="form-example" action="index.php" method="POST">
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" class="form-control username"><br>
        

        <label for="due-date">Due Date:</label>
        <input class="form-control username type="date" id="dueDate" name="dueDate"><br>

        <label for="description">Description:</label><br>
        <textarea id="description" class="form-control username name="description" rows="4" cols="40"></textarea><br>

        <button type="submit" name="addTask" class="btn btn-primary btn-customized"> Add task </button>
      </form>
    </div>
  </div>
  
  <br><br>

  <div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">

  <div class="card" style="width: 25rem;">
    <div class="card-body">
    <h2>All Tasks</h2>
    <ul>
      <li>Task 1</li>
      <li>Task 2</li>
      <li>Task 3</li>
    </ul>
  </div>
  </div>

  </div>
  </div>


</div>
</div>

</body>
<?php include 'includes/footer.php'; ?>
</html>