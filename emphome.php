

<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $conn->prepare("SELECT * FROM tblcategory WHERE category = '$category'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>category</th>
			</tr>
			<tr>
				<td><?php echo $row->category; ?></td>
				
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>