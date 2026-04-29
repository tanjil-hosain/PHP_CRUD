<?php
$db=mysqli_connect("localhost", "root", "", "crud");

$id = $_GET['id'];

$data = mysqli_query($id,"SELECT * FROM info WHERE id = $id");
$row = mysqli_fetch_assoc($data);

if(isset($_POST['update']))
?>

<form action="" method="post">
    Name: <br>
    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br> <br>
    Number: <br>
    <input type="text" name="number" value="<?php echo $row['number']; ?>"> br <br>
    <input type="submit" name="upadte" value="Update"> 
</form>