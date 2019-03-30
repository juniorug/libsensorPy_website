
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator</title>
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
        <a href="libsensorPy.abstractclass-module.php">Package&nbsp;abstractclass</a> ::
        <a href="libsensorPy.abstractclass.servoMotorActuator-module.php">Module&nbsp;servoMotorActuator</a> ::
        Class&nbsp;ServoMotorActuator
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
</div>
</div>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class ServoMotorActuator</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.abstractclass.servoMotorActuator-pysrc.php#ServoMotorActuator">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_16" name="uml_class_diagram_for_libsenso_16">
<area shape="rect" id="node27" href="libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#__metaclass__" title="libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__metaclass__" alt="" coords="17,223,189,241"/>
<area shape="rect" id="node27" href="libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#__init__" title="Constructor" alt="" coords="17,244,189,263"/>
<area shape="rect" id="node27" href="libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#setDirection" title="Sets the rotation&#39;s direction." alt="" coords="17,263,189,281"/>
<area shape="rect" id="node27" href="libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#setAngle" title="Sets the angle to be rotated" alt="" coords="17,281,189,300"/>
<area shape="rect" id="node1" href="libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php" title="classdocs" alt="" coords="5,198,200,306"/>
<area shape="rect" id="node28" href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setup" title="Setup the GPIO." alt="" coords="19,135,189,153"/>
<area shape="rect" id="node28" href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#rotate" title="Rotate the motor." alt="" coords="19,153,189,172"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php" title="classdocs" alt="" coords="7,102,201,178"/>
<area shape="rect" id="node29" href="libsensorPy.abstractclass.actuator.Actuator-class.php#changeSetup" title="changes GPIO setup ." alt="" coords="48,39,160,57"/>
<area shape="rect" id="node29" href="libsensorPy.abstractclass.actuator.Actuator-class.php#__del__" title="We&#39;re no longer using the GPIO, so tell software we&#39;re done" alt="" coords="48,57,160,76"/>
<area shape="rect" id="node3" href="libsensorPy.abstractclass.actuator.Actuator-class.php" title="classdocs" alt="" coords="36,6,172,82"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_16.gif" alt='' usemap="#uml_class_diagram_for_libsenso_16" ismap="ismap" class="graph-without-title" />
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
          <td><span class="summary-sig"><a href="libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.abstractclass.servoMotorActuator-pysrc.php#ServoMotorActuator.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#setDirection" class="summary-sig-name">setDirection</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">stepDir</span>=<span class="summary-sig-default">2</span>)</span><br />
      Sets the rotation's direction.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.abstractclass.servoMotorActuator-pysrc.php#ServoMotorActuator.setDirection">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#setAngle" class="summary-sig-name">setAngle</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">angle</span>=<span class="summary-sig-default">2.5</span>)</span><br />
      Sets the angle to be rotated</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.abstractclass.servoMotorActuator-pysrc.php#ServoMotorActuator.setAngle">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php">motorActuator.MotorActuator</a></code></b>:
      <code><a href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#rotate">rotate</a></code>,
      <code><a href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setup">setup</a></code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.actuator.Actuator-class.php">actuator.Actuator</a></code></b>:
      <code><a href="libsensorPy.abstractclass.actuator.Actuator-class.php#__del__">__del__</a></code>,
      <code><a href="libsensorPy.abstractclass.actuator.Actuator-class.php#changeSetup">changeSetup</a></code>
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
        <a name="__metaclass__"></a><span class="summary-name">__metaclass__</span> = <code title="abc.ABCMeta">abc.ABCMeta</code>
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
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__init__</span>(<span class="sig-arg">self</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.abstractclass.servoMotorActuator-pysrc.php#ServoMotorActuator.__init__">source&nbsp;code</a></span>&nbsp;
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
<a name="setDirection"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setDirection</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">stepDir</span>=<span class="sig-default">2</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.abstractclass.servoMotorActuator-pysrc.php#ServoMotorActuator.setDirection">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Sets the rotation's direction.</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>stepDir</code></strong> (int8) - The direction</li>
    </ul></dd>
    <dt>Decorators:</dt>
    <dd><ul class="nomargin-top">
        <li><code>@abc.abstractmethod</code></li>
    </ul></dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setDirection">motorActuator.MotorActuator.setDirection</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="setAngle"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setAngle</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">angle</span>=<span class="sig-default">2.5</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.abstractclass.servoMotorActuator-pysrc.php#ServoMotorActuator.setAngle">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Sets the angle to be rotated</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>angle</code></strong> (float) - The angle to be rotated</li>
    </ul></dd>
    <dt>Decorators:</dt>
    <dd><ul class="nomargin-top">
        <li><code>@abc.abstractmethod</code></li>
    </ul></dd>
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
