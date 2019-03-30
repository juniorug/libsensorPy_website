<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
$siteUrl = "http://libsensorpy.com/";
# Cabeçalho
include ("header.php");
include ("includes/contador.php");
//print_r($urlSite);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title>Welcome to libsensorPy!</title>

		<link rel="stylesheet" href="<?=$siteUrl?>css/default.css" type="text/css" />
		<link rel="shortcut icon" href="<?=$siteUrl?>img/libsensorPy_icon.ico"type="image/x-icon"/> 
		<link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wYDDQMopAk2fgAAA1ZJREFUOMttU21Mk2cUPc/7Pn0L5aMtBVmBDqU4YbKqIYsmzKBb1B+km2Zuk2WJ+kOybG6TLDFm08SNZC7DxGiIzswlkDk/cI4EFTOYkaIGIYoTJmN2tpRJaW0r5aMf9O373v1AGYs7P2/uOffcnHvZA/cwjFkmZOkzQETS738NFyWVZM2A0131aHzCKjCmWHJzhl60FrZEorETL5eVjDHGFDwBNxiznpLzmts7P3PcHvjwgqMbwfAk2GyPqKiqzZKbY9v0asXe8HSkjojqGWNRfyAAbjJkgojyDp08f6qxtb3S9XAMkoZDl6J9OgSKqiI0OYXvfm4Tu/oG9gMoAVCdokuHSETS2V+uHjh8umWzNxACF0UwxubIKhGK8s2IxuIAgGB4An2DzrI/uq/CkJ7mEAacruLOW/3vP/QH8X9YYNRj34538Vy2Efr0NBj1GXB7ffjq+zP7iSifzyTkna2Obqwpt+HX3jsQBeFfNgEmgx6ry204vm8XZFmBhou42NWD4+cv4qMtb+zm/fddr/tD48g2GLBn+xa0XesB53xOw1pgBgPDyrLSuZpzxAtFJVzq6qnko8HH+VpJwo+Xr+DY5x/jRtPhZ9ZQiTAViYGIoJU0iMTiYABcXl8mTyTkOGNISdVqUVt/DFvt658RGAuE8NJbNZicjgAAJI0GqVoJiqIo3KTP+JOIlhEAzTzr85EiScjQpUKYlw4RwZxj8vPlpYtbM9N0y6LxGVSU25CQZez44hDcXh8YY8hfkI2GPTux1FqIm/1DEIRZEYVUbFxT0S74AqET61aVYzoWx+6t7+DGb/fQ3OHAoMuDew+Gcfl6L6703kHte29iRpYBAAk5ieoNaxWrxXxE/OlkY8QXHNcOujyveMZ8ONdxDVPR6Dy7hCH3CAZdHow+CkJVVLywsAD1u2o+yTbquzhjLElEXyfkZNnBH85VhcKT/zljQRDg/NuL+yOjUFVC6aLn8cHb9oNLFlkajjS1gH/TeBaMsfDj8alNtiVFB75tvvBp2/VeCAKDwIQnMapQVRWb11diu31D7YqlxQ3bAFS9tnL24Ry3+7EwLxeF5lwQ0eKOm31fdt66u9bj9eu4KKKowDxhr1zVuqKkuI4x5qs72oRq+zoUW/LwD7RzbisTWY6lAAAAAElFTkSuQmCC" rel="icon" type="image/x-icon" />
		<link rel="stylesheet" href="<?=$siteUrl?>css/pygments.css" type="text/css" />
		<link rel="stylesheet" href="<?=$siteUrl?>css/bootstrap.css" type="text/css" />
		<!-- <link rel="stylesheet" href="<?=$siteUrl?>/css/epydoc.css" type="text/css" /> -->
		
		<script type="text/javascript">
			var DOCUMENTATION_OPTIONS = {
				URL_ROOT : '',
				VERSION : '0.0.4',
				COLLAPSE_INDEX : false,
				FILE_SUFFIX : '.php',
				HAS_SOURCE : true
			};
		</script>
		<script type="text/javascript" src="<?=$siteUrl?>/js/jquery.js"></script> 
		<script type="text/javascript" src="<?=$siteUrl?>/js/underscore.js"></script>
		<script type="text/javascript" src="<?=$siteUrl?>/js/doctools.js"></script>
		<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
		<script type="text/javascript" src"<?=$siteUrl?>/js/epydoc.js"></script>
		<link rel="top" title="libsensorPy 0.0.4 documentation" href="<?=$siteUrl?>" />
	</head>
	<body>
		<?	#header	
			include ('pages/mainheader.php');
		?>	
		<?	#main content	?>
		<div class="document">
		  <?
              include ('sections.php');
          ?>			
		</div>
		<?		
			#footer	
			include ('pages/mainfooter.php');
		?>
	</body>
</html>
