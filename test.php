
<?php
	include "connection.php";
	session_start();
	$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form action="viewpaper.php" method="post">
			<select name="paper_name">
				<?php
					$sql="SELECT email,paper_name FROM store_paper where email='$id'";
					$result=$conn->query($sql);
					while($row=$result->fetch_assoc()){?>
						<option value="<?php echo $row['paper_name'];?>">
							<?php echo $row['paper_name'];?>
						</option>
					<?php }
				?>
				
			</select>
			<input type="submit" name="submit" value="Submit">
            <input type="hidden" name="id"  value="<?php echo $id ;?>" >
		</form>
	</body>
</html>