
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concreteevent.temperatureEvent.TemperatureEvent</title>
  <link rel="stylesheet" href="<?=$siteUrl?>/css/default.css" type="text/css" />
  <link rel="stylesheet" href="<?=$siteUrl?>/css/epydoc.css" type="text/css" />
  <link rel="stylesheet" href="<?=$siteUrl?>/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?=$siteUrl?>/css/epydoc-mainframe.css" type="text/css" />
  <script type="text/javascript" src"<?=$siteUrl?>/js/bootstrap.js"></script>
  <script type="text/javascript" src"<?=$siteUrl?>/js/epydoc.js"></script>
</head>

<body bgcolor="white" text="black" link="blue" vlink="#204080"
      alink="#204080">
<!-- ==================== NAVIGATION BAR ==================== -->
<!-- boostrap panel menu-->
<div class="panel panel-success">
	<div class="panel-heading">
		<ul class="nav nav-pills">
  			<li role="presentation" class="active"><a href="libsensorPy-module.php">Home</a></li>
  			<li role="presentation"><a href="module-tree.php">Trees</a></li>
  			<li role="presentation"><a href="identifier-index.php">Indices</a></li>
  			<li role="presentation"><a href="help.php">Help</a></li>
		</ul>
	</div>
</div>

<!--navigation -->
<table width="100%" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td width="100%">
      <span class="breadcrumbs">
        <a href="libsensorPy-module.php">Package&nbsp;libsensorPy</a> ::
        <a href="libsensorPy.concreteevent-module.php">Package&nbsp;concreteevent</a> ::
        <a href="libsensorPy.concreteevent.temperatureEvent-module.php">Module&nbsp;temperatureEvent</a> ::
        Class&nbsp;TemperatureEvent
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
</div>
</div>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class TemperatureEvent</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.concreteevent.temperatureEvent-pysrc.php#TemperatureEvent">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_25" name="uml_class_diagram_for_libsenso_25">
<area shape="rect" id="node58" href="libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#__init__" title="x.__init__(...) initializes x; see help(type(x)) for signature" alt="" coords="73,185,213,204"/>
<area shape="rect" id="node58" href="libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#set_measurement" title="Function used to simulate weather station device and send out new data." alt="" coords="73,204,213,223"/>
<area shape="rect" id="node58" href="libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#getTemperature" title="Returns the current temperature" alt="" coords="73,223,213,241"/>
<area shape="rect" id="node1" href="libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php" title="libsensorPy.concreteevent.temperatureEvent.TemperatureEvent" alt="" coords="61,153,224,247"/>
<area shape="rect" id="node59" href="abc.ABCMeta-class.php" title="Metaclass for defining Abstract Base Classes (ABCs)." alt="" coords="17,31,269,49"/>
<area shape="rect" id="node59" href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#__abstractmethods__" title="libsensorPy.abstractclass.abstractEvent.AbstractEvent.__abstractmethods__" alt="" coords="17,49,269,68"/>
<area shape="rect" id="node59" href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#attach" title="Registers an observer with temperatureSensor if the observer is not already registered." alt="" coords="17,71,269,89"/>
<area shape="rect" id="node59" href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#detach" title="Removes an observer from WeatherData if the observer is currently &#160;subscribed to WeatherData." alt="" coords="17,89,269,108"/>
<area shape="rect" id="node59" href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#notify_observers" title="Notifies subscribed observers of change in WeatherData data." alt="" coords="17,108,269,127"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php" title="classdocs" alt="" coords="5,6,280,133"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_25.gif" alt='' usemap="#uml_class_diagram_for_libsenso_25" ismap="ismap" class="graph-without-title" />
</center>
</center>
<hr />
<!-- ==================== NESTED CLASSES ==================== -->
<a name="section-NestedClasses"></a>
<div class="panel panel-info">
      <div class="panel-heading">
      	<table border="0" cellpadding="0" cellspacing="0" width="100%">
      		<tr valign="top">	
        		<td align="left"><span class="table-header">
        			<h3 class="panel-title" id="panel-title">Nested Classes<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
        		</span></td>
        		<td align="right" valign="top"><span class="options">
        			[<a href="#section-NestedClasses"
         class="privatelink" onclick="toggle_private();">hide private</a>]
        		</span></td>
        	</tr>
    	</table>
      </div>
      <div class="panel-body">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
		  <tr><td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php">abstractclass.abstractEvent.AbstractEvent</a></code></b>:
      <code><a href="abc.ABCMeta-class.php">__metaclass__</a></code>
      </p>
    </td></tr>
		</table>	
      </div>
    </div>
    
    <!---->


<br />
<!-- ==================== INSTANCE METHODS ==================== -->
<a name="section-InstanceMethods"></a>
<div class="panel panel-info">
      <div class="panel-heading">
      	<table border="0" cellpadding="0" cellspacing="0" width="100%">
      		<tr valign="top">	
        		<td align="left"><span class="table-header">
        			<h3 class="panel-title" id="panel-title">Instance Methods<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
        		</span></td>
        		<td align="right" valign="top"><span class="options">
        			[<a href="#section-InstanceMethods"
         class="privatelink" onclick="toggle_private();">hide private</a>]
        		</span></td>
        	</tr>
    	</table>
      </div>
      <div class="panel-body">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
		  <tr><td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">sensor</span>)</span><br />
      x.__init__(...) initializes x; see help(type(x)) for signature</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteevent.temperatureEvent-pysrc.php#TemperatureEvent.__init__">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a name="set_measurement"></a><span class="summary-sig-name">set_measurement</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Function used to simulate weather station device and send out new 
      data.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteevent.temperatureEvent-pysrc.php#TemperatureEvent.set_measurement">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a name="getTemperature"></a><span class="summary-sig-name">getTemperature</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns the current temperature</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteevent.temperatureEvent-pysrc.php#TemperatureEvent.getTemperature">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php">abstractclass.abstractEvent.AbstractEvent</a></code></b>:
      <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#attach">attach</a></code>,
      <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#detach">detach</a></code>,
      <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#notify_observers">notify_observers</a></code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__delattr__</code>,
      <code>__format__</code>,
      <code>__getattribute__</code>,
      <code>__hash__</code>,
      <code>__new__</code>,
      <code>__reduce__</code>,
      <code>__reduce_ex__</code>,
      <code>__repr__</code>,
      <code>__setattr__</code>,
      <code>__sizeof__</code>,
      <code>__str__</code>,
      <code>__subclasshook__</code>
      </p>
    </td></tr>
		</table>	
      </div>
    </div>
    
    <!---->


