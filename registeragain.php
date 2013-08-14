<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Registration Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1123" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutDefaultTable-->
  <tr> 
    <td width="93" height="159">&nbsp;</td>
    <td width="1030">&nbsp;</td>
  </tr>
  <tr>
    <td height="315">&nbsp;</td>
    <td valign="top">
	
	<!--Code taken from my previous semester(ISY23BT Project  registration form )and I just add a code for validation using regular expression from www.phpjabbers.com -->
	<h2>Registration</h2>
	<?php 

	    $name = $_POST['name']; 
		$email = $_POST['email']; 
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$myPass = $_POST['re_password']; 

		
		if(!$name ||!$email || !$username ||!$password ||!$myPass)
		{
		  echo 'All fields are required<br />';
		}
		
		
		if (eregi('^[A-Za-z0-9]{3,20}$',$name))
		{
			echo 'valid name..........<br />';
		}
		else
		{ 
			echo 'Enter name <br />'; 
		}


		
		if (eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$', $email))
		{
			echo 'valid e-mail............<br />';
		}
		else
		{ 
			echo 'Enter valid Email<br />'; 
		}


	
		if (eregi('/^[a-z0-9]{6,10}$/',$username))
		{
			echo 'valid username...........<br />';
		}
		else
		{ 
			echo 'Enter valid Username min 6 Chars, digit.<br />'; 
		}


			
		if (eregi('^[A-Za-z0-9!@#$%^&*()_].{6,20}$',$password))
		{
			echo 'valid password.........<br />';
		}
		else
		{ 
			echo 'Enter valid Password min 6 Chars.<br />'; 
		}

		if ($password != $myPass)
		{
		
		  echo 'Make sure both password match .<br />'; 
		
		}
	
	
    ?> 

	
	
	  <p>&nbsp;</p>
      <p>
	  <form action="registeragain.php " method="post">
    <p>Name:<br /><input type="text" name="name"  /></p>
    <p>Email :<br /><input type="text" name="email"  /></p>
    <p>Username:<br /><input type="text" name="username" /></p>
    <p>Password:<br /><input type="password" name="password" /></p>
    <p>Re-Type Password:<br /><input type="password" name="re_password" /></p>
    <p><input type="submit" name="submit" value="Sign Up" /></p>
</form>

	  
	  
	  
	  
	  
	  &nbsp;</p></td>
  </tr>
</table>
</body>
</html>
