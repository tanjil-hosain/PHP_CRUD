<?php
$db=mysqli_connect("localhost", "root", "", "crud");
if(isset($_GET['delete'])){
    $delete = $_GET['delete'];
  $sql = "DELETE FROM info WHERE id = '$delete'"  ;
  if(mysqli_query($db, $sql)){
    header("location:view.php");
  }
}
?>