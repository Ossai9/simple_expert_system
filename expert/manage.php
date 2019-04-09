<?php
include("database.php");
$select ="select * from knowledgebase";
$d = $db->query($select);
$no = mysqli_num_rows($d);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MANAGEMENT END...</title>
<style type="text/css">
#oo {	
	margin: 0px;
	width: 100%;
	background:#09C;
	color:#FFF;
}
</style>
</head>

<body>
<div align="center" id="oo">
  <p><strong>Upload Expert System Info</strong></p>
  <p><strong><a href="upload_knowledge.php">Back </a> | <a href="index.php"> Home</a></strong></p>
  <p><br/>
  </p>
</div>
<div align="center">
  <p>&nbsp;</p>
  <table width="454" border="1">
    <tr>
      <td width="54"><div align="center">S/N</div></td>
      <td width="271"><div align="center">Questions</div></td>
      <td width="107"><div align="center"></div></td>
    </tr>
    <tr>
    <?php   
	for($i=1; $i<=$no; $i++){
		$rows = mysqli_fetch_assoc($d);

	
	?>
      <td><div align="center"><?php echo $i; ?></div></td>
      <td><div align="center">
        <?php  echo $rows['question']; ?>
      </div></td>
      <td><div align="center"><a href="delete.php?id=<?php echo $rows['id'] ?>">delete</a></div></td>
    </tr>
    <?php   } ?>
  </table>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>