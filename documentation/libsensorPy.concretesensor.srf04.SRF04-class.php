
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretesensor.srf04.SRF04</title>
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
        <a href="libsensorPy.concretesensor-module.php">Package&nbsp;concretesensor</a> ::
        <a href="libsensorPy.concretesensor.srf04-module.php">Module&nbsp;srf04</a> ::
        Class&nbsp;SRF04
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretesensor.srf04.SRF04-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
</div>
</div>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class SRF04</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.concretesensor.srf04-pysrc.php#SRF04">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_52" name="uml_class_diagram_for_libsenso_52">
<area shape="rect" id="node126" href="libsensorPy.concretesensor.srf04.SRF04-class.php#__init__" title="Constructor" alt="" coords="57,207,263,225"/>
<area shape="rect" id="node126" href="libsensorPy.concretesensor.srf04.SRF04-class.php#setup" title="Setup the board and GPIO" alt="" coords="57,225,263,244"/>
<area shape="rect" id="node126" href="libsensorPy.concretesensor.srf04.SRF04-class.php#changeSetup" title="Returns: &#160;void" alt="" coords="57,244,263,263"/>
<area shape="rect" id="node126" href="libsensorPy.concretesensor.srf04.SRF04-class.php#distance_in_cm" title="Gets the distance from the sensor." alt="" coords="57,263,263,281"/>
<area shape="rect" id="node1" href="libsensorPy.concretesensor.srf04.SRF04-class.php" title="classdocs" alt="" coords="45,174,275,287"/>
<area shape="rect" id="node127" href="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#__metaclass__" title="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__metaclass__" alt="" coords="17,108,303,127"/>
<area shape="rect" id="node127" href="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#distance_in_inches" title="Return the distance in inches." alt="" coords="17,129,303,148"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php" title="classdocs" alt="" coords="5,83,315,154"/>
<area shape="rect" id="node128" href="libsensorPy.abstractclass.sensor.Sensor-class.php#__del__" title="We&#39;re no longer using the GPIO, so tell software we&#39;re done." alt="" coords="76,39,244,57"/>
<area shape="rect" id="node3" href="libsensorPy.abstractclass.sensor.Sensor-class.php" title="classdocs" alt="" coords="64,6,256,63"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_52.gif" alt='' usemap="#uml_class_diagram_for_libsenso_52" ismap="ismap" class="graph-without-title" />
</center>
</center>
<hr />
<p>classdocs</p>

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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.srf04.SRF04-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">trigger</span>=<span class="summary-sig-default">18</span>,
        <span class="summary-sig-arg">echo</span>=<span class="summary-sig-default">27</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.srf04-pysrc.php#SRF04.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.srf04.SRF04-class.php#setup" class="summary-sig-name">setup</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Setup the board and GPIO</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.srf04-pysrc.php#SRF04.setup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.srf04.SRF04-class.php#changeSetup" class="summary-sig-name">changeSetup</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">trigger</span>,
        <span class="summary-sig-arg">echo</span>)</span><br />
      Returns:
      void</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.srf04-pysrc.php#SRF04.changeSetup">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">float</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.srf04.SRF04-class.php#distance_in_cm" class="summary-sig-name">distance_in_cm</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Gets the distance from the sensor.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.srf04-pysrc.php#SRF04.distance_in_cm">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php">abstractclass.ultrasonicSensor.UltrasonicSensor</a></code></b>:
      <code><a href="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#distance_in_inches">distance_in_inches</a></code>
      </p>
    <div class="private">    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php">abstractclass.ultrasonicSensor.UltrasonicSensor</a></code></b> (private):
      <code><a href="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#_bin2dec" onclick="show_private();">_bin2dec</a></code>
      </p></div>
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.sensor.Sensor-class.php">abstractclass.sensor.Sensor</a></code></b>:
      <code><a href="libsensorPy.abstractclass.sensor.Sensor-class.php#__del__">__del__</a></code>
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
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php">abstractclass.ultrasonicSensor.UltrasonicSensor</a></code></b>:
      <code><a href="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#__metaclass__">__metaclass__</a></code>
      </p>
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
        <span class="sig-arg">trigger</span>=<span class="sig-default">18</span>,
        <span class="sig-arg">echo</span>=<span class="sig-default">27</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.srf04-pysrc.php#SRF04.__init__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Constructor</p>
  <dl class="fields">
    <dt>Overrides:
        object.__init__
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="setup"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setup</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.srf04-pysrc.php#SRF04.setup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Setup the board and GPIO</p>
  <dl class="fields">
    <dt>Returns:</dt>
        <dd>void</dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.sensor.Sensor-class.php#setup">abstractclass.sensor.Sensor.setup</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="changeSetup"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">changeSetup</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">trigger</span>,
        <span class="sig-arg">echo</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.srf04-pysrc.php#SRF04.changeSetup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Changes GPIO setup .</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>trigger</code></strong> - The GPIO pin used to trigger the sensor.</li>
        <li><strong class="pname"><code>echo</code></strong> - The GPIO pin used to read data from the sensor.</li>
    </ul></dd>
    <dt>Returns:</dt>
        <dd>void</dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.sensor.Sensor-class.php#changeSetup">abstractclass.sensor.Sensor.changeSetup</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="distance_in_cm"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">distance_in_cm</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.srf04-pysrc.php#SRF04.distance_in_cm">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Gets the distance from the sensor.</p>
  <dl class="fields">
    <dt>Returns: float</dt>
        <dd>The distance in cm.</dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#distance_in_cm">abstractclass.ultrasonicSensor.UltrasonicSensor.distance_in_cm</a>
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
    Generated by Epydoc 3.0.1 on Mon Apr 13 18:16:29 2015
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
