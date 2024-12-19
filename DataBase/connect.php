
<?php
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "fut_champions_web_app_squad_builder");

// Create connection
$connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD,DBNAME);

if(!$connection){
    echo "error";
}
?>