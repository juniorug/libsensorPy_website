<?php

   if (!isset($_COOKIE['counte'])) {
       mysql_query("INSERT INTO visitors VALUES(null, NOW(),'".$_SERVER['REMOTE_ADDR']."','".ip2long($_SERVER['REMOTE_ADDR'])."')");
   } 
   setcookie('counte', 1, time()+3700);
   $result = mysql_query('SELECT count(*) as visitors FROM visitors v');
   if (!$result) {
       die('Consulta inválida: ' . mysql_error());
   } else {
       $a = mysql_result($result, 0, 'visitors');
   }
?>
