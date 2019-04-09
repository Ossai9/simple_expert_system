<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Check Answer</title>
</head>

<body>
<table width="445" border="1">
  <tr>
    <td width="15">&nbsp;</td>
    <td width="297">ANSWER TO THE QUESTION</td>
    <td width="111">PICTURE</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    
    <?php
	include("database.php");
	
	$idx = $_GET['id'];
	$select = "select * from knowledgebase where id ='".$idx."'";
	$dd = $db->query($select);
	$no = mysqli_num_rows($dd);
	$rows = mysqli_fetch_assoc($dd);
	echo $rows['answer'];
	
	
	
	?>
    
    
    
    
    
    </td>
    <td><img src="<?php  echo $rows['file']; ?>" height="200" width="200" /></td>
  </tr>
</table>
</body>
</html>