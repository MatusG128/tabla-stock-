<?php
	require_once("../model/modelo.php");
	$menu = new stock();
	$pd = $menu->lista_stock();
	require_once("../view/vista.php");
?>