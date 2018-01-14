<?php 
    $kn = mysql_connect("localhost", "root", "");
    if(!$kn){
        echo "Connection fail!!";
        exit;
    }
    mysql_select_db("laptop", $kn);
    mysql_query("set names 'utf8'");
?>