<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<html>
<head>
<title>Complain Management System- Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="include/styles.css" rel="stylesheet" type="text/css">
<script >
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</head>
<body>
<div class="container">
  <form class="login-form" method="post" name="frmLogin" id="frmLogin">
    <h1>Login </h1>
	<div  align="center"><?php echo $errorMessage; ?></div>
	<div class="form-group">
      <input name="txtUserName" type="text"/>
      <label class="control-label" for="input">Username</label><i class="bar"></i>
    </div>
	<div class="form-group">
      <input name="txtPassword" type="password" />
      <label class="control-label" for="input">Password</label><i class="bar"></i>
    </div>
    <div class="form-group">
        <select name="utype">
        <option value="admin">&nbsp;&nbsp; Administrator &nbsp;</option>
			  <option value="customer">&nbsp;&nbsp; Customer &nbsp;</option>
			  <option value="employee">&nbsp;&nbsp; Employee &nbsp;</option>
      </select>
      <label class="control-label" for="select">User-Type</label><i class="bar"></i>
    </div>
   
  <div class="button-container">
    <button class="button" "name="btnLogin" type="submit" id="btnLogin"><span>Login</span></button>
  </div>
  <div align="right"><a href="register.php">Not registered?</a></div>
</div>
 </form>
 </div>
</body>
</html>
