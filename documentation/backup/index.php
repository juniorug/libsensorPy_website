<?
# Cabeçalho
include("header.php");	
//print_r($urlSite);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? // Fonts ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<? // CSS ?>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<? // Java Script ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- Google Custom Search. -->
<script>
  (function() {
    var cx = '000549393153229706384:knuvtx4qlio';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>
  
<? // Title ?>
<title>CA Sickle Cell</title>
</head>
<body>
  <div id="page_wrapper">
    <div id="page_main_header">
   	  <h1><a href="/">California Sickle Cell Resources</a></h1>
	  
      <div class="link_search">
          <a class="chrco_link" href="http://www.childrenshospitaloakland.org/" target="_blank">Children's Hospital &amp; Research Center Oakland</a>  
      </div>
      <div class="clear"></div>	
    </div>
    
    <div class="clear"></div>
    
    <div id="page_main_body">
    	<div id="main_menu">
        	<ul>
                <li><a class="home <? if($urlSite['0'] == '' || $urlSite['0'] == 'home') echo 'menu_on'; ?>" href="/home">Home</a></li>
                <li><a class="about_us <? if($urlSite['0'] == 'about-us') echo 'menu_on'; ?>" href="/about-us">About us</a></li>
                <li><a class="centers <? if($urlSite['0'] == 'centers') echo 'menu_on'; ?>" href="/centers">Centers</a></li>
                <li><a class="whatisscd <? if($urlSite['0'] == 'what-is-scd') echo 'whatisscd_menu_on'; ?>" href="/what-is-scd">What is SCD?</a></li>
                <li><a class="programs <? if($urlSite['0'] == 'programs') echo 'menu_on'; ?>" href="/programs">Programs</a></li>
                <li><a class="resources <? if($urlSite['0'] == 'resources') echo 'menu_on'; ?>" href="/resources">Resources</a></li>	
                <li><a class="events <? if($urlSite['0'] == 'events') echo 'menu_on'; ?>" href="/events">Events</a></li>	
                <li><a class="contact <? if($urlSite['0'] == 'contact') echo 'menu_on'; ?>" href="/contact">Contact</a></li>	
                <li><a class="donate <? if($urlSite['0'] == 'donate') echo 'menu_on'; ?>" href="/donate">donate</a></li>	
                <li><a class="facebook" href="#">facebook</a></li>	
            </ul>							
        </div>        
        <div class="clear"></div>        
    	<div id="main_wrapper_top"></div>        
        <!-- Content -->
        <div id="main_wrapper_body">        	   
        	<div class="main_content">               
				<?
                    include('secoes.php');
                ?>                             				                      	      
            </div>

            <div class="clear"></div>
            <div id="main_footer">
                <ul>                                
                    <li><a class="home <? if($urlSite['0'] == '' || $urlSite['0'] == 'home') echo 'menu_on'; ?>" href="/home">Home</a></li>
                    <li><a class="about_us <? if($urlSite['0'] == 'about-us') echo 'menu_on'; ?>" href="/about-us">About us</a></li>
                    <li><a class="centers <? if($urlSite['0'] == 'centers') echo 'menu_on'; ?>" href="/centers">Centers</a></li>
                    <li><a class="programs <? if($urlSite['0'] == 'programs') echo 'menu_on'; ?>" href="/programs">Programs</a></li>
                    <li><a class="programs <? if($urlSite['0'] == 'resources') echo 'menu_on'; ?>" href="/resources#research">Research</a></li>                                
                    <li><a class="resources <? if($urlSite['0'] == 'resources') echo 'menu_on'; ?>" href="/resources">Resources</a></li>	
                    <li><a class="resources <? if($urlSite['0'] == 'resources') echo 'menu_on'; ?>" href="/resources#library">Library</a></li>                
                    <li><a class="events <? if($urlSite['0'] == 'events') echo 'menu_on'; ?>" href="/events">Events</a></li>                               
                    <li><a class="whatisscd <? if($urlSite['0'] == 'what-is-scd') echo 'menu_on'; ?>" href="/what-is-scd">What is Sickle Cell Disease?</a></li>
                    <li><a class="sctrait <? if($urlSite['0'] == 'what-is-scd') echo 'menu_on'; ?>" href="/what-is-scd#sickle-cell-trait">Sickle Cell Trait</a></li>
                    <li><a class="donate <? if($urlSite['0'] == 'donate') echo 'menu_on'; ?>" href="/donate">Donate</a></li>                                                	
                    <li><a class="facebook <? if($urlSite['0'] == 'facebook') echo 'menu_on'; ?>" href="/facebook">Facebook</a></li>
                    <li><a class="donate <? if($urlSite['0'] == 'contact') echo 'menu_on'; ?>" href="/contact">Contact</a></li>	
                </ul>  
                <div class="clear"></div>
                <div id="disclaimer">
                	<p>The information on this website is for general, educational and informational puroposes only. It is not a substiture for examination, diagnosis, and medical care provided by a licensed and qualified health professional. The Comprehensive Sickle Cell Center at Children's Hospital & Research Center Oakland was started in 1978 to deliver comprehensive care to children and adults with sickle cell disease. The sickle cell center grew quickly and was funded by the National Institutes of Health as one of ten Comprehensive Sickle Cell Centers in the country. The center has been active in research nationally, conducting large multi-center trials in sickle cell disease and internationally, providing our expertise to programs abroad.</p>           
                </div>
				<div id="footer_right">
                    <div id="search_box">
                        <gcse:searchbox-only>
                    </div> 
                    <div id="daterra_signature">
                    	<p style="line-height:25px;float:left;width:200px;height:25px;">Web Design and Development:</p>
                        <a href="http://www.daterraweb.com" target="_blank"><img style="margin-top:10px;float:left;"width="56px" src="img/logo-rodape.png"/></a>
                        <div class="clear"></div>
                        
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="main_wrapper_bottom"></div>	
    </div>
  </div>


</body>
</html>