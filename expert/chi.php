<?php  

$db = new mysqli("localhost","stadecor_boss","Demonstration2007","stadecor_boss");
if(mysqli_connect_error()){
echo "Error";



if(isset($_POST['send'])){
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$datt = $_POST['datt'];
	$timm = $_POST['timm'];

  $insert ="insert into boss values('','".$name."','".$lastname."','".$email."','".$phone."','".$datt."','".$timm."')";
  $d = $db->query($insert);
  if($d){
	  ?>
      <script>
	  alert("SUCCESSFULLY REGISTERED!");
	  </script> <?php 
  }
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Stabrenno International offers 3Days Deep Skill Acquisition And Long term Site Practicals Training program (Port Harcourt) </title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Stabrenno International offers 3Days Deep Skill Acquisition And Long term Site Practicals Training program (Port Harcourt)"
         />
      <script>
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <!-- Calendar -->
      <link rel="stylesheet" href="css/jquery-ui.css" />
      <!-- //Calendar -->
      <link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
      <!-- Time-script-CSS -->
      <link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
   </head>
   <body>
      <h1 class="header-w3ls">
         Stabrenno International offers 3Days Deep Skill Acquisition And Long term Site Practicals Training program (Port Harcourt)<a href="read_more.html"> Read more </a>
      </h1>
      <div class="main-bothside">
         <form action="" method="post">
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <p>Name</p>
                  <input type="text" placeholder="" required="" name="name">
               </div>
               <div class="form-mid-w3ls">
                  <p>Last Name</p>
                  <input type="text" placeholder="" required="" name="lastname">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <p>Email</p>
                  <input type="email"  placeholder="" required="" name="email">
               </div>
               <div class="form-mid-w3ls">
                  <p>Phone</p>
                  <input type="text" placeholder="" required="" name="phone">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <p>Your available Date & Time</p>
                  <input id="datepicker" name="text" type="text" placeholder="" required="" name="datt">
                  <input type="text" id="timepicker" name="Time" class="timepicker form-control hasWickedpicker" placeholder="" required="" name="timm"
                     onkeypress="return false;">
                  <div class="clear"></div>
               </div>
               
            
           
               
            <div class="btnn">
               <input type="submit" value="Submit" name="send">
            </div>
         </form>
      </div>
      <div class="copy">
         <p>&copy;2018 Stadecors. All Rights Reserved </p>
      </div>
      <!-- js -->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!-- //js -->
      <!-- Calendar -->
      <script src="js/jquery-ui.js"></script>
      <script>
         $(function () {
         	$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
         });
      </script>
      <!-- //Calendar -->
      <!-- Time -->
      <script src="js/wickedpicker.js"></script>
      <script>
         $('.timepicker,.timepicker1').wickedpicker({ twentyFour: false });
      </script>
      <!-- //Time -->
   </body>
</html>