<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php

printForm(); 

#-----------------------------------------------------------------------------
// display the entry form for course search
function printForm(){
	
	echo '<h2 class="text-center">Course Lookup</h2>';
	
	// print user entry form
	echo "<form action='courses.php' class='text-center'>";
	echo "Course Prefix (Department)<br/>";
	echo "<input type='text' placeholder='CS' name='prefix'><br/>";
	echo "Course Number<br/>";
	echo "<input type='text' placeholder='116' name='courseNumber'><br/>";
	echo "Instructor<br/>";
	echo "<input type='text' placeholder='gpcorser' name='instructor'><br/>";
	echo "Day of Week<br/>";
    echo "<select name='day' id='dropdown'>";
    echo "<option value='Monday'>Monday</option>";
    echo "<option value='Tuesday'>Tuesday</option>";
    echo "<option value='Wednesday'>Wednesday</option>";
    echo "<option value='Thursday'>Thursday</option>";
    echo "<option value='Friday'>Friday</option>";
    echo "<option value='ONLINE'>ONLINE</option>";
    echo "</select><br>";
	//echo "Building/Room<br/>";
	//echo "<input type='text' name='building'>";
	//echo "<input type='text' name='room'><br/>";
	echo "<br>";
	echo "<input type='submit' value='Submit' class='btn btn-primary'> <br/>";
	echo "</form>";
	
}
?>
</body>
<script>
	document.getElementById("dropdown").selectedIndex = -1;
</script>
</html>