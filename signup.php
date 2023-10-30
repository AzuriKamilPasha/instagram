<html>
<head>
<title>Register</title>
</head>
<body>
	<center>
		<h1>SIGN UP FORM!</h1>
		<p>Please fill this form to create an account.</p>
<form action="prosessignup.php" method="POST">
  <table id="title">
    <tr>
      <td>First Name:</td>
        <td><input type="text" name="fname" placeholder="Your First Name" /></td>
      </tr>
    <tr>
      <td>Last Name:</td>
        <td><input type="text" name="lname" placeholder="Your Last Name"/></td>
      </tr>
    <tr>
      <td>Email:</td>
        <td><input type="text" name="email" placeholder="Your Email"/></td>
      </tr>
    <tr>
      <td>Username:</td>
        <td><input type="text" name="username" placeholder="Username You Want"/></td>
      </tr>
    <tr>
      <td>Password:</td>
        <td><input type="password" name="password" placeholder="Keep It Secret!"/></td>
      </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Sign Up" /> &nbsp 
        <input type="reset" name="reset" value="Reset" /></td>
    </tr>
  </table>
  Already have an account? <a href="login.php"> Login Here.
</div>
</form>
</center>
</body>
</html>