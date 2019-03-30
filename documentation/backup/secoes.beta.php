<?
	$urlSite[0] = trim((string)$urlSite[0]);
		
		if (strlen($urlSite[0])>0) {				
		if (file_exists('pages/'.$urlSite[0].'.php')) 
			include('pages/'.$urlSite[0].'.php');
		else include("pages/404.php"); 
		} 
	else  include("pages/home.php");
?>		