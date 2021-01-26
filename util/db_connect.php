<?php
date_default_timezone_set('Asia/Jakarta');
require_once __DIR__ . '/db_config.php';
 
        // Connecting to mysql database
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE)or die(mysql_error());
?>
