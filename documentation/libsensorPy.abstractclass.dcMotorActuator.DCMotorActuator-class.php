
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator</title>
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
        <a href="libsensorPy.abstractclass.dcMotorActuator-module.php">Module&nbsp;dcMotorActuator</a> ::
        Class&nbsp;DCMotorActuator
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
</div>
</div>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class DCMotorActuator</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.abstractclass.dcMotorActuator-pysrc.php#DCMotorActuator">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_7" name="uml_class_diagram_for_libsenso_7">
<area shape="rect" id="node10" href="libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#__metaclass__" title="libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__metaclass__" alt="" coords="17,223,263,241"/>
<area shape="rect" id="node10" href="libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#__init__" title="Constructor" alt="" coords="17,244,263,263"/>
<area shape="rect" id="node10" href="libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#setStepSequence" title="Sets the sequence: 4 or 8 steps" alt="" coords="17,263,263,281"/>
<area shape="rect" id="node10" href="libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#setDirection" title="Sets the rotation&#39;s direction" alt="" coords="17,281,263,300"/>
<area shape="rect" id="node1" href="libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php" title="classdocs" alt="" coords="5,198,275,306"/>
<area shape="rect" id="node11" href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setup" title="Setup the GPIO." alt="" coords="55,135,225,153"/>
<area shape="rect" id="node11" href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#rotate" title="Rotate the motor." alt="" coords="55,153,225,172"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php" title="classdocs" alt="" coords="43,102,237,178"/>
<area shape="rect" id="node12" href="libsensorPy.abstractclass.actuator.Actuator-class.php#changeSetup" title="changes GPIO setup ." alt="" coords="84,39,196,57"/>
<area shape="rect" id="node12" href="libsensorPy.abstractclass.actuator.Actuator-class.php#__del__" title="We&#39;re no longer using the GPIO, so tell software we&#39;re done" alt="" coords="84,57,196,76"/>
<area shape="rect" id="node3" href="libsensorPy.abstractclass.actuator.Actuator-class.php" title="classdocs" alt="" coords="72,6,208,82"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_7.gif" alt='' usemap="#uml_class_diagram_for_libsenso_7" ismap="ismap" class="graph-without-title" />
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
          <td><span class="summary-sig"><a href="libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.abstractclass.dcMotorActuator-pysrc.php#DCMotorActuator.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#setStepSequence" class="summary-sig-name">setStepSequence</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">stepSequence</span>=<span class="summary-sig-default">8</span>)</span><br />
      Sets the sequence: 4 or 8 steps</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.abstractclass.dcMotorActuator-pysrc.php#DCMotorActuator.setStepSequence">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#setDirection" class="summary-sig-name">setDirection</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">direction</span>=<span class="summary-sig-default">1</span>)</span><br />
      Sets the rotation's direction</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.abstractclass.dcMotorActuator-pysrc.php#DCMotorActuator.setDirection">source&nbsp;code</a></span>
            
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
    ><span class="codelink"><a href="libsensorPy.abstractclass.dcMotorActuator-pysrc.php#DCMotorActuator.__init__">source&nbsp;code</a></span>&nbsp;
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
<a name="setStepSequence"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setStepSequence</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">stepSequence</span>=<span class="sig-default">8</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.abstractclass.dcMotorActuator-pysrc.php#DCMotorActuator.setStepSequence">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Sets the sequence: 4 or 8 steps</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>stepSequence</code></strong> (int8) - The step sequence</li>
    </ul></dd>
    <dt>Decorators:</dt>
    <dd><ul class="nomargin-top">
        <li><code>@abc.abstractmethod</code></li>
    </ul></dd>
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
        <span class="sig-arg">direction</span>=<span class="sig-default">1</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.abstractclass.dcMotorActuator-pysrc.php#DCMotorActuator.setDirection">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Sets the rotation's direction</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>direction</code></strong> (int8) - 1 = clockwise, 2 anti-clockwise</li>
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
