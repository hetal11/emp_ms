<?php
//including the database connection file
include_once("include/config.php");
 

$result = mysqli_query($mysqli, "SELECT * FROM emp ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Employee</title>
</head>
 
<body>
    <a href="addemp.php">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Name</td>
            <td>Last Name</td>
 empedit           <td>Email</td>
			<td>Gender</td>
            <td>Update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['First_name']."</td>";
            echo "<td>".$res['Last_name']."</td>";
            echo "<td>".$res['email_id']."</td>"; 
			 echo "<td>".$res['gender']."</td>";
            echo "<td><a href=\".php?id=$res[id]\">Edit</a> | <a href=\"empdelete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>