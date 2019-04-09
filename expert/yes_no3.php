<?php  
session_start();
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
    <p>&nbsp;</p>
   <div id="tro"> <p><strong><marquee>TROUBLESHOOTING . . , </marquee></strong></p></div>
    <table width="546" height="115" border="1">
      <tr>
        <?php
		
		if(isset($_POST['next'])){
			
			
			@$checkbox_yes = $_POST['checkbox_yes'];
	@$checkbox_no = $_POST['checkbox_no'];
	
	 if(!$checkbox_yes and !$checkbox_no){
		?>
        <script>   alert("Please make Selection!") ;</script>
        
        <?php
	 }
	else{
		
		
	
			
			
			
			
			
			header("location:yes_no4.php"); }
			
		}
		
		?>
        
        
        <td width="105">Question : </td>
        <td width="234"><?php echo $rows['q3'];    ?></td>
        <td width="79"><p>Yes
          </p>
          <p>
            <input type="checkbox" name="checkbox_yes" id="checkbox" />
          </p></td>
        <td width="100"><p> No
          </p>
          <p>
            <input type="checkbox" name="checkbox_no" id="checkbox2" />
          </p></td>
        </tr>
      <tr>
        <td>Answer:   </td>
        <td colspan="3"><input type="submit" name="next" id="next" value="Next &gt;&gt;" /></td>
        </tr>
      
    </table>
    <p>&nbsp;</p>
    <p>All rights reseerved. Developed by Mayowa.</p>
  </div>
  </form>
</div>
</body>
</html>