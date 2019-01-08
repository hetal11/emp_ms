<?php
// including the database connection file
include_once("include/config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['fname'];
   $lname=$_POST['lname'];
    $email=$_POST['emailid'];    
    
   
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE emp SET First_name='$name',Last_name='$lname',email_id='$email' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: viewemp.php");
  
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM emp WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
       $fname=$res['First_name'];
       	$lname= $res['Last_name'];
          $email_id=  $res['email_id']; 
			
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    <h3>Edit Employee details</h3>
    <form name="form1" method="post" action="empedit.php">
        <table border="0">
            <tr> 
                <td>First Name</td>
                <td><input type="text" name="fname" value="<?php echo $fname;?>"></td>
            </tr>
           <tr> 
                <td> Last Name</td>
                <td><input type="text" name="lname" value="<?php echo $lname;?>"></td>
            </tr>
			 <tr> 
                <td>Email id</td>
                <td><input type="email" name="emailid" value="<?php echo $email_id;?>"></td>
            </tr>
						
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>