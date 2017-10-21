<?php 
include 'inc/header.php'; 
include 'config.php';
include 'Database.php';
?>
<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$db = new Database();
	$query = "SELECT * FROM tbl_user WHERE id=$id";
	$getdata=$db->select($query)->fetch_assoc();

	if (isset($_POST['update'])) {
	$name = mysqli_real_escape_string($db->link,$_POST['name']);
	$email = mysqli_real_escape_string($db->link,$_POST['email']);
	$skill = mysqli_real_escape_string($db->link,$_POST['skill']);

	$query = "UPDATE tbl_user
			SET 
			name = '$name',
			email = '$email',
			skill = '$skill'
			WHERE id = $id";
	$update = $db->update($query);

}
}
?>

<form action="update.php?id=<?php echo $id; ?>" method="POST">	
<table>
	<tr>
		<td>Name</td>
		<td> <input type="text" name="name" value="<?php echo $getdata['name'] ;?>" required/> </td>
		</td>
	</tr>

	<tr>
		<td>E-mail</td>
		<td> <input type="text" name="email" value="<?php echo $getdata['email'] ;?>"  required/> </td>
		</td>
	</tr>

	<tr>
		<td>Skill</td>
		<td> <input type="text" name="skill" value="<?php echo $getdata['skill'] ;?>"  required/> </td>
		</td>
	</tr>

	<tr>
		<td></td>
		<td>
			<input type="submit" name="update" value="Update" />
			<input type="reset" value="Cancel" />
		</td>
	</tr>

</table>
</form>
<a href="index.php">Back</a>
		
<?php include 'inc/footer.php'; ?>

<?php

?>