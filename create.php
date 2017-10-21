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
		
<table class="tblone">
	<tr>
		<td>Name</td>
		<td> <input type="text" name="name" placeholder="Please Enter Name" /> </td>
		</td>
	</tr>

	<tr>
		<td>E-mail</td>
		<td> <input type="text" name="email" placeholder="Please Enter email" /> </td>
		</td>
	</tr>

	<tr>
		<td>Skill</td>
		<td> <input type="text" name="skill" placeholder="Please Enter Skill" /> </td>
		</td>
	</tr>

</table>

<a href="create.php">Create</a>
		









		

<?php include 'inc/footer.php'; ?>