<?
	$urlSite[0] = trim((string)$urlSite[0]);
		
		if ((strlen($urlSite[0]) > 0) and  ($urlSite[0] == 'documentation')){
			/*include('pages/documentation/'.$urlSite[0].'.php');*/
			$redirect = "http://juniorug.hol.es";
			header("location:$redirect");
		} else {
			include("site.php");
		}
?>		
