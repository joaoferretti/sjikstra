<?php

$appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=postgres user=postgres options='--application_name=$appName'";

$conn = pg_connect($connStr);
$result = pg_query($conn, "select * from ");
var_dump(pg_fetch_all($result));

?>