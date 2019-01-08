<?php
//including the database connection file
include_once("include/config.php");
 

$result = mysqli_query($mysqli, "SELECT * FROM department "); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Department</title>
</head>
 
<body>
<h3>Department</h3>
    <a href="adddepartment.php">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Name</td>
            <td>Short Name</td>
          <td>code</td>
			
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['dept_name']."</td>";
            echo "<td>".$res['short_name']."</td>";
            echo "<td>".$res['code']."</td>"; 
			
            echo "<td><a href=\"dept_edit.php?id=$res[dept_id]\">Edit</a> | <a href=\"dept_delete.php?id=$res[dept_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>