<?php
// Include config file
require_once "include/config.php";
 

// Processing form data when form is submitted
if(isset($_POST['Submit'])) {    
    $name = $_POST['name'];
    $short_name = $_POST['short_name'];
    $code = $_POST['code'];
        
    
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO department(dept_name,short_name,code) VALUES('$name','$short_name','$code')");
        
        //display success message
        echo "<center><font color='green'>Department details added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Department</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add Department</h2>
                    </div>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						                   
					  <div class="form-group" />
                            <label> Department Name</label>
                            <input type="text" name="name" class="form-control"  required>
                           
                        </div>
                        <div class="form-group" />
                            <label>Department Short Name</label>
						<input type="text" name="short_name" class="form-control"  required>
                           
                        </div>
						<div class="form-group" />
                            <label>Department code</label>
						<input type="text" name="code" class="form-control"  required>
                           
                        </div>
                       
                        <input type="submit" class="btn btn-primary" value="Submit" name="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
