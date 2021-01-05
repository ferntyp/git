<?php

$db_handel = pg_connect("host=localhost dbname=car user=postgres password=postgres ");

if ($db_handel) {

echo 'Connection attempt succeeded.';

} else {

echo 'Connection attempt failed.';

}

echo $_GET["id"];
echo $_GET["status"];

$val = $_GET['id'];
$va = $_GET['status'];

pg_exec("INSERT INTO public.park(id,status) VALUES ($val,$va)");

pg_close($db_handel);

?>

//444444444/