<?php
$conn =mysqli_connect('localhost','root','','bca');
if(!$conn){
    echo "Database not connected";
}
$sql ="SELECT *FROM students";
$result =mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <blockquote>
        <h1>Student Record</h1>
        <a href="index.php">Home</a>
        <a href="add.php">Add Student</a>
        <hr>
        <table border="1" width="100%">
            <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <?php foreach($result as $students){?>
    
               <td><?=$students['id']?></td>
                <td><?=$students['name']?></td>
                <td><?=$students['email']?></td>
                <td><?=$students['address']?></td>
                <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
                </td>
                </tr>
                <?php } ?>
            </thead>
        </table>
    </blockquote>
</body>
</html>