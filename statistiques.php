<?php 
session_start();
require "model/statistiques.php";
$stats = get_statistiques();


require "view/statistiquesView.php";
?>
