<?php
include 'includes/head.php';
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
    <form>
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" required><br>

      <label for="due-date">Due Date:</label>
      <input type="date" id="due-date" name="due-date" required><br>

      <label for="description">Description:</label><br>
      <textarea id="description" name="description" rows="4" cols="50"></textarea><br>

      <input type="submit" value="Add Task">
    </form>

    <h2>All Tasks</h2>
    <ul>
      <li>Task 1</li>
      <li>Task 2</li>
      <li>Task 3</li>
    </ul>
  </div>
</div>

<br>
<br>
<br>

<?php
include 'includes/footer.php';
?>