<?php
$db=mysqli_connect("localhost", "root", "", "crud");
if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $number = $_POST['number'];

    $sql = "INSERT INTO info (name, number) VALUES('$name', '$number')";

    if((mysqli_query($db, $sql))){
        header("location:view.php");

    }
}
?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <br>
        <input type="text" name="name">
        Number: 
        <input type="text" name="number">
        <input type="submit" name="insert" value="submit
        ">

    </form>
</body>
</html>