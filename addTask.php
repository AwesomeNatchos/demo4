<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $validation = [];

  //Adding validation
  if(isset($_POST['title']) || $_POST['title'] === ''){
    $validation['title'] = 'Title is required';
  } else {
    $title = $_POST['title'];
  }
}


if(isset($_POST['addTask'])){
  $dueDate = $_POST['dueDate'];
  $description = $_POST['description'];
  $addTask = $_POST['addTask'];

}
?>