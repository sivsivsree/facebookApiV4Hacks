<?php
phpversion();
require_once('init.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Facebook Login</title>
</head>
<body>
 
  <?php if(!isset($_SESSION['facebook'])): ?>
  		<p> <a href="<?php echo $facebook->getLoginUrl(); ?>" > Sign In  with Facebook! </a> </p>
  <?php else :?>
  	   <p> <?php echo $user['first_name']?>, You are now Logged In! </p>
  	   <p><a href="logout.php"> Logout.php </a> </p>
  <?php endif; ?>

</body>
</html>