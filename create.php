<?php 
include 'inc/header.php'; 
include 'config.php';
include 'Database.php';
?>
<?php
	$db = new Database();
	$query = "SELECT * FROM tbl_user";
	$select=$db->select($query);

?>

<form action="create.php" method="POST">	
<table>
	<tr>
		<td>Name</td>
		<td> <input type="text" name="name" placeholder="Please Enter Name" required/> </td>
		</td>
	</tr>

	<tr>
		<td>E-mail</td>
		<td> <input type="text" name="email" placeholder="Please Enter email"  required/> </td>
		</td>
	</tr>

	<tr>
		<td>Skill</td>
		<td> <input type="text" name="skill" placeholder="Please Enter Skill"  required/> </td>
		</td>
	</tr>

	<tr>
		<td></td>
		<td>
			<input type="submit" name="submit" value="Submit" />
			<input type="reset" value="Cancel" />
		</td>
	</tr>

</table>
</form>
<a href="index.php">Back</a>
		
<?php include 'inc/footer.php'; ?>

<?php
if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($db->link,$_POST['name']);
	$email = mysqli_real_escape_string($db->link,$_POST['email']);
	$skill = mysqli_real_escape_string($db->link,$_POST['skill']);

	$query = "INSERT INTO tbl_user (name,email,skill) VALUES ('$name','$email','$skill')";
	$create = $db->create($query);

}
?>