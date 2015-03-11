<?php
$dbserver='localhost';

$dbusername='root';
$dbpassword='';

$conn = mysql_connect($dbserver,$dbusername,$dbpassword) or die ('ada masalah dengan koneksi'.error_warning());
echo "it,s work";

?>