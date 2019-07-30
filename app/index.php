<?php include('config.php'); ?>

<!doctype html>
<!--[if lt IE 8 ]><html lang="en" class="no-js ie ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie"><![endif]-->
<!--[if (gt IE 8)|!(IE)]><!--><html lang="pt-br" class="no-js"><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Intranet</title>
	<meta name="description" content="">
	<meta name="author" content="Wanderson Neris Maracaipe | Caolho Business Solutions">
	
	<!-- Global stylesheets -->
	<link href="css/reset.css?x=0" rel="stylesheet" type="text/css">
	<link href="css/common.css?x=0" rel="stylesheet" type="text/css">
	<link href="css/form.css?x=0" rel="stylesheet" type="text/css">
	<link href="css/standard.css?x=0" rel="stylesheet" type="text/css">
	<link href="css/custom.css?x=0" rel="stylesheet" type="text/css">
	
	<!-- Comment/uncomment one of these files to toggle between fixed and fluid layout -->
	<!--<link href="css/960.gs.css" rel="stylesheet" type="text/css">-->
	<link href="css/960.gs.fluid.css" rel="stylesheet" type="text/css">
	
	<!-- Custom styles -->
	<link href="css/simple-lists.css" rel="stylesheet" type="text/css">
	<link href="css/block-lists.css" rel="stylesheet" type="text/css">
	<link href="css/planning.css" rel="stylesheet" type="text/css">
	<link href="css/table.css" rel="stylesheet" type="text/css">
	<link href="css/calendars.css" rel="stylesheet" type="text/css">
	<link href="css/wizard.css" rel="stylesheet" type="text/css">
	<link href="css/gallery.css" rel="stylesheet" type="text/css">
	
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="icon" type="image/png" href="favicon-large.png">
	
	<!-- Modernizr for support detection, all javascript libs are moved right above </body> for better performance -->
	<script src="js/libs/modernizr.custom.min.js"></script>
	
	<!-- Funções de chamada dos Executaveis -->
	<?php require('functions.php'); ?>
    
		
	
</head>



<body onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onMouseOver="window.status='..message perso .. '; return true;" >
	
	<!-- Header -->	
	<!-- Server status -->
	<header>
		<div class="container_12">		
			<p id="skin-name"><small>
			<?php
				
				print 'DB Atual: <b>'. DB_ATUAL .'</b><br/>';
				print 'SRV: <b>'. SRV_ATUAL .'</b>';
			?>
			</small></p>
		</div>
	</header>
	<!-- End server status -->

	<!-- Logo section -->	
	<!-- Main nav -->
	<nav id="main-nav">		
		<img class="logottt" src="images/logo-maxdata.png" width="80 px" height="55">		
	</nav>
	<!-- End main nav -->
	
	<!-- Status bar -->
	<div id="status-bar">
		<div class="container_12">
			<ul id="status-infos">			
				<li>
					<a href="#"><img src="images/icons/fugue/application-monitor.png" width="16" height="16"  style="margin-top: 5px;"> </a>
					<div id="messages-list" class="result-block">
						<span class="arrow"><span></span></span>					
						<ul class="small-files-list">
							<li>
								<a class="icon-comment" href="javascript:void(0)" onclick="CMD()"><strong>CMD</strong><br>
								<small>System</small></a>
							</li>											
							
						</ul>					
					</div>
				</li>			
			
			</ul>

		</div>
	</div>
	<!-- End status bar -->

<article class="container_6">

	<section class="grid_6" >
		<div class="block">
			<div class="block">						
				<ul class="shortcuts-list">
					<li><a href="javascript:void(0)" onclick="return MAX_MANAGER();">
						<img src="images/menu/manager.png" width="48" height="48">Manager
					</a></li>							
					<li><a href="javascript:void(0)" onclick="return MAX_MANUTE();">
						<img src="images/menu/manute.png" width="48" height="48">Manute
					</a></li>
					<li><a href="javascript:void(0)" onclick="return MAX_SPED_MANUTE();">
						<img src="images/menu/manute.png" width="48" height="48">SpedManute
					</a></li>
					<li><a href="javascript:void(0)" onclick="return MAX_PRINT_MANAGER();">
						<img src="images/menu/PDV.png" width="48" height="48">Print Man.
					</a></li>
					<li><a href="javascript:void(0)" onclick="return MAX_VENDAS_ANDROID_SINCRONIZA();">
						<img src="images/menu/PDV.png" width="48" height="48">Android Sinc.
					</a></li>
					
				</ul>

				<ul class="shortcuts-list">							
					<li><a href="javascript:void(0)" onclick="return MAX_PDV_NFCE();">
						<img src="images/menu/PDV.png" width="48" height="48">PDV NFC-e
					</a></li>
					<li><a href="javascript:void(0)" onclick="return MAX_FOOD();">
						<img src="images/menu/food.png" width="48" height="48">PDV FOOD
					</a></li>
					<li><a href="javascript:void(0)" onclick="return MAX_PDV_POSTO();">
						<img src="images/menu/PDV.png" width="48" height="48">PDV POSTO
					</a></li>
					<li><a href="javascript:void(0)" onclick="return MAX_FARMACIA();">
						<img src="images/menu/PDV.png" width="48" height="48">PDV FARM.
					</a></li>
					<li><a href="javascript:void(0)" onclick="return MAX_PDV_SINCRONIZA();">
						<img src="images/menu/PDV.png" width="48" height="48">PDV Sinc.
					</a></li>
				</ul>

				<ul class="shortcuts-list">							
					
					<li><a href="javascript:void(0)" onclick="return MAX_ATUALIZA();">
						<img src="images/menu/atualiza.png" width="48" height="48">Atualiza
					</a></li>
					<li><a href="javascript:void(0)" onclick="return SQL_MANAGER();">
						<img src="images/menu/mmc.png" width="48" height="48">SQL Man.
					</a></li>

					<li><a href="javascript:void(0)" onclick="return SQL_TOOLS();">
						<img src="images/menu/SQL.png" width="48" height="48">SQL Tools
					</a></li>
					<li><a href="javascript:void(0)" onclick="return LOCAL_MAX();">
						<img src="images/menu/internal-drive.png" width="48" height="48">Max
					</a></li>							
					
				</ul>

				<?php
					$connect = odbc_connect('DB','sa','macro01');
					$sql = "SELECT * FROM sys.databases where database_id > 6";
					$result = odbc_exec($connect , $sql);
				?>
				
				<form method="POST" name="EDIT" action="update_ini.php" class="form">
					<!--<input type="text" name="dbName" placeholder="Initial catalog" required>-->	
									
						<select name="dbName" class="">
								<option select disabled> Selecione o DB </option>
							<?php while (odbc_fetch_row($result) ) { ?>	
								<option value="<?php echo odbc_result($result, 'name');?>"> <?php echo odbc_result($result, 'name');?> </option>
							<?php } odbc_close($connect); ?>					
						</select>	
												
						<input type="text" name="srvName" placeholder="Data Source" value="<?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?>" required>
					<button type="submit" class="small"> Update</button>								
				</form>
				
			</div>	
		</div>
	</section>
</article>
	
		<!--<a href="teste.php">teste</a>-->
	
	<!-- Generic libs -->
	<script src="js/libs/jquery-1.6.3.min.js"></script>
	<script src="js/old-browsers.js"></script>		<!-- remove if you do not need older browsers detection -->
	<script src="js/libs/jquery.hashchange.js"></script>
	
	<!-- Template libs -->
	<script src="js/jquery.accessibleList.js"></script>
	<script src="js/searchField.js"></script>
	<script src="js/common.js"></script>
	<script src="js/standard.js"></script>
	<!--[if lte IE 8]><script src="js/standard.ie.js"></script><![endif]-->
	<script src="js/jquery.tip.js"></script>
	<script src="js/jquery.contextMenu.js"></script>
	<script src="js/jquery.modal.js"></script>
	
	<!-- Custom styles lib -->
	<script src="js/list.js"></script>
	
	<!-- Plugins -->
	<script src="js/libs/jquery.dataTables.min.js"></script>
	<script src="js/libs/jquery.datepick/jquery.datepick.min.js"></script>
	
	<!-- Charts library -->
	<!--Load the AJAX API-->
		
	<script src="http://www.google.com/jsapi"></script>	
	
    
</body>
</html>