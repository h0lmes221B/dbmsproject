<?php
if (!defined('WEB_ROOT')) {
	exit;
}
$self = WEB_ROOT . 'index.php';
$uType = $_SESSION['user_type'];
if($uType == 'admin' || $uType == 'employee' ){
//	$img = WEB_ROOT . 'images/company_info.jpg';
$img = WEB_ROOT . 'images/complains.jpg';
}else {
	$img = WEB_ROOT . 'images/complains.jpg';
}
?>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="<?php echo WEB_ROOT;?>include/admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/menu.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/main.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">   
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">                                
    <link rel="stylesheet" href="css/magnific-popup.css">                            
    <link rel="stylesheet" href="css/templatemo-style.css">    
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/complains.js"></script>
</head>
<body>
<br/><br/>
<table width=100% border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
  <tr>
    <td colspan="2"><div class="page_header" width="900" height="300"></td>
  </tr>
  <tr>
    <td width="30%" valign="top" class="navArea"><p>&nbsp;</p>
 	<?php include("menu.php"); ?>    
	</td>
    <td width="720" valign="top" class="contentArea"><table width="100%" border="0" cellspacing="0" cellpadding="20">
        <tr>
          <td>
<?php
require_once $content;	 
?>
          </td>
        </tr>
      </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
