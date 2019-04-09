<?php 
include("database.php");
$select ="select * from knowledgebase";
$d = $db->query($select);
$no = mysqli_num_rows($d);
//$rows = mysqli_fetch_assoc($d);
//$question= $rows['question'];

//$alternative= $rows['alternative'];
//$yes = $rows['yes'];
//$no = $rows['no'];


//----------------------------------------------------------------   

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
#banner{
	width: 100%;
	height:50px;
	line-height:50px;
	background-color:#369;
	color:#FFF;
	font-size:24px;
	
}
*{
margin: 0px;	
}
#dd{
	width: 100%;
	height: 50px;
	line-height:50px;
	background-color:#09C;
	
	
}
#f{
	width: 60%;
	height: 200px;
	/*border: 1px solid #333;*/
	margin: 0 auto;
	
}
#dd a{
color: #white;
text-decoration: none;	
}

.r {
	color: #FFF;
}
#footer{
	width: 100%;
	height:50px;
	line-height: 50px;
	margin: 0 auto;
	color:#FFF;
	background:#069;
	
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>...::Home::...</title>
</head>

<body>
<div><div id="banner"><strong>PRINTER TROUBLESHOOTING SYSTEM  </strong></div></p>
  <div id="dd"><p><a href="admin.php">Expert System </a>  | <a href="admin.php"> Questions and Answers  </a> </div> 
    
  </p>
<div id="f">  <p align="center"><img src="images/printer_troubleshooting.jpeg" width="516" height="216" alt="rr" /></p> 
  </div>
  <p>&nbsp;</p>
  <div align="center">
    <table width="749" border="1">
      <tr class="r">
        <td width="57" bgcolor="#0066FF">S/N</td>
        <td width="457" bgcolor="#0066FF">QUESTIONS</td>
        <td width="213" bgcolor="#0066FF"><strong>KNOWLEDGE-BASE</strong></td>
      </tr>
      <tr>
      <?php  
		
		for($i=1; $i<=$no; $i++){
			$rows = mysqli_fetch_assoc($d); ?>
        <td>
			
			<?php
		
		echo $i;
		
		
		?></td>
        <td><?php echo  $rows['question']; ?></td>
        <td><a href="check_answer.php?id=<?php echo $rows['id']; ?>"><!--click to check see answer --></a> | <a href="yes_no.php?idt=<?php echo $rows['nom']; ?>">Troubleshoot with Yes / No</a></td>
      </tr>
      <?php  } ?>
    </table>
  </div>
  <p><?php 
  
  
  
  
  
  
  
  
  ?></p>
</div>


<div >


</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div id="footer"><p align="center"> 2018 All Rights Reserved.  </p> </div>

</body>
</html>