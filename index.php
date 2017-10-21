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
		<th width="35%">Name</th>
		<th width="25%">E-mail</th>
		<th width="15%">Skill</th>
		<th width="25%">Action</th>		
	</tr>
<?php if($select){ 
		while($read = $select->fetch_assoc()){
	?> 
	<tr>
		<td> <?php echo $read['name']; ?> </td>
		<td> <?php echo $read['email']; ?> </td>
		<td> <?php echo $read['skill']; ?> </td>
		<td><a href="update.php?id= <?php echo $read['id']; ?> ">Edit</a></td>
	</tr>
<?php }
	}
	?>
</table>

<a href="create.php">Create</a>
		









		

<?php include 'inc/footer.php'; ?>