<!DOCTYPE html>
<Html lang="en">
  <Head>
    <META CHARSET="utf-8">
	<title>Direction Value</title>
   </head>
<body>
	<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');/>
<?php
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("myrobot", $con);

$sql="SELECT * FROM basetb";

$result = mysql_query($sql);

// get the post records
$fw = $_POST['forward'];
$bk = $_POST['back'];
$rt = $_POST['right'];
$lt = $_POST['left'];
$stp = $_POST['stop'];

// database insert SQL code
$sql = "INSERT INTO `basetb` (`forward`, `back`, `right`, `left`, `stop`)
VALUES ('$fw', '$bk', '$rt', '$lt', '$stp')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

$sqlread="SELECT * FROM basetb";
$result = mysql_query($sqlread);
print '$fw';
 <tr>
            <td> <?php echo $fw ['forward']; ?> </td><br/>
            <td> <?php echo $bk ['back']; ?> </td><br/>
			<td> <?php echo $rt ['right']; ?> </td><br/>
			<td> <?php echo $lt ['left']; ?> </td><br/>
			<td> <?php echo $stp ['stop']; ?> </td><br/>
           </tr>
?>
	</body>
	</HTML>