<?php

	@session_start();
	@ob_start();

	# Encoding
	header('Content-type: text/html; charset=iso-8859-1'); 
	header('Content-Encoding: iso-8859-1'); 

	# Timezone
	date_default_timezone_set("");

	# Banco de Dados
	define(BD_SERVIDOR, 'casicklecell.db.7767961.hostedresource.com');
	define(BD_USUARIO, 	'casicklecell');
	define(BD_SENHA, 	'terrA510.');
	define(BD_BANCO, 	'casicklecell');

	# Ininciando Banco de Dados
	global $mysql;
	$mysql = new Banco(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

	# Constantes
	define(SITE_ID, 	1);
	define(DOMINIO, 	'');
	define(BASE, 		'/');
	define(BASE_PATH, 	'/');
	define(ADMIN_URL, 	'/admin/');
	define(ADMIN_PATH, 	BASE_PATH.'/admin/');
	define(SITE_NOME, 	'Casickle Cell Cal');
	define(SITE_EMAIL, 	'you@daterraweb.com');
	define(LINGUA,		'pt');
	define(VERSAO,		'1.0');
	define(SITEKEY,		'b7fc873b1dbb5e75bfdae875f1e600bbb63cef72');
	define(CONF_EMAIL, 'you@daterraweb.com', true);
	# Senha
	function senha($s) {
		return md5( md5($s) . SITEKEY );
	}
?>