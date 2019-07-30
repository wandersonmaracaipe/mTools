<?php

//define('MAX_DIR', 'C:\\Max');
//define('MAX_INI', 'C:\\Max\\max.ini');

$ini = parse_ini_file("../mTools.ini", true);  
$max_dir = (string) $ini['CONFIG']['MAX_DIR'];
$max_ini = (string) $ini['CONFIG']['MAX_INI'];
$sql_tools_dir = (string) $ini['CONFIG']['SQL_TOOLS_DIR'];

define("MAX_DIR", $max_dir);
define("MAX_INI", $max_ini);
define("SQL_TOOLS", $sql_tools_dir);



// DB/SRV atual
$ini = parse_ini_file(MAX_INI, true);
define('DB_ATUAL', $ini['CON']['Initial catalog']);
define('SRV_ATUAL', $ini['CON']['Data Source']);

//die(MAX_INI);

