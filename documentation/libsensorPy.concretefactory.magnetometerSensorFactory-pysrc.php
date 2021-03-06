
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretefactory.magnetometerSensorFactory</title>
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
        <a href="libsensorPy.concretefactory-module.php">Package&nbsp;concretefactory</a> ::
        Module&nbsp;magnetometerSensorFactory
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretefactory.magnetometerSensorFactory-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.concretefactory.magnetometerSensorFactory-module.php">Module libsensorPy.concretefactory.magnetometerSensorFactory</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 16/03/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Package libsensorPy.abstractclass=libsensorPy.abstractclass-module.php"><a title="libsensorPy.abstractclass" class="py-name" href="#" onclick="return doclink('link-0', 'abstractclass', 'link-0');">abstractclass</a></tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Module libsensorPy.abstractclass.abstractSensorFactory=libsensorPy.abstractclass.abstractSensorFactory-module.php"><a title="libsensorPy.abstractclass.abstractSensorFactory" class="py-name" href="#" onclick="return doclink('link-1', 'abstractSensorFactory', 'link-1');">abstractSensorFactory</a></tt> <tt class="py-keyword">import</tt> <tt id="link-2" class="py-name" targets="Class libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.php"><a title="libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory" class="py-name" href="#" onclick="return doclink('link-2', 'AbstractSensorFactory', 'link-2');">AbstractSensorFactory</a></tt> </tt>
<a name="L8"></a><tt class="py-lineno"> 8</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-3" class="py-name" targets="Package libsensorPy.concretesensor=libsensorPy.concretesensor-module.php"><a title="libsensorPy.concretesensor" class="py-name" href="#" onclick="return doclink('link-3', 'concretesensor', 'link-3');">concretesensor</a></tt><tt class="py-op">.</tt><tt id="link-4" class="py-name" targets="Module libsensorPy.concretesensor.lsm303dMagnetometer=libsensorPy.concretesensor.lsm303dMagnetometer-module.php"><a title="libsensorPy.concretesensor.lsm303dMagnetometer" class="py-name" href="#" onclick="return doclink('link-4', 'lsm303dMagnetometer', 'link-4');">lsm303dMagnetometer</a></tt> <tt class="py-keyword">import</tt> <tt id="link-5" class="py-name" targets="Class libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php"><a title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer" class="py-name" href="#" onclick="return doclink('link-5', 'LSM303DMagnetometer', 'link-5');">LSM303DMagnetometer</a></tt> </tt>
<a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-6" class="py-name"><a title="libsensorPy.concretesensor" class="py-name" href="#" onclick="return doclink('link-6', 'concretesensor', 'link-3');">concretesensor</a></tt><tt class="py-op">.</tt><tt id="link-7" class="py-name" targets="Module libsensorPy.concretesensor.hmc5883l=libsensorPy.concretesensor.hmc5883l-module.php"><a title="libsensorPy.concretesensor.hmc5883l" class="py-name" href="#" onclick="return doclink('link-7', 'hmc5883l', 'link-7');">hmc5883l</a></tt> <tt class="py-keyword">import</tt> <tt id="link-8" class="py-name" targets="Class libsensorPy.concretesensor.hmc5883l.HMC5883L=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php"><a title="libsensorPy.concretesensor.hmc5883l.HMC5883L" class="py-name" href="#" onclick="return doclink('link-8', 'HMC5883L', 'link-8');">HMC5883L</a></tt> </tt>
<a name="MagnetometerSensorFactory"></a><div id="MagnetometerSensorFactory-def"><a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line"> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt> <a class="py-toggle" href="#" id="MagnetometerSensorFactory-toggle" onclick="return toggle('MagnetometerSensorFactory');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php">MagnetometerSensorFactory</a><tt class="py-op">(</tt><tt class="py-base-class">AbstractSensorFactory</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="MagnetometerSensorFactory-collapsed" style="display:none;" pad="++" indent="++++"></div><div id="MagnetometerSensorFactory-expanded"><a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line">    <tt class="py-docstring">'''</tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line"><tt class="py-docstring">    classdocs</tt> </tt>
<a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line"><tt class="py-docstring">    '''</tt> </tt>
<a name="L15"></a><tt class="py-lineno">15</tt>  <tt class="py-line"> </tt>
<a name="MagnetometerSensorFactory.__init__"></a><div id="MagnetometerSensorFactory.__init__-def"><a name="L16"></a><tt class="py-lineno">16</tt> <a class="py-toggle" href="#" id="MagnetometerSensorFactory.__init__-toggle" onclick="return toggle('MagnetometerSensorFactory.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="MagnetometerSensorFactory.__init__-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="MagnetometerSensorFactory.__init__-expanded"><a name="L17"></a><tt class="py-lineno">17</tt>  <tt class="py-line">        <tt class="py-docstring">'''</tt> </tt>
<a name="L18"></a><tt class="py-lineno">18</tt>  <tt class="py-line"><tt class="py-docstring">        Constructor</tt> </tt>
<a name="L19"></a><tt class="py-lineno">19</tt>  <tt class="py-line"><tt class="py-docstring">        '''</tt> </tt>
</div><a name="L20"></a><tt class="py-lineno">20</tt>  <tt class="py-line"> </tt>
<a name="L21"></a><tt class="py-lineno">21</tt>  <tt class="py-line">    <tt class="py-decorator">@</tt><tt class="py-decorator">staticmethod</tt> </tt>
<a name="MagnetometerSensorFactory.createSensor"></a><div id="MagnetometerSensorFactory.createSensor-def"><a name="L22"></a><tt class="py-lineno">22</tt> <a class="py-toggle" href="#" id="MagnetometerSensorFactory.createSensor-toggle" onclick="return toggle('MagnetometerSensorFactory.createSensor');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#createSensor">createSensor</a><tt class="py-op">(</tt><tt class="py-param">sensorType</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="MagnetometerSensorFactory.createSensor-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="MagnetometerSensorFactory.createSensor-expanded"><a name="L23"></a><tt class="py-lineno">23</tt>  <tt class="py-line">        <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">sensorType</tt> <tt class="py-op">==</tt> <tt class="py-string">"LSM303DMagnetometer"</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L24"></a><tt class="py-lineno">24</tt>  <tt class="py-line">            <tt class="py-keyword">return</tt> <tt id="link-9" class="py-name"><a title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer" class="py-name" href="#" onclick="return doclink('link-9', 'LSM303DMagnetometer', 'link-5');">LSM303DMagnetometer</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L25"></a><tt class="py-lineno">25</tt>  <tt class="py-line">        <tt class="py-keyword">elif</tt> <tt class="py-op">(</tt><tt class="py-name">sensorType</tt> <tt class="py-op">==</tt> <tt class="py-string">"HMC5883L"</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L26"></a><tt class="py-lineno">26</tt>  <tt class="py-line">            <tt class="py-keyword">return</tt> <tt id="link-10" class="py-name"><a title="libsensorPy.concretesensor.hmc5883l.HMC5883L" class="py-name" href="#" onclick="return doclink('link-10', 'HMC5883L', 'link-8');">HMC5883L</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L27"></a><tt class="py-lineno">27</tt>  <tt class="py-line">        <tt class="py-keyword">else</tt><tt class="py-op">:</tt> </tt>
<a name="L28"></a><tt class="py-lineno">28</tt>  <tt class="py-line">            <tt class="py-keyword">assert</tt> <tt class="py-number">0</tt><tt class="py-op">,</tt> <tt class="py-string">"Bad sensor creation: "</tt> <tt class="py-op">+</tt> <tt class="py-name">sensorType</tt> </tt>
</div><a name="L29"></a><tt class="py-lineno">29</tt>  <tt class="py-line"> </tt>
<a name="L30"></a><tt class="py-lineno">30</tt>  <tt class="py-line">    <tt class="py-decorator">@</tt><tt class="py-decorator">staticmethod</tt> </tt>
<a name="MagnetometerSensorFactory.createEvent"></a><div id="MagnetometerSensorFactory.createEvent-def"><a name="L31"></a><tt class="py-lineno">31</tt> <a class="py-toggle" href="#" id="MagnetometerSensorFactory.createEvent-toggle" onclick="return toggle('MagnetometerSensorFactory.createEvent');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#createEvent">createEvent</a><tt class="py-op">(</tt><tt class="py-param">sensorType</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="MagnetometerSensorFactory.createEvent-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="MagnetometerSensorFactory.createEvent-expanded"><a name="L32"></a><tt class="py-lineno">32</tt>  <tt class="py-line">        <tt class="py-keyword">pass</tt> </tt>
</div></div><a name="L33"></a><tt class="py-lineno">33</tt>  <tt class="py-line"> </tt><script type="text/javascript">
<!--
expandto(location.href);
// -->
</script>
</pre>
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
