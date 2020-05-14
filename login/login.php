<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
		 if($myusername=='coxinn'){
         header("location: coxinnadmin.php");}
		 if($myusername=='fuwang'){
         header("location: fuwangadmin.php");}
      }
	  else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
			background-image: url("back2.jpg");
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:420px; border: solid 1px #333333; border-radius:10px; background-color:white; " align = "left">
            <div style = "background-color:black; color:#FFFFFF; padding:3px; text-align:center;"><br><h2>Login<br></h2><br></div>
				
            <div style = "margin:50px">
               
               <form action = "" method = "post" style="background-color:white">
					<br><br><br>
                  <label>UserName  :</label><br><br><input type = "text" name = "username" class = "box"/><br /><br /><br>
                  <label>Password  :</label><br><br><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br /><br><br>
				  <a href="http://localhost/project 3100/homepage.php"><h4>Back to HomePage</h4></a>
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>