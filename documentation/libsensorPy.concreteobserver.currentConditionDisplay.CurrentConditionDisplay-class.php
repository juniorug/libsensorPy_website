
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay</title>
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
        <a href="libsensorPy.concreteobserver-module.php">Package&nbsp;concreteobserver</a> ::
        <a href="libsensorPy.concreteobserver.currentConditionDisplay-module.php">Module&nbsp;currentConditionDisplay</a> ::
        Class&nbsp;CurrentConditionDisplay
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
</div>
</div>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class CurrentConditionDisplay</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.concreteobserver.currentConditionDisplay-pysrc.php#CurrentConditionDisplay">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_37" name="uml_class_diagram_for_libsenso_37">
<area shape="rect" id="node82" href="libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#__init__" title="Constructor" alt="" coords="52,167,244,185"/>
<area shape="rect" id="node82" href="libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#update" title="Update the observer based on one event." alt="" coords="52,185,244,204"/>
<area shape="rect" id="node82" href="libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#display" title="Display the current temperature" alt="" coords="52,204,244,223"/>
<area shape="rect" id="node1" href="libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php" title="Returns the current temperature and humidity." alt="" coords="40,134,256,229"/>
<area shape="rect" id="node83" href="abc.ABCMeta-class.php" title="Metaclass for defining Abstract Base Classes (ABCs)." alt="" coords="17,31,277,49"/>
<area shape="rect" id="node83" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php#__abstractmethods__" title="libsensorPy.abstractclass.eventObserver.EventObserver.__abstractmethods__" alt="" coords="17,49,277,68"/>
<area shape="rect" id="node83" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php#register_event" title="Observer saves reference to Subject." alt="" coords="17,71,277,89"/>
<area shape="rect" id="node83" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php#remove_event" title="Observer replaces Subject reference to None." alt="" coords="17,89,277,108"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php" title="classdocs" alt="" coords="5,6,288,114"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_37.gif" alt='' usemap="#uml_class_diagram_for_libsenso_37" ismap="ismap" class="graph-without-title" />
</center>
</center>
<hr />
<p>Returns the current temperature and humidity.</p>

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
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php">abstractclass.eventObserver.EventObserver</a></code></b>:
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
          <td><span class="summary-sig"><a href="libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">temperatureEvent</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteobserver.currentConditionDisplay-pysrc.php#CurrentConditionDisplay.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#update" class="summary-sig-name">update</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Update the observer based on one event.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteobserver.currentConditionDisplay-pysrc.php#CurrentConditionDisplay.update">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="display"></a><span class="summary-sig-name">display</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Display the current temperature</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteobserver.currentConditionDisplay-pysrc.php#CurrentConditionDisplay.display">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php">abstractclass.eventObserver.EventObserver</a></code></b>:
      <code><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php#register_event">register_event</a></code>,
      <code><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php#remove_event">remove_event</a></code>
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
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php">abstractclass.eventObserver.EventObserver</a></code></b>:
      <code><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php#__abstractmethods__">__abstractmethods__</a></code>
      </p>
    <div class="private">    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php">abstractclass.eventObserver.EventObserver</a></code></b> (private):
      <code><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php#_abc_cache" onclick="show_private();">_abc_cache</a></code>,
      <code><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php#_abc_negative_cache" onclick="show_private();">_abc_negative_cache</a></code>,
      <code><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php#_abc_negative_cache_version" onclick="show_private();">_abc_negative_cache_version</a></code>,
      <code><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php#_abc_registry" onclick="show_private();">_abc_registry</a></code>
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
        <span class="sig-arg">temperatureEvent</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concreteobserver.currentConditionDisplay-pysrc.php#CurrentConditionDisplay.__init__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Constructor</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>temperatureEvent</code></strong> (TemperatureEvent) - The event to be observed</li>
    </ul></dd>
    <dt>Overrides:
        object.__init__
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="update"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">update</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concreteobserver.currentConditionDisplay-pysrc.php#CurrentConditionDisplay.update">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Update the observer based on one event.</p>
  <dl class="fields">
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.php#update">abstractclass.eventObserver.EventObserver.update</a>
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
    Generated by Epydoc 3.0.1 on Mon Apr 13 18:16:28 2015
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
