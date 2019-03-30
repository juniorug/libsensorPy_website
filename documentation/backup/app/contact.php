<? 

	# Cabeçalho
	include("../header.php");	
	//print_r($urlSite);


	// Post -> $var
	foreach ($_POST as $campo => $valor) $$campo = $valor; 


	// Testes
	$erro=false;
	if (strlen($name) < 4) $erro=true;
	if (ValidaEmail($email)==false) $erro=true;
	if (strlen($message) < 4) $erro=true;

	// Se houver erro, SAI
	if ($erro==true) { header('Location: ../contact?ok=0',true); exit; } 


	// Corpo da mensagem a ser enviada
	$corpo_msg = '<html>
<head>
	<style type="text/css"> 
		body { font-family:\'Trebuchet MS\'; font-size:11px; }
	</style>
</head>
<body>
	<h4>:: Contact Form ::</h4>
	Name: '.$name.'<br />
	E-mail: '.$email.'<br />
	Subject: '.$subject.'<br />
	Subject: '.$subject.'<br />
	Subject: '.$subject.'<br />
	Subject: '.$subject.'<br />
	Mensage: <br />
	'.$message;
'</body>
</html>';


	$cabecalho = "FROM:".$_POST["nome"]."<".$_POST["email"].">\ncontent-type: text/html; charset=iso-8859-1\nContent-Transfer-Encoding: quoted-printable\nX-priority: 1\n";
	$nome = "[CASICKLECELL.org] - Contact from ".strtoupper($_POST["nome"]);

	// Enviar (CONF_EMAIL está em /includes/Config.php)
	mail(CONF_EMAIL,$nome,$corpo_msg,$cabecalho);

	
	// Retorna
	header('Location: ../contact?&ok=1',true);
?>