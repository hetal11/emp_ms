<?PHP
//including the database connection file
include("include/config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM department WHERE dept_id=$id IN(
          SELECT dept_id FROM emp WHERE dept_id = '$id'
        ); 
");
 
//redirecting to the display page (index.php in our case)
header("Location:view_dept.php");