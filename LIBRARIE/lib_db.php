<?php
function check_mysql()
{ if (mysql_errno() >0)
    { die ("<br>Eroare MySQL " . mysql_errno() . ": ". mysql_error());}
}
$db = mysql_connect ("localhost", "root", "");
if (!$db)
{ die ("Nu s-a deschis conexiunea cu serverul MySQL. "); }
mysql_select_db ("lib_db");
check_mysql();
?>
