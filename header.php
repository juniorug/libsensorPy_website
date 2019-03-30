<?php

	# Includes
	include('includes/banco.class.php');
	include('includes/config.inc.php');
	include('includes/validacoes.inc.php');
	include('includes/funcoes.inc.php');
	include('includes/arquivos.inc.php');
	include('includes/imagens.inc.php');
	include('includes/email.class.php');
	include('includes/carrinho.class.php');
	include('includes/site.php');
	# analytics
 	include("includes/analyticstracking.php");

	# Carrinho de Compras
	$Carrinho = new Carrinho($mysql);


	# Vari�vel urlSite
	$urlSite = $_SERVER['REQUEST_URI'];
	if (strpos($urlSite,'?')) $urlSite = substr($urlSite,0,strpos($urlSite,'?'));
	$urlSite = substr($urlSite,strlen(BASE),strlen($urlSite));
	$urlSite = explode('/',$urlSite);
	foreach ($urlSite as $a=>$b) $urlSite[$a] = trim(str_replace(" ","",alfanumerico($b,"-.,_")));


	# A��es
	if (!empty($_GET['acao'])) {
		$acao = trim(str_replace(array("/","."),'',alfanumerico($_GET['acao'],'_')));
		if (file_exists('app/'.$acao.".php")) {
			foreach ($_GET as $a => $b) $$a = $b; 
			foreach ($_POST as $a => $b) $$a = $b; 
			include('app/'.$acao.".php"); 
		}
	}




	# --------------------------------------------------------------------------------------------
	# Cabe�alho do Site
	# --------------------------------------------------------------------------------------------
	
	# T�tulos
	switch ($urlSite[0]) { 
		default: $htmlTitulo = ''; break;
	}

	# Keywords
	$htmlKeywords = 'Junior Mascarenhas';

	# Descri��o
	$htmlDescription = 'Junior Mascarenhas';

?>
