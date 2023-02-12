
<?php
include 'includes/cssjsInit.html';
?>
<?php
include 'includes/head.php';
?>

<?php

if(isset($_POST['addTask'])){
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


<?php
include 'includes/nav.php';
?>
<br>
<br>

<br>




<div style="display: flex; flex-direction: row;">


  <?php
  include 'includes/aside.php';
  ?>

  <div style="width: 75%;">
    <h2>Add Task</h2>
    <form action="index.php" method="POST">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" ><br>

      <label for="due-date">Due Date:</label>
      <input type="date" id="dueDate" name="dueDate"><br>

      <label for="description">Description:</label><br>
      <textarea id="description" name="description" rows="4" cols="50"></textarea><br>

      <button type="submit" name="addTask"> Add task </button>
    </form>

    <h2>All Tasks</h2>
    <ul>
      <li>Task 1</li>
      <li>Task 2</li>
      <li>Task 3</li>
    </ul>
  </div>
</div>



<?php
include 'includes/footer.php';
?>