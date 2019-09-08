<?php
session_start();

$form_error="";

if (isset($_POST['submit'])) {
	$username = $_POST['user'];
	$password = $_POST['pass'];

	if ($username == 'eka' AND $password == 'mamas') {


		$_SESSION['user'] = $username;

		header('Location:02halaman-home.php');
	}else{
		$form_error = '<p>salah dong</p>';
	}
}
	# code...



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>hasil menangkap data</title>
</head>
<body>
	<form method="post" >

	<div class="layer1">
		<div>
			<h1>Login</h1>
		</div>
		<div class="layer2">
			<input type="text" name="user" placeholder="username">
			
		</div>
		<div class="layer2">
			<input type="password" name="pass" placeholder="password">
		</div>

	
		<?php echo $form_error;
		?>
		<div class="layer2">
			<input type="submit" name="submit" value="Login">
		</div>

	</div>


</form>
</body>

</html>