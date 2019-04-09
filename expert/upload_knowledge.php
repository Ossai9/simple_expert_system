<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 

include("database.php");

if(isset($_POST['send'])){
	$upload_questions = $_POST['upload_questions'];
	//$upload_alternative = $_POST['upload_alternative'];
	//$upload_yes = $_POST['upload_yes'];
	//$upload_no = $_POST['upload_no'];
	$no = $_POST['no'];
	//$answer = $_POST['ans'];
	//$img = $_FILES['fileField']['name'];
// $pic = "expert_images/";
// $uploadfile = $pic.$img;
// move_uploaded_file($_FILES['fileField']['tmp_name'],$uploadfile);
  $insert ="insert into knowledgebase values('','".$upload_questions."','alternate',
  'yes','No','Answer','File','No',now())";
  $d = $db->query($insert);
  if($d){
	  ?>
      <script>
	  alert("SUCCESS!");
	  </script> <?php 
  }
	
	
}


?>

<style>

#oo{
	
	margin: 0px;
	width: 100%;
	background:#09C;
	color:#FFF;
}


</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> ...HOME...</title>
</head>

<body>
<div align="center" id="oo">
  <p><strong>Upload Expert System Info</strong></p>
  <p><strong><a href="manage.php">Manage Expert System  </a>  | <a href="index.php"> Home</a></strong></p>
  <p><br/>
  </p>
</div>
 <div> 
   <div align="center">
   <form action="" method="post" enctype="multipart/form-data">
     <table width="490" height="125" border="0">
       <tr>
         <td colspan="2" bgcolor="#006699"><div align="center"><strong>ADMIN MANAEMENT END FOR QUESTIONS AND ANSWERS</strong></div></td>
       </tr>
       <tr>
         <td width="149">Upload Questions</td>
         <td width="331"><input type="text" name="upload_questions" id="upload_questions" style=
       "width: 250px; padding: 5px;  " /></td>
       </tr>
       <tr>
         <td>Enter No</td>
         <td><input type="text" name="no" id="no"  style=
       "width: 250px; padding: 5px;"/></td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td><input type="submit" name="send" id="button" value="Send "  /></td>
       </tr>
     </table>
     </form>
   </div>
 </div>
 
 <div align="center">
 <form action="" method="post">
   <p><strong>ENTER FOR YES / NO</strong></p>
   <table width="276" border="0">
     <tr>
       <td width="68">&nbsp;</td>
       <td width="198">&nbsp;</td>
     </tr>
     <tr>
       <td>Enter No</td>
       <td><input type="text" name="no2" id="no2" /></td>
     </tr>
     <tr>
       <td>1</td>
       <td><input type="text" name="1" id="1"  style=
       "width: 250px; padding: 5px;"/></td>
     </tr>
     <tr>
       <td>2</td>
       <td><input type="text" name="2" id="2"  style=
       "width: 250px; padding: 5px;"/></td>
     </tr>
     <tr>
       <td>3</td>
       <td><input type="text" name="3" id="3"  style=
       "width: 250px; padding: 5px;"/></td>
     </tr>
     <tr>
       <td>4</td>
       <td><input type="text" name="4" id="4"  style=
       "width: 250px; padding: 5px;"/></td>
     </tr>
     <tr>
       <td>First Answer</td>
       <td><input type="text" name="5" id="5"  style=
       "width: 250px; padding: 5px;"/></td>
     </tr>
     <tr>
       <td><p>Main</p>
        <p>Answer</p></td>
       <td><textarea name="ans" id="ans" cols="45" rows="5"></textarea></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td><input type="submit" name="yesno" id="yesno" value="SUBMIT YES / NO" /></td>
     </tr>
   </table>
 </form>
 </div>
</body>
</html>
<?php

if(isset($_POST['yesno'])){
	$no2 =$_POST['no2'];
	$yn1 =$_POST['1'];
	$yn2 =$_POST['2'];
	$yn3 =$_POST['3'];
	$yn4 =$_POST['4'];
	$yn5 =$_POST['5'];
	$ans =$_POST['ans'];
	
	  //--------------------------------------------------------------------------------
	  $insert2 ="insert into yesno values('','".$no2."','".$yn1."','".$yn2."','".$yn3."','".$yn4."',
	  '".$yn5."','".$ans."')";
	  $df = $db->query($insert2);
	  if($df){
		 ?>
         
         <script>
		 alert("THE YES / NO  EXPERT SYSTEM HAS BEEN UPLOADED, THANK YOU.");
		</script> <?php
	  }
	
}


?>