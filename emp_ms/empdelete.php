<?PHP
//including the database connection file
include("include/config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM emp WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:viewemp.php");