
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.examples.dht11CompositeExample</title>
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
        <a href="libsensorPy.examples-module.php">Package&nbsp;examples</a> ::
        Module&nbsp;dht11CompositeExample
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.examples.dht11CompositeExample-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.examples.dht11CompositeExample-module.php">Module libsensorPy.examples.dht11CompositeExample</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 16/03/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Package libsensorPy.concretefactory=libsensorPy.concretefactory-module.php"><a title="libsensorPy.concretefactory" class="py-name" href="#" onclick="return doclink('link-0', 'concretefactory', 'link-0');">concretefactory</a></tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Module libsensorPy.concretefactory.compositeSensorFactory=libsensorPy.concretefactory.compositeSensorFactory-module.php"><a title="libsensorPy.concretefactory.compositeSensorFactory" class="py-name" href="#" onclick="return doclink('link-1', 'compositeSensorFactory', 'link-1');">compositeSensorFactory</a></tt> <tt class="py-keyword">import</tt> <tt id="link-2" class="py-name" targets="Class libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.php"><a title="libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory" class="py-name" href="#" onclick="return doclink('link-2', 'CompositeSensorFactory', 'link-2');">CompositeSensorFactory</a></tt> </tt>
<a name="L8"></a><tt class="py-lineno"> 8</tt>  <tt class="py-line"> </tt>
<a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line"><tt class="py-keyword">if</tt> <tt class="py-name">__name__</tt> <tt class="py-op">==</tt> <tt class="py-string">'__main__'</tt><tt class="py-op">:</tt> </tt>
<a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line"> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line">    <tt class="py-name">dht11</tt> <tt class="py-op">=</tt> <tt id="link-3" class="py-name"><a title="libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory" class="py-name" href="#" onclick="return doclink('link-3', 'CompositeSensorFactory', 'link-2');">CompositeSensorFactory</a></tt><tt class="py-op">.</tt><tt id="link-4" class="py-name" targets="Method libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.createSensor()=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.createSensor()=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.createSensor()=libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.createSensor()=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.createSensor()=libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.createSensor()=libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.createSensor()=libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.createSensor()=libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.createSensor()=libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.createSensor()=libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.createSensor()=libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory-class.php#createSensor,Static Method libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.createSensor()=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.php#createSensor"><a title="libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.createSensor
libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.createSensor
libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.createSensor
libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.createSensor
libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.createSensor
libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.createSensor
libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.createSensor
libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.createSensor
libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.createSensor
libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.createSensor
libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.createSensor
libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.createSensor" class="py-name" href="#" onclick="return doclink('link-4', 'createSensor', 'link-4');">createSensor</a></tt><tt class="py-op">(</tt><tt class="py-string">"DHT11Composite"</tt><tt class="py-op">)</tt> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line">    <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"Temperature in Celsius: "</tt> <tt class="py-op">+</tt> <tt class="py-name">dht11</tt><tt class="py-op">.</tt><tt id="link-5" class="py-name" targets="Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperature()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperature,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperature()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getTemperature,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperature()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#getTemperature,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperature()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperature,Method libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.getTemperature()=libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#getTemperature,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.getTemperature()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#getTemperature,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.getTemperature()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#getTemperature,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.getTemperature()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#getTemperature"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperature
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperature
libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperature
libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperature
libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.getTemperature
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.getTemperature
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.getTemperature
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.getTemperature" class="py-name" href="#" onclick="return doclink('link-5', 'getTemperature', 'link-5');">getTemperature</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-string">u"\u00b0"</tt> <tt class="py-op">+</tt> <tt class="py-string">"C"</tt><tt class="py-op">)</tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line">    <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"Temperature in Fahrenheit: "</tt> <tt class="py-op">+</tt> <tt class="py-name">dht11</tt><tt class="py-op">.</tt><tt id="link-6" class="py-name" targets="Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperatureInFahrenheit()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInFahrenheit,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperatureInFahrenheit()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getTemperatureInFahrenheit,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperatureInFahrenheit()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#getTemperatureInFahrenheit,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperatureInFahrenheit()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperatureInFahrenheit"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperatureInFahrenheit
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperatureInFahrenheit
libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperatureInFahrenheit
libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperatureInFahrenheit" class="py-name" href="#" onclick="return doclink('link-6', 'getTemperatureInFahrenheit', 'link-6');">getTemperatureInFahrenheit</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt><tt class="py-string">"F"</tt><tt class="py-op">)</tt> </tt>
<a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line">    <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"Temperature in Kelvin: "</tt> <tt class="py-op">+</tt> <tt class="py-name">dht11</tt><tt class="py-op">.</tt><tt id="link-7" class="py-name" targets="Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperatureInKelvin()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInKelvin,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperatureInKelvin()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getTemperatureInKelvin,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperatureInKelvin()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#getTemperatureInKelvin,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperatureInKelvin()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperatureInKelvin"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperatureInKelvin
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperatureInKelvin
libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperatureInKelvin
libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperatureInKelvin" class="py-name" href="#" onclick="return doclink('link-7', 'getTemperatureInKelvin', 'link-7');">getTemperatureInKelvin</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt><tt class="py-string">"K"</tt><tt class="py-op">)</tt> </tt>
<a name="L15"></a><tt class="py-lineno">15</tt>  <tt class="py-line">    <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"Humidity: "</tt> <tt class="py-op">+</tt> <tt class="py-name">dht11</tt><tt class="py-op">.</tt><tt id="link-8" class="py-name" targets="Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.getHumidity()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#getHumidity,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.getHumidity()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#getHumidity,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.getHumidity()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getHumidity,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.getHumidity()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#getHumidity,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.getHumidity()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#getHumidity"><a title="libsensorPy.abstractclass.humiditySensor.HumiditySensor.getHumidity
libsensorPy.compositesensor.dht11Composite.DHT11Composite.getHumidity
libsensorPy.compositesensor.dht22Composite.DHT22Composite.getHumidity
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.getHumidity
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.getHumidity" class="py-name" href="#" onclick="return doclink('link-8', 'getHumidity', 'link-8');">getHumidity</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-string">"%"</tt><tt class="py-op">)</tt> </tt>
<a name="L16"></a><tt class="py-lineno">16</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
