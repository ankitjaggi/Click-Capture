<html>
<head>
<title>Index Page</title>
<link rel="stylesheet" href="includes/css/bootstrap.css">
<style>
body
{
	margin: 5px;
}
</style>
</head>
<body>

<h1>Click Capture! Login to continue.</h1>
<form method="POST" action="">
<input type="text" placeholder="Username" name="username">
<br><br>
<input type="password" placeholder="Password" name="password">
<br><br>
<input type="submit" value="Login" name="submit" class="btn btn-large">

</form>
<p>Psst... Login credentials: <br>user user123</p>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$userid=$_POST['username'];
$pass=$_POST['password'];
if($userid=='user' && $pass == 'user123')
{
	session_start();
	$_SESSION['userid']='user';
	header('Location: user_dashboard.php');
}
else
	header('Location: index.php');
}

?>
