<?php
$stu_id=$_GET['id'];
$mysqli = new mysqli("localhost", "root", "", "crudr");
      $sql="DELETE FROM student WHERE sid={$stu_id}";

       $result = mysqli_query($mysqli,$sql) ;


       header('Location:http://localhost/crud/index.php');
       mysqli_close($conn);
?>