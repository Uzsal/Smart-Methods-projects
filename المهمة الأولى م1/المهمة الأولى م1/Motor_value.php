<!DOCTYPE html>
<Html lang="en">
  <Head>
    <META CHARSET="utf-8">
	<title>Motor Value</title>
   </head>
<body>
	<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','myrobot');

// get the post records
$mot1 = $_POST['Mot1'];
$mot2 = $_POST['Mot2'];
$mot3 = $_POST['Mot3'];
$mot4 = $_POST['Mot4'];
$mot5 = $_POST['Mot5'];
$mot6 = $_POST['Mot6'];

// database insert SQL code
$sql = "INSERT INTO `motortb` (`Mot1`, `Mot2`, `Mot3`, `Mot4`, `Mot5`,`Mot6`) VALUES ('$mot1', '$mot2', '$mot3', '$mot4', '$mot5' , `$mot6`)";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

$s="SELECT * FROM `motortb`";
 <tr>
            <td> <?php echo $mot1 ['Mot1']; ?> </td><br/>
            <td> <?php echo $mot2 ['Mot2']; ?> </td><br/>
			<td> <?php echo $mot3 ['Mot3']; ?> </td><br/>
			<td> <?php echo $mot4 ['Mot4']; ?> </td><br/>
			<td> <?php echo $mot5 ['Mot5']; ?> </td><br/>
			<td> <?php echo $mot6 ['Mot6']; ?> </td><br/>
           </tr>
?>
	</body>
	</HTML>