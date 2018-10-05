<?php

$conn = new PDO('mysql:host=db;dbname=tdi;charset=utf8', 'tdi', 'tdi');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn = null;

phpinfo();

?>