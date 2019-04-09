<?php  
session_start();

$_SESSION['checkbox_yes'];
		$_SESSION['checkbox_no'] ;
      include ("database.php");
	 // $idx = $_GET['idt'];
	  
	  //-----------------------------------
	  @$_SESSION['id'];
	  $se ="select * from yesno where num='".$_SESSION['id']."'";
	  $d= $db->query($se);
	  //$no = mysqli_num_rows($d);
	  $rows = mysqli_fetch_assoc($d);
	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>

*{
margin: 0px;	
}
#tro{
width: 100%;
height:50px;
line-height:50px;
background:#09C;
color:#fff;	
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YES /  NO</title>
</head>

<body>
<div>


<form action="" method="post">
  <div align="center">
    <div id="tro"> <p><strong><marquee>TROUBLESHOOTING . . , </marquee></strong></p></div>
    
  <a href="index.php">  Home >>  >>  </a> &nbsp; <br/>
    
    <table width="546" height="199" border="1">
      <tr>
        <td width="105">SOLUTION: </td>
        <td width="413"><p><?php    if ($_SESSION['checkbox_yes']){
			
			
			
			
			  echo $rows['ans']; } elseif ($_SESSION['checkbox_no']) {   echo $rows['q5'];    } ?></p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="66">&nbsp;</td>
        <td><p>
          <input type="submit" name="print" id="print" value="PRINT"   onclick="window.print()"/>
        </p></td>
        </tr>
      
    </table>
    <p>&nbsp;</p>
    <p>All rights reseerved. Developed by Mayowa.</p>
  </div>
  </form>
</div>
</body>
</html>