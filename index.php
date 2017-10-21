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
<?php
if (isset($_GET['msg'])) {
	echo "<span style = 'color:green'>".$_GET['msg']."</span>";
}
?>
		
<table class="tblone">
	<tr>
		<th width="10%">Serial</th>		
		<th width="35%">Name</th>
		<th width="25%">E-mail</th>
		<th width="15%">Skill</th>
		<th width="15%">Action</th>		
	</tr>
<?php if($select){ 
	$i=1;
		while($read = $select->fetch_assoc()){
	?> 
	<tr>
		<td> <?php echo $i++; ?> </td>
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