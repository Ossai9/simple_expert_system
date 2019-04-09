<?php 

include("database.php");

$idx = $_GET['id'];

$d = "delete from knowledgebase where id='$idx'";
$dd=$db->query($d);
if($dd){
	?>
    <script>
	alert("Record Deleted!");
	
	</script> <?php 
	header("location:manage.php");
}
?>