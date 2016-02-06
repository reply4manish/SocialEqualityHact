<?php

$dbconn3 = pg_connect("host=localhost dbname=hack user=s_hack password=s_hack");
$result = pg_query($dbconn3, "SELECT *  FROM survey_data");

$val = pg_fetch_all($result); 
print_r($val);
$dbconn3->close();


?>
