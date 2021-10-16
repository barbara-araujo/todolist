<?php

// show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// connect to database
$conn = mysqli_connect("localhost", "barbara_user", "Sm4aEEDol9fp", "barbara_base");

// read
$sql = "SELECT id, name FROM todo";
$result = mysqli_query($conn, $sql);

// criando array bonitinho de resultado na mão (parte difícil)
$todos = [];
while ($r = mysqli_fetch_array($result)) {
  $todos[] = $r["name"];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>To Do List</title>
  </head>
  <body>
    <h1>My To Do List</h1>
    <ul>
      <?php foreach($todos as $todo) { ?>
        <li><?=$todo?></li>
      <?php } ?>
    </ul>
    <form action="actions/add.php" method="post">
      <input name="n">
      <button>add</button>
    </form>
  </body>
</html>