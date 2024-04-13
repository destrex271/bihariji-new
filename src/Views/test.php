<?php
 $serverName="LAPTOP-QJ2NAHNM";
 $database="krishna";
 $uid="";
 $password="";

 $connection=[
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $password,
 ];

 $conn = sqlsrv_connect($serverName, $connection);

 if(!$conn)
    die(print_r(sqlsrv_errors(), true));

$tsql="select * from dbo.m_festivals_list;";
$response = sqlsrv_query($conn, $tsql);

if($response == false)
 echo("Unable to find anything");
 echo('<ul>');
 while($obj = sqlsrv_fetch_array($response, SQLSRV_FETCH_ASSOC)){
    echo('<li>'.$obj["festival_name"].'</li>');
 }
 echo('</ul>');
 sqlsrv_free_stmt($response);
 sqlsrv_close($conn);

echo("connected!");
 
?>