<br />
<!-- ==================== CLASS VARIABLES ==================== -->
<a name="section-ClassVariables"></a>
<div class="panel panel-info">
      <div class="panel-heading">
      	<table border="0" cellpadding="0" cellspacing="0" width="100%">
      		<tr valign="top">	
        		<td align="left"><span class="table-header">
        			<h3 class="panel-title" id="panel-title">Class Variables<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
        		</span></td>
        		<td align="right" valign="top"><span class="options">
        			[<a href="#section-ClassVariables"
         class="privatelink" onclick="toggle_private();">hide private</a>]
        		</span></td>
        	</tr>
    	</table>
      </div>
      <div class="panel-body">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
		  <tr><td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php">abstractclass.abstractEvent.AbstractEvent</a></code></b>:
      <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#__abstractmethods__">__abstractmethods__</a></code>
      </p>
    <div class="private">    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php">abstractclass.abstractEvent.AbstractEvent</a></code></b> (private):
      <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#_abc_cache" onclick="show_private();">_abc_cache</a></code>,
      <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#_abc_negative_cache" onclick="show_private();">_abc_negative_cache</a></code>,
      <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#_abc_negative_cache_version" onclick="show_private();">_abc_negative_cache_version</a></code>,
      <code><a href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#_abc_registry" onclick="show_private();">_abc_registry</a></code>
      </p></div>
    </td></tr>
		</table>	
      </div>
    </div>
    
    <!---->


<br />
<!-- ==================== PROPERTIES ==================== -->
<a name="section-Properties"></a>
<div class="panel panel-info">
      <div class="panel-heading">
      	<table border="0" cellpadding="0" cellspacing="0" width="100%">
      		<tr valign="top">	
        		<td align="left"><span class="table-header">
        			<h3 class="panel-title" id="panel-title">Properties<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
        		</span></td>
        		<td align="right" valign="top"><span class="options">
        			[<a href="#section-Properties"
         class="privatelink" onclick="toggle_private();">hide private</a>]
        		</span></td>
        	</tr>
    	</table>
      </div>
      <div class="panel-body">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
		  <tr><td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__class__</code>
      </p>
    </td></tr>
		</table>	
      </div>
    </div>
    
    <!---->


<br />
<!-- ==================== METHOD DETAILS ==================== -->
<a name="section-MethodDetails"></a>
<div class="panel panel-info">
      <div class="panel-heading">
      	<table border="0" cellpadding="0" cellspacing="0" width="100%">
      		<tr valign="top">	
        		<td align="left"><span class="table-header">
        			<h3 class="panel-title" id="panel-title">Method Details<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
        		</span></td>
        		<td align="right" valign="top"><span class="options">
        			[<a href="#section-MethodDetails"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]
        		</span></td>
        	</tr>
    	</table>
      </div>
      <div class="panel-body">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
		  <tr><td class="summary">
<a name="__init__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__init__</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">sensor</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concreteevent.temperatureEvent-pysrc.php#TemperatureEvent.__init__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>x.__init__(...) initializes x; see help(type(x)) for signature</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>sensor</code></strong> (TemperatureSensor) - The TemperatureSensor who will rise an event</li>
    </ul></dd>
    <dt>Overrides:
        object.__init__
    </dt>
  </dl>
</td></tr></table>
</div>
</td></tr>
		</table>	
      </div>
    </div>
    
    <!---->
<br />
<!-- ==================== NAVIGATION BAR ==================== -->
<!-- boostrap panel menu-->
<div class="panel panel-success">
	<div class="panel-heading">
		<ul class="nav nav-pills">
  			<li role="presentation" class="active"><a href="libsensorPy-module.php">Home</a></li>
  			<li role="presentation"><a href="module-tree.php">Trees</a></li>
  			<li role="presentation"><a href="identifier-index.php">Indices</a></li>
  			<li role="presentation"><a href="help.php">Help</a></li>
		</ul>
	</div>
</div>

<!--navigation -->
<table border="0" cellpadding="0" cellspacing="0" width="100%%">
  <tr>
    <td align="left" class="footer">
    Generated by Epydoc 3.0.1 on Mon Apr 13 18:16:27 2015
    </td>
    <td align="right" class="footer">
      <a target="mainFrame" href="http://epydoc.sourceforge.net"
        >http://epydoc.sourceforge.net</a>
    </td>
  </tr>
</table>

<script type="text/javascript">
  <!--
  // Private objects are initially displayed (because if
  // javascript is turned off then we want them to be
  // visible); but by default, we want to hide them.  So hide
  // them unless we have a cookie that says to show them.
  checkCookie();
  // -->
</script>
</body>
</html>
