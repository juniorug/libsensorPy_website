<?
	$urlSite[1] = trim((string)$urlSite[1]);
		
		if (strlen($urlSite[1])>0) {
			if (file_exists('pages/resources_'.$urlSite[1].'.php')) 
					include('pages/resources_'.$urlSite[1].'.php');
					else include("pages/404.php"); 
		} 
	else  include("pages/resources_home.php");
?>		