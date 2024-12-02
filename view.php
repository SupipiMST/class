<?php  
include "config.php"; 
$sql = "SELECT * FROM user"; 
$result = $conn->query($sql); 
?> 
 
<!DOCTYPE html> 
<html> 
<head> 
    <title>View Page</title> 
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
</head> 
<body> 
    <div class="container"> 
        <h2>user</h2> 
<table class="table"> 
    <thead> 
        <tr> 
        <th>National Identity Card Number</th> 
        <th>Full Name</th> 
        <th>Address</th> 
        <th>Contact Number</th> 
        <th>Email</th> 
        <th>Password</th>
        <th>Subjects</th>
        <th>Gender</th>
    </tr> 
    </thead> 
    <tbody>  
 
        <?php 
            if ($result->num_rows > 0) { 
                while ($row = $result->fetch_assoc()) { 
        ?> 
                    <tr> 
                    <td><?php echo $row['NIC']; ?></td> 
                    <td><?php echo $row['text']; ?></td> 
                    <td><?php echo $row['address']; ?></td> 
                    <td><?php echo $row['no']; ?></td> 
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>  
                    <td><?php echo $row['sub']; ?></td> 
                    <td><?php echo $row['gender']; ?></td> 

    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['NIC']; 
?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['NIC']; 
?>">Delete</a></td> 
                    </tr>                        
 
        <?php        
                } 
            } 
        ?>                 
    </tbody> 
</table> 
</div>  
</body> 
</html> 