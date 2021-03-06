<?php 
/*
	=================================================================
	# Wespa Juris 3.0 - Acompanhamento Processual Baseado na Web            
	# Copyright © 2012 Wespa Digital Ltda.
	# Developed by Weslley A. Harakawa (weslley@wcre8tive.com)
	#
	# O código deste software não pode ser vendido ou alterado
	# sem a autoização expressa de Wespa Digital Ltda. 
	# Mantenha os créditos do autor e os códigos de banners.
	#
	# Gratuíto para uso pessoal, não pode ser redistribuído.
	=================================================================
*/ 
include( "lang/" . $_SESSION['lang'] . "/c_common.php" );
include( "lang/" . $_SESSION['lang'] . "/c_helpsection.php" );

$get_perm_vars = $_SESSION['perm_vars'];
$user_perms = split(',', $get_perm_vars);
$client_id = $_SESSION['client_id'];

if ($_SESSION['help_active'] == '0') {
	echo("&nbsp;<br /><div id=\"warning\"><img src=\"images/warning.gif\" align=\"left\"> &nbsp; $COMMON_NOTACTIVE");
}
else {
	// check if user has Help permissions
	if (in_array("87", $user_perms)) {
		$tid = $_GET['tid'];
		$topic_html = help_topic("$tid");
		echo ($topic_html);
	}
	else {
		echo("&nbsp;<br /><div id=\"warning\"><img src=\"images/warning.gif\" align=\"left\"> &nbsp; $COMMON_NOPERMISSION</div>");
	}
} 
?>