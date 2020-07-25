<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

 
   <?php 
   
       $mysqli = new mysqli("localhost", "root", "", "crudr");
      
       $result = $mysqli->query("SELECT sname,sclass,sid,saddress,sphone FROM student");
       
     ?>    
     <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
                while ($row=mysqli_fetch_assoc($result)) {
                    # code...
                
             ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['sclass']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row["sid"]; ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>

                 
        </tbody>
    </table>

<?php 
mysqli_close($mysqli); 
?>
</div>
</div>
</body>
</html>