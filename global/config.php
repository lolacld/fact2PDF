<?php

// Initialisation
include 'global/init.php';

// Début de la tamporisation de sortie
ob_start();

// Si un module est specifié, on regarde s'il existe
if (!empty($_GET['module'])) {

	$module = dirname(__FILE__).'/modules/'.$_GET['module'].'/';
	
	// Si l'action est specifiée, on l'utilise, sinon, on tente une action par défaut
	$action = (!empty($_GET['action'])) ? $_GET['action'].'.php' : 'index.php';
	
	// Si l'action existe, on l'exécute
	if (is_file($module.$action)) {

		include $module.$action;

	} else {

		include 'global/index.php';
	}

// Module non specifié ou invalide ?
} else {
	include 'global/index.php';
}

// Fin de la tamporisation de sortie
$contenu = ob_get_clean();

// code html
include 'global/haut.php';

echo $contenu;

include 'global/bas.php';