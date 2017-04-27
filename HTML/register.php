<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';


if (isset($_POST['txtUserName'])) {
//	echo $_POST['txtUserName'];
	
	$result = doRegister();
	
	if ($result != '') {
		$errorMessage = $result;
	}
	
}
?>

<html>
<head>
<title>Complain Management System - Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="include/admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/styles.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/main.css" rel="stylesheet" type="text/css">
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>
<body>
<div class="container">
  <form method="post" name="frmUserReg" id="frmUserReg" action="">
    <h1>User Registration</h1>
	<div  align="center"><?php echo $errorMessage; ?></div>
	<div class="form-group">
      <input name="txtUserName" type="text" class="box" id="txtUserName" size="30" maxlength="20"/>
      <label class="control-label" for="input">Username</label><i class="bar"></i>
    </div>
	<div class="form-group">
      <input name="txtPassword" type="password" class="box" id="txtPassword" value="" size="30" maxlength="20" />
      <label class="control-label" for="input">Password</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <select name="utype">
        <option>customer</option>
      </select>
      <label class="control-label" for="select">User-Type</label><i class="bar"></i>
    </div>
    
    <div class="form-group">
      <textarea name="txtAdd" cols="40" rows="4" class="box" id="txtAdd"></textarea>
      <label class="control-label" for="textarea">Address</label><i class="bar"></i>
    </div>
	<div class="form-group">
      <input name="txtMob" type="text" class="box" id="txtMob" value="" size="30" maxlength="20"/>
      <label class="control-label" for="input">Mobile</label><i class="bar"></i>
    </div>
	<div class="form-group">
      <input name="Email" type="text" class="box" id="Email" value="" size="30" maxlength="60"/>
      <label class="control-label" for="input">E-mail</label><i class="bar"></i>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"/><i class="helper"></i>All information is correct and verified.
      </label>
    </div>
  <div class="button-container">
    <button class="button" name="btnLogin" type="submit" id="btnLogin"><span>Register Now</span></button>
  </div>
  <div align="right"><a href="login.php">Back</a></div>
</div>
 </form>
 </div>
</body>
</html>
