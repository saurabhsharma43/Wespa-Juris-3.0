<?php 
/*
	=================================================================
	# Wespa Juris 3.0 - Acompanhamento Processual Baseado na Web            
	# Copyright � 2012 Wespa Digital Ltda.
	# Developed by Weslley A. Harakawa (weslley@wcre8tive.com)
	#
	# O c�digo deste software n�o pode ser vendido ou alterado
	# sem a autoiza��o expressa de Wespa Digital Ltda. 
	# Mantenha os cr�ditos do autor e os c�digos de banners.
	#
	# Gratu�to para uso pessoal, n�o pode ser redistribu�do.
	=================================================================
*/ 
include( "lang/" . $_SESSION['lang'] . "/c_common.php" );
include( "lang/" . $_SESSION['lang'] . "/c_dashboard.php" );
include( "lang/" . $_SESSION['lang'] . "/c_projects.php" );

$client_name = $_SESSION['client_name'];

echo("<h1>$MAIN_WELCOME $client_name,</h1>
<p>$MAIN_MAINTEXT</p>");

$get_perm_vars = $_SESSION['perm_vars'];
$user_perms = split(',', $get_perm_vars);

$client_id = $_SESSION['client_id'];
           
// check if user has Project permissions
if (in_array('73', $user_perms)) {

	$project_html = get_projects($client_id, 1);
	echo ($project_html);
}

// check if user has To Do List permissions
if (in_array('74', $user_perms)) {
							
	$todo_html = todo_list($client_id, 0);
	echo ($todo_html); 
}
?>
