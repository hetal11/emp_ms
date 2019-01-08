<?php
// Include config file
require_once "include/config.php";
 

// Processing form data when form is submitted
if(isset($_POST['Submit'])) {    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
	$emailid=$_POST['emailid'];
	$gender=$_POST['g'];
	$dob=$_POST['dob'];
	$dept_id=$_POST['dd'];
	$address=$_POST['add'];
	$mob=$_POST['mob'];
	
    $photo=$_FILES["file"]["name"];
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO 
		emp(First_name,Last_name, email_id, gender, dob, dept_id, address, mob, photo)
		VALUES('$fname','$lname','$emailid',
		'$gender','$dob','$dept_id','$address','$mob',$photo)'");
		
        
		move_uploaded_file($_FILES["file"]["tmp_name"], "photo/" . $_FILES["file"]["name"]);
        //display success message
        echo "<center><font color='green'>Emp details added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add  Employee </title>
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
                        <h2>Add  Employee</h2>
                    </div>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
						                   
					  <div class="form-group" />
                            <label> First Name</label>
                            <input type="text" name="fname" class="form-control"  required>
                           </div>
						 <div class="form-group" />
                            <label> Last Name</label>
                            <input type="text" name="lname" class="form-control"  required>
                            </div>
                       <div class="form-group" />
                            <label> Email id</label>
                            <input type="email" name="emailid" class="form-control"  required>
                            </div>
							<div class="form-group" />
                            <label>Gender</label>
                            Male<input type="radio" value="m" name="g"/>
							Female<input type="radio" value="f" name="g"/>
                            </div>
							<div class="form-group" />
                            <label> DOB</label>
                            <input type="date" id="start" name="dob">

                            </div>
							<div class="form-group" />
                            <label>Department</label>
                            <select name="dd">		
 
					<option value="" disabled="disabled" selected="selected">	Department</option>
 
					<?php
					$result = mysqli_query($mysqli, "SELECT * FROM department");
						 while($res = mysqli_fetch_array($result)) 
							{
							echo "<option value=" .$res['dept_id']. ">" .$res['dept_name']." </option>";
							}
						?>
		
				</select>	
                            </div>
							
							 <div class="form-group" />
                            <label> Mobile Number</label>
                            <input type="text" name="mob" class="form-control"  required>
                            </div>
							
							 <div class="form-group" />
                            <label> Address</label>
                            <textarea name="add"></textarea>
                            </div>
							
							<div class="form-group" />
                            <label> Photo</label>
                            <input type="file" name="file" id="file" />
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
