<!doctype html>
<?php
global $conn;
   

   include("config.php");
	

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
	   //test
      
     //$myusername = mysqli_real_escape_string($GLOBALS['db'],$_POST['username']);
     //$mypassword = mysqli_real_escape_string($GLOBALS['db'],$_POST['password']); 
      
	  $myusername = $_POST['username'];
	  $mypassword = $_POST['password'];
	   
      $sql = "SELECT ID FROM Emp_Login WHERE username = '$myusername' and password = '$mypassword'";
      try{
	   $statement= $conn->prepare($sql);
		 $statement->execute();
		  $result=$statement->fetchAll();
      //$count = mysqli_num_rows($result); 
	  //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
	  }catch (Exception $e) {
		  print_r ($e);
		  
		  die("your mother is a hamster and your your father smells of eldberryies");
	  }
     
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	
	   print_r($result);	
	   try{
      if($result != FALSE ) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid $sql c: 	$count";
      }
	   }catch (Exception $e) {
		  print_r ($e);
		  
		  die("your mother is a hamster and your your father smells of eldberryies");
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
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>