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
include( "includes/client.functions.php" );
include( "includes/client.adv.functions.php" );

if ($_SESSION["mod1_installed"] != '0') {
	include ("modules/basic_invoice/includes/client.inv.functions.php");
}
if ($_SESSION["mod4_installed"] != '0') {
	include ("modules/webhosting/includes/client.whost.functions.php");
}
?>