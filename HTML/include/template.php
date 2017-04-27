<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">   
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">                                
    <link rel="stylesheet" href="css/magnific-popup.css">                            
    <link rel="stylesheet" href="css/templatemo-style.css">  
	<link rel="stylesheet" href="css/mycss.css">  	
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/complains.js"></script>
</head>
<body >
<div class="container-fluid">
	<div>
            <section id="welcome" class="tm-content-box tm-banner margin-b-10">
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Wayne Foundation</h1>                        
                </div>                    
            </section>
	</div>	
	<div class="nav_panel">
                <div class="tm-sidebar">
                    <nav class="tm-main-nav" >
					<?php include("menu.php"); ?>    
					</nav>
				</div>
	</div>
	<div class="content_panel table table-bordered">
		<div class="tm-main-content">
			<div class="tm-content-box tm-content-box-home">                        
				<p><?php require_once $content;?></p>
			</div>
		</div>
	</div>
</div>
<footer class="tm-footer">
                        <p class="text-xs-center">Copyright &copy; 2017 slowB</p>
                    </footer>
</body>
</html>
