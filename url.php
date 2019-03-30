<?
	$urlSite[0] = trim((string)$urlSite[0]);		
		if (strlen($urlSite[0]) > 0) {
			if ($urlSite[0] == 'documentation') {
				/*$redirect = "http://libsensorpy.com/documentation";*/
				$redirect = "http://documentation.libsensorpy.com/";
				header("location:$redirect");
			} elseif (file_exists('pages/'.$urlSite[0].'.php')) {
				include('pages/'.$urlSite[0].'.php');
			} else {
				include("pages/404.php"); 
			}
		} else {
			  include("pages/home.php");
		}
?>	