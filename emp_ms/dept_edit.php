<?php
// including the database connection file
include_once("include/config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $dept_name=$_POST['dept_name'];
   $short_name=$_POST['short_name'];
    $code=$_POST['code'];    
    
   
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE department SET dept_name_name='$name',
		short_name='$short_name',email_id='$code' WHERE dept_id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: view_dept.php");
  
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM department WHERE dept_id=$id");
 
while($res = mysqli_fetch_array($result))
{
       $dept_name=$res['dept_name'];
       	$short_name= $res['short_name'];
          $code=  $res['code']; 
			
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head> 
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    <h3>Edit Department details</h3>
    <form name="form1" method="post" action="dept_edit.php">
        <table border="0">
            <tr> 
                <td>Department  Name</td>
                <td><input type="text" name="dept_name" value="<?php echo $dept_name;?>"></td>
            </tr>
           <tr> 
                <td> Department Short Name </td>
                <td><input type="text" name="short_name" value="<?php echo $short_name;?>"></td>
            </tr>
			 <tr> 
                <td>Code</td>
                <td><input type="text" name="code" value="<?php echo $code;?>"></td>
            </tr>
						
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>