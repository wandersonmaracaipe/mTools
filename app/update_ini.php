<?php	

    include('config.php');

	
    $ini = parse_ini_file(MAX_INI, true);  
    $DataSource = $ini['CON']['Data Source'];
    $InitialCatalog = $ini['CON']['Initial catalog'];   

    $iniFile = MAX_INI;

    $dbName = strtoupper($_POST['dbName']);
    $srvName = gethostbyaddr($_SERVER['REMOTE_ADDR']);

    // gravando o nome do banco de dados 
    $file = file_get_contents($iniFile);    
    $newDbName = str_replace($InitialCatalog, $dbName, $file);   

    $update = fopen($iniFile, "w");   
    fwrite($update, $newDbName);
    fclose($update);


    // gravando o nome do servidor    
	$file = file_get_contents($iniFile);
    $newSrvName = str_replace($DataSource, $srvName, $file);

    $update = fopen($iniFile, "w");
    fwrite($update, $newSrvName);
    fclose($update);
	
	

    header('Location: index.php');

?>