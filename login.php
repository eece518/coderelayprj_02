<?php


$p = isset($_POST["p"]) ? $_POST["p"] : $_GET["p"];
$id = isset($_POST["id"]) ? $_POST["id"] : $_GET["id"];
if ($id == "admin" && $p == "admin") {
	echo 'success';
}
?>
