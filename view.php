<?php
$db=mysqli_connect("localhost", "root", "", "crud");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border="2">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>number</th>
    </tr>
   </thead>
   <tbody>
    <?php
    $view = $db->query("SELECT * FROM  info");
    while(list($id, $name, $number) = $view->fetch_row()){
    ?>
    <tr>
        <td><?php echo $id;  ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $number; ?></td>
    </tr>
    <?php } ?>
   </tbody>
   </table>
</body>
</html>