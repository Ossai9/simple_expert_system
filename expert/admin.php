<?php
if(isset($_POST['login'])){
	$username= $_POST['username'];
	$password= $_POST['password'];
	  if($username!="Admin" and $password!="Admin"){
		  ?>
          <script>
		  
		  alert("Login details is wrong!");
		  </script>
          <?php 
	  }
	else{
		header("location:upload_knowledge.php");
	}
	
}


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN LOGIN</title>
<style type="text/css">
.r {
	color: #FFF;
}
#ad{
width: 60%;
height: 200px;
border: 2px solid #099;
margin: 0 auto;
	
}

</style>
</head>

<body>
<p>ADMIN LOGIN END.................................. </p>
<div id="ad" align="center">
<form action="" method="post">
  <table width="307" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" bgcolor="#000000" class="r">&lt;&lt;ADMINISTRATIVE CHECK POINT &gt;&gt;&gt;</td>
    </tr>
    <tr>
      <td width="95">Username</td>
      <td width="202"><input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="login" id="login" value="login" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </form>
</div>
<p>&nbsp;</p>
</body>
</html>