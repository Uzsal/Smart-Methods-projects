<!DOCTYPE html>
<Html lang="en">
  <Head>
    <META CHARSET="utf-8">
	<title>Arms Value</title>
   </head>
<body>

	<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$arm1 = $_POST['Arm1'];
$arm2 = $_POST['Arm2'];
$arm3 = $_POST['Arm3'];
$arm4 = $_POST['Arm4'];
$arm5 = $_POST['Arm5'];
$arm6 = $_POST['Arm6'];

// database insert SQL code
$sql = "INSERT INTO `armstb` (`Arm1`, `Arm2`, `Arm3`, `Arm4`, `Arm5`,`Arm6`) VALUES ('$arm1', '$arm2', '$arm3', '$arm4', '$arm5' , `$arm6`)";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

 <tr>
            <td> <?php echo $arm1 ['Arm1']; ?> </td><br/>
            <td> <?php echo $arm2 ['Arm2']; ?> </td><br/>
			<td> <?php echo $arm3 ['Arm3']; ?> </td><br/>
			<td> <?php echo $arm4 ['Arm4']; ?> </td><br/>
			<td> <?php echo $arm5 ['Arm5']; ?> </td><br/>
			<td> <?php echo $arm6 ['Arm6']; ?> </td><br/>
           </tr>
?>
	</body>
	</HTML>