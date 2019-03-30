
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.compositesensor.bmp085Composite</title>
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
        <a href="libsensorPy.compositesensor-module.php">Package&nbsp;compositesensor</a> ::
        Module&nbsp;bmp085Composite
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.compositesensor.bmp085Composite-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.compositesensor.bmp085Composite-module.php">Module libsensorPy.compositesensor.bmp085Composite</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 16/03/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Package libsensorPy.abstractclass=libsensorPy.abstractclass-module.php"><a title="libsensorPy.abstractclass" class="py-name" href="#" onclick="return doclink('link-0', 'abstractclass', 'link-0');">abstractclass</a></tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Module libsensorPy.abstractclass.altitudeSensor=libsensorPy.abstractclass.altitudeSensor-module.php"><a title="libsensorPy.abstractclass.altitudeSensor" class="py-name" href="#" onclick="return doclink('link-1', 'altitudeSensor', 'link-1');">altitudeSensor</a></tt> <tt class="py-keyword">import</tt> <tt id="link-2" class="py-name" targets="Class libsensorPy.abstractclass.altitudeSensor.AltitudeSensor=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php"><a title="libsensorPy.abstractclass.altitudeSensor.AltitudeSensor" class="py-name" href="#" onclick="return doclink('link-2', 'AltitudeSensor', 'link-2');">AltitudeSensor</a></tt> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-3" class="py-name"><a title="libsensorPy.abstractclass" class="py-name" href="#" onclick="return doclink('link-3', 'abstractclass', 'link-0');">abstractclass</a></tt><tt class="py-op">.</tt><tt id="link-4" class="py-name" targets="Module libsensorPy.abstractclass.pressureSensor=libsensorPy.abstractclass.pressureSensor-module.php"><a title="libsensorPy.abstractclass.pressureSensor" class="py-name" href="#" onclick="return doclink('link-4', 'pressureSensor', 'link-4');">pressureSensor</a></tt> <tt class="py-keyword">import</tt> <tt id="link-5" class="py-name" targets="Class libsensorPy.abstractclass.pressureSensor.PressureSensor=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php"><a title="libsensorPy.abstractclass.pressureSensor.PressureSensor" class="py-name" href="#" onclick="return doclink('link-5', 'PressureSensor', 'link-5');">PressureSensor</a></tt> </tt>
<a name="L8"></a><tt class="py-lineno"> 8</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-6" class="py-name"><a title="libsensorPy.abstractclass" class="py-name" href="#" onclick="return doclink('link-6', 'abstractclass', 'link-0');">abstractclass</a></tt><tt class="py-op">.</tt><tt id="link-7" class="py-name" targets="Module libsensorPy.abstractclass.temperatureSensor=libsensorPy.abstractclass.temperatureSensor-module.php"><a title="libsensorPy.abstractclass.temperatureSensor" class="py-name" href="#" onclick="return doclink('link-7', 'temperatureSensor', 'link-7');">temperatureSensor</a></tt> <tt class="py-keyword">import</tt> <tt id="link-8" class="py-name" targets="Class libsensorPy.abstractclass.temperatureSensor.TemperatureSensor=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor" class="py-name" href="#" onclick="return doclink('link-8', 'TemperatureSensor', 'link-8');">TemperatureSensor</a></tt> </tt>
<a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-9" class="py-name" targets="Package libsensorPy.concretesensor=libsensorPy.concretesensor-module.php"><a title="libsensorPy.concretesensor" class="py-name" href="#" onclick="return doclink('link-9', 'concretesensor', 'link-9');">concretesensor</a></tt><tt class="py-op">.</tt><tt id="link-10" class="py-name" targets="Module libsensorPy.concretesensor.bmp085Altitude=libsensorPy.concretesensor.bmp085Altitude-module.php"><a title="libsensorPy.concretesensor.bmp085Altitude" class="py-name" href="#" onclick="return doclink('link-10', 'bmp085Altitude', 'link-10');">bmp085Altitude</a></tt> <tt class="py-keyword">import</tt> <tt id="link-11" class="py-name" targets="Class libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php"><a title="libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude" class="py-name" href="#" onclick="return doclink('link-11', 'BMP085Altitude', 'link-11');">BMP085Altitude</a></tt> </tt>
<a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-12" class="py-name"><a title="libsensorPy.concretesensor" class="py-name" href="#" onclick="return doclink('link-12', 'concretesensor', 'link-9');">concretesensor</a></tt><tt class="py-op">.</tt><tt id="link-13" class="py-name" targets="Module libsensorPy.concretesensor.bmp085Pressure=libsensorPy.concretesensor.bmp085Pressure-module.php"><a title="libsensorPy.concretesensor.bmp085Pressure" class="py-name" href="#" onclick="return doclink('link-13', 'bmp085Pressure', 'link-13');">bmp085Pressure</a></tt> <tt class="py-keyword">import</tt> <tt id="link-14" class="py-name" targets="Class libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php"><a title="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure" class="py-name" href="#" onclick="return doclink('link-14', 'BMP085Pressure', 'link-14');">BMP085Pressure</a></tt> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-15" class="py-name"><a title="libsensorPy.concretesensor" class="py-name" href="#" onclick="return doclink('link-15', 'concretesensor', 'link-9');">concretesensor</a></tt><tt class="py-op">.</tt><tt id="link-16" class="py-name" targets="Module libsensorPy.concretesensor.bmp085Temperature=libsensorPy.concretesensor.bmp085Temperature-module.php"><a title="libsensorPy.concretesensor.bmp085Temperature" class="py-name" href="#" onclick="return doclink('link-16', 'bmp085Temperature', 'link-16');">bmp085Temperature</a></tt> <tt class="py-keyword">import</tt> <tt id="link-17" class="py-name" targets="Class libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php"><a title="libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature" class="py-name" href="#" onclick="return doclink('link-17', 'BMP085Temperature', 'link-17');">BMP085Temperature</a></tt> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line"> </tt>
<a name="BMP085Composite"></a><div id="BMP085Composite-def"><a name="L13"></a><tt class="py-lineno">13</tt> <a class="py-toggle" href="#" id="BMP085Composite-toggle" onclick="return toggle('BMP085Composite');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php">BMP085Composite</a><tt class="py-op">(</tt><tt class="py-base-class">AltitudeSensor</tt><tt class="py-op">,</tt><tt class="py-base-class">PressureSensor</tt><tt class="py-op">,</tt><tt class="py-base-class">TemperatureSensor</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="BMP085Composite-collapsed" style="display:none;" pad="++" indent="++++"></div><div id="BMP085Composite-expanded"><a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line">    <tt class="py-docstring">'''</tt> </tt>
<a name="L15"></a><tt class="py-lineno">15</tt>  <tt class="py-line"><tt class="py-docstring">    classdocs</tt> </tt>
<a name="L16"></a><tt class="py-lineno">16</tt>  <tt class="py-line"><tt class="py-docstring">    '''</tt> </tt>
<a name="L17"></a><tt class="py-lineno">17</tt>  <tt class="py-line"> </tt>
<a name="BMP085Composite.__init__"></a><div id="BMP085Composite.__init__-def"><a name="L18"></a><tt class="py-lineno">18</tt> <a class="py-toggle" href="#" id="BMP085Composite.__init__-toggle" onclick="return toggle('BMP085Composite.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="BMP085Composite.__init__-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="BMP085Composite.__init__-expanded"><a name="L19"></a><tt class="py-lineno">19</tt>  <tt class="py-line">        <tt class="py-docstring">'''</tt> </tt>
<a name="L20"></a><tt class="py-lineno">20</tt>  <tt class="py-line"><tt class="py-docstring">        Constructor</tt> </tt>
<a name="L21"></a><tt class="py-lineno">21</tt>  <tt class="py-line"><tt class="py-docstring">        '''</tt> </tt>
<a name="L22"></a><tt class="py-lineno">22</tt>  <tt class="py-line">        <tt id="link-18" class="py-name"><a title="libsensorPy.abstractclass.altitudeSensor.AltitudeSensor" class="py-name" href="#" onclick="return doclink('link-18', 'AltitudeSensor', 'link-2');">AltitudeSensor</a></tt><tt class="py-op">.</tt><tt id="link-19" class="py-name" targets="Method libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__()=libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory-class.php#__init__,Method libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__()=libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#__init__,Method libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__()=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.php#__init__,Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#__init__,Method libsensorPy.abstractclass.actuator.Actuator.__init__()=libsensorPy.abstractclass.actuator.Actuator-class.php#__init__,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#__init__,Method libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__()=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.eventObserver.EventObserver.__init__()=libsensorPy.abstractclass.eventObserver.EventObserver-class.php#__init__,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#__init__,Method libsensorPy.abstractclass.lightSensor.LightSensor.__init__()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#__init__,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#__init__,Method libsensorPy.abstractclass.motionSensor.MotionSensor.__init__()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#__init__,Method libsensorPy.abstractclass.motorActuator.MotorActuator.__init__()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#__init__,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#__init__,Method libsensorPy.abstractclass.sensor.Sensor.__init__()=libsensorPy.abstractclass.sensor.Sensor-class.php#__init__,Method libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__()=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__()=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__init__,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#__init__,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#__init__,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#__init__,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#__init__,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#__init__,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#__init__,Method libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__()=libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#__init__,Method libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__()=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__()=libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__()=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__()=libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory-class.php#__init__,Method libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__()=libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__()=libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__()=libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__()=libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__()=libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php#__init__,Method libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__()=libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__()=libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory-class.php#__init__,Method libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__()=libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#__init__,Method libsensorPy.concretesensor.adxl345.ADXL345.__init__()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#__init__,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#__init__,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#__init__,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#__init__,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#__init__,Method libsensorPy.concretesensor.hysrf05.HYSRF05.__init__()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#__init__,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#__init__,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#__init__,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#__init__,Method libsensorPy.concretesensor.pir.PIR.__init__()=libsensorPy.concretesensor.pir.PIR-class.php#__init__,Method libsensorPy.concretesensor.srf04.SRF04.__init__()=libsensorPy.concretesensor.srf04.SRF04-class.php#__init__,Method libsensorPy.concretesensor.srf05.SRF05.__init__()=libsensorPy.concretesensor.srf05.SRF05-class.php#__init__,Method libsensorPy.concretesensor.tcs34725.TCS34725.__init__()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__init__,Method libsensorPy.concretesensor.urm37.URM37.__init__()=libsensorPy.concretesensor.urm37.URM37-class.php#__init__,Method libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__()=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.php#__init__,Method libsensorPy.extension.hcsr04.HCSR04.__init__()=libsensorPy.extension.hcsr04.HCSR04-class.php#__init__,Method libsensorPy.utils.pycomms.PyComms.__init__()=libsensorPy.utils.pycomms.PyComms-class.php#__init__"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__
libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__
libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__
libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__
libsensorPy.abstractclass.actuator.Actuator.__init__
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__
libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__
libsensorPy.abstractclass.eventObserver.EventObserver.__init__
libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__
libsensorPy.abstractclass.lightSensor.LightSensor.__init__
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__
libsensorPy.abstractclass.motionSensor.MotionSensor.__init__
libsensorPy.abstractclass.motorActuator.MotorActuator.__init__
libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__
libsensorPy.abstractclass.sensor.Sensor.__init__
libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__
libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__
libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__
libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__
libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__
libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__
libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__
libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__
libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__
libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__
libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__
libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__
libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__
libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__
libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__
libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__
libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__
libsensorPy.concretesensor.adxl345.ADXL345.__init__
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__
libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__
libsensorPy.concretesensor.hysrf05.HYSRF05.__init__
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__
libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__
libsensorPy.concretesensor.pir.PIR.__init__
libsensorPy.concretesensor.srf04.SRF04.__init__
libsensorPy.concretesensor.srf05.SRF05.__init__
libsensorPy.concretesensor.tcs34725.TCS34725.__init__
libsensorPy.concretesensor.urm37.URM37.__init__
libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__
libsensorPy.extension.hcsr04.HCSR04.__init__
libsensorPy.utils.pycomms.PyComms.__init__" class="py-name" href="#" onclick="return doclink('link-19', '__init__', 'link-19');">__init__</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
<a name="L23"></a><tt class="py-lineno">23</tt>  <tt class="py-line">        <tt id="link-20" class="py-name"><a title="libsensorPy.abstractclass.pressureSensor.PressureSensor" class="py-name" href="#" onclick="return doclink('link-20', 'PressureSensor', 'link-5');">PressureSensor</a></tt><tt class="py-op">.</tt><tt id="link-21" class="py-name"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__
libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__
libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__
libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__
libsensorPy.abstractclass.actuator.Actuator.__init__
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__
libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__
libsensorPy.abstractclass.eventObserver.EventObserver.__init__
libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__
libsensorPy.abstractclass.lightSensor.LightSensor.__init__
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__
libsensorPy.abstractclass.motionSensor.MotionSensor.__init__
libsensorPy.abstractclass.motorActuator.MotorActuator.__init__
libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__
libsensorPy.abstractclass.sensor.Sensor.__init__
libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__
libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__
libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__
libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__
libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__
libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__
libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__
libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__
libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__
libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__
libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__
libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__
libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__
libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__
libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__
libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__
libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__
libsensorPy.concretesensor.adxl345.ADXL345.__init__
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__
libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__
libsensorPy.concretesensor.hysrf05.HYSRF05.__init__
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__
libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__
libsensorPy.concretesensor.pir.PIR.__init__
libsensorPy.concretesensor.srf04.SRF04.__init__
libsensorPy.concretesensor.srf05.SRF05.__init__
libsensorPy.concretesensor.tcs34725.TCS34725.__init__
libsensorPy.concretesensor.urm37.URM37.__init__
libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__
libsensorPy.extension.hcsr04.HCSR04.__init__
libsensorPy.utils.pycomms.PyComms.__init__" class="py-name" href="#" onclick="return doclink('link-21', '__init__', 'link-19');">__init__</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
<a name="L24"></a><tt class="py-lineno">24</tt>  <tt class="py-line">        <tt id="link-22" class="py-name"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor" class="py-name" href="#" onclick="return doclink('link-22', 'TemperatureSensor', 'link-8');">TemperatureSensor</a></tt><tt class="py-op">.</tt><tt id="link-23" class="py-name"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__
libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__
libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__
libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__
libsensorPy.abstractclass.actuator.Actuator.__init__
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__
libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__
libsensorPy.abstractclass.eventObserver.EventObserver.__init__
libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__
libsensorPy.abstractclass.lightSensor.LightSensor.__init__
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__
libsensorPy.abstractclass.motionSensor.MotionSensor.__init__
libsensorPy.abstractclass.motorActuator.MotorActuator.__init__
libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__
libsensorPy.abstractclass.sensor.Sensor.__init__
libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__
libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__
libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__
libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__
libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__
libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__
libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__
libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__
libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__
libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__
libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__
libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__
libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__
libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__
libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__
libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__
libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__
libsensorPy.concretesensor.adxl345.ADXL345.__init__
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__
libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__
libsensorPy.concretesensor.hysrf05.HYSRF05.__init__
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__
libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__
libsensorPy.concretesensor.pir.PIR.__init__
libsensorPy.concretesensor.srf04.SRF04.__init__
libsensorPy.concretesensor.srf05.SRF05.__init__
libsensorPy.concretesensor.tcs34725.TCS34725.__init__
libsensorPy.concretesensor.urm37.URM37.__init__
libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__
libsensorPy.extension.hcsr04.HCSR04.__init__
libsensorPy.utils.pycomms.PyComms.__init__" class="py-name" href="#" onclick="return doclink('link-23', '__init__', 'link-19');">__init__</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
<a name="L25"></a><tt class="py-lineno">25</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Alt</tt> <tt class="py-op">=</tt> <tt id="link-24" class="py-name"><a title="libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude" class="py-name" href="#" onclick="return doclink('link-24', 'BMP085Altitude', 'link-11');">BMP085Altitude</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L26"></a><tt class="py-lineno">26</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Press</tt> <tt class="py-op">=</tt> <tt id="link-25" class="py-name"><a title="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure" class="py-name" href="#" onclick="return doclink('link-25', 'BMP085Pressure', 'link-14');">BMP085Pressure</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L27"></a><tt class="py-lineno">27</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Temp</tt> <tt class="py-op">=</tt> <tt id="link-26" class="py-name"><a title="libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature" class="py-name" href="#" onclick="return doclink('link-26', 'BMP085Temperature', 'link-17');">BMP085Temperature</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L28"></a><tt class="py-lineno">28</tt>  <tt class="py-line"> </tt>
<a name="BMP085Composite.setup"></a><div id="BMP085Composite.setup-def"><a name="L29"></a><tt class="py-lineno">29</tt> <a class="py-toggle" href="#" id="BMP085Composite.setup-toggle" onclick="return toggle('BMP085Composite.setup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#setup">setup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="BMP085Composite.setup-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="BMP085Composite.setup-expanded"><a name="L30"></a><tt class="py-lineno">30</tt>  <tt class="py-line">        <tt class="py-docstring">"""Setup the GPIO."""</tt> </tt>
<a name="L31"></a><tt class="py-lineno">31</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Alt</tt><tt class="py-op">.</tt><tt id="link-27" class="py-name" targets="Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#setup,Method libsensorPy.abstractclass.actuator.Actuator.setup()=libsensorPy.abstractclass.actuator.Actuator-class.php#setup,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#setup,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#setup,Method libsensorPy.abstractclass.lightSensor.LightSensor.setup()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#setup,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#setup,Method libsensorPy.abstractclass.motionSensor.MotionSensor.setup()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#setup,Method libsensorPy.abstractclass.motorActuator.MotorActuator.setup()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setup,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.setup()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#setup,Method libsensorPy.abstractclass.sensor.Sensor.setup()=libsensorPy.abstractclass.sensor.Sensor-class.php#setup,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#setup,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#setup,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#setup,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#setup,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#setup,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#setup,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setup,Method libsensorPy.concretesensor.adxl345.ADXL345.setup()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#setup,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#setup,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#setup,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#setup,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#setup,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#setup,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#setup,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#setup,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.setup()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#setup,Method libsensorPy.concretesensor.hysrf05.HYSRF05.setup()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#setup,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#setup,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#setup,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#setup,Method libsensorPy.concretesensor.pir.PIR.setup()=libsensorPy.concretesensor.pir.PIR-class.php#setup,Method libsensorPy.concretesensor.srf04.SRF04.setup()=libsensorPy.concretesensor.srf04.SRF04-class.php#setup,Method libsensorPy.concretesensor.srf05.SRF05.setup()=libsensorPy.concretesensor.srf05.SRF05-class.php#setup,Method libsensorPy.concretesensor.tcs34725.TCS34725.setup()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#setup,Method libsensorPy.concretesensor.urm37.URM37.setup()=libsensorPy.concretesensor.urm37.URM37-class.php#setup,Method libsensorPy.extension.hcsr04.HCSR04.setup()=libsensorPy.extension.hcsr04.HCSR04-class.php#setup,Module libsensorPy.setup=libsensorPy.setup-module.php"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
libsensorPy.abstractclass.actuator.Actuator.setup
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup
libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup
libsensorPy.abstractclass.lightSensor.LightSensor.setup
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup
libsensorPy.abstractclass.motionSensor.MotionSensor.setup
libsensorPy.abstractclass.motorActuator.MotorActuator.setup
libsensorPy.abstractclass.pressureSensor.PressureSensor.setup
libsensorPy.abstractclass.sensor.Sensor.setup
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup
libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup
libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup
libsensorPy.concretesensor.adxl345.ADXL345.setup
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup
libsensorPy.concretesensor.hmc5883l.HMC5883L.setup
libsensorPy.concretesensor.hysrf05.HYSRF05.setup
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup
libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup
libsensorPy.concretesensor.pir.PIR.setup
libsensorPy.concretesensor.srf04.SRF04.setup
libsensorPy.concretesensor.srf05.SRF05.setup
libsensorPy.concretesensor.tcs34725.TCS34725.setup
libsensorPy.concretesensor.urm37.URM37.setup
libsensorPy.extension.hcsr04.HCSR04.setup
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-27', 'setup', 'link-27');">setup</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
</div><a name="L32"></a><tt class="py-lineno">32</tt>  <tt class="py-line"> </tt>
<a name="BMP085Composite.changeSetup"></a><div id="BMP085Composite.changeSetup-def"><a name="L33"></a><tt class="py-lineno">33</tt> <a class="py-toggle" href="#" id="BMP085Composite.changeSetup-toggle" onclick="return toggle('BMP085Composite.changeSetup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#changeSetup">changeSetup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="BMP085Composite.changeSetup-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="BMP085Composite.changeSetup-expanded"><a name="L34"></a><tt class="py-lineno">34</tt>  <tt class="py-line">        <tt class="py-docstring">"""changes GPIO setup ."""</tt> </tt>
<a name="L35"></a><tt class="py-lineno">35</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Alt</tt><tt class="py-op">.</tt><tt id="link-28" class="py-name" targets="Method libsensorPy.abstractclass.actuator.Actuator.changeSetup()=libsensorPy.abstractclass.actuator.Actuator-class.php#changeSetup,Method libsensorPy.abstractclass.sensor.Sensor.changeSetup()=libsensorPy.abstractclass.sensor.Sensor-class.php#changeSetup,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.changeSetup()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#changeSetup,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.changeSetup()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#changeSetup,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.changeSetup()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#changeSetup,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.changeSetup()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#changeSetup,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.changeSetup()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#changeSetup,Method libsensorPy.concretesensor.adxl345.ADXL345.changeSetup()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#changeSetup,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.changeSetup()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#changeSetup,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.changeSetup()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#changeSetup,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.changeSetup()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#changeSetup,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.changeSetup()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#changeSetup,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.changeSetup()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#changeSetup,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.changeSetup()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#changeSetup,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.changeSetup()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#changeSetup,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.changeSetup()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#changeSetup,Method libsensorPy.concretesensor.hysrf05.HYSRF05.changeSetup()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#changeSetup,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.changeSetup()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#changeSetup,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.changeSetup()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#changeSetup,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.changeSetup()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#changeSetup,Method libsensorPy.concretesensor.pir.PIR.changeSetup()=libsensorPy.concretesensor.pir.PIR-class.php#changeSetup,Method libsensorPy.concretesensor.srf04.SRF04.changeSetup()=libsensorPy.concretesensor.srf04.SRF04-class.php#changeSetup,Method libsensorPy.concretesensor.srf05.SRF05.changeSetup()=libsensorPy.concretesensor.srf05.SRF05-class.php#changeSetup,Method libsensorPy.concretesensor.tcs34725.TCS34725.changeSetup()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#changeSetup,Method libsensorPy.concretesensor.urm37.URM37.changeSetup()=libsensorPy.concretesensor.urm37.URM37-class.php#changeSetup,Method libsensorPy.extension.hcsr04.HCSR04.changeSetup()=libsensorPy.extension.hcsr04.HCSR04-class.php#changeSetup"><a title="libsensorPy.abstractclass.actuator.Actuator.changeSetup
libsensorPy.abstractclass.sensor.Sensor.changeSetup
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.changeSetup
libsensorPy.compositesensor.dht11Composite.DHT11Composite.changeSetup
libsensorPy.compositesensor.dht22Composite.DHT22Composite.changeSetup
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.changeSetup
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.changeSetup
libsensorPy.concretesensor.adxl345.ADXL345.changeSetup
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.changeSetup
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.changeSetup
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.changeSetup
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.changeSetup
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.changeSetup
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.changeSetup
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.changeSetup
libsensorPy.concretesensor.hmc5883l.HMC5883L.changeSetup
libsensorPy.concretesensor.hysrf05.HYSRF05.changeSetup
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.changeSetup
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.changeSetup
libsensorPy.concretesensor.parallaxPing.ParallaxPing.changeSetup
libsensorPy.concretesensor.pir.PIR.changeSetup
libsensorPy.concretesensor.srf04.SRF04.changeSetup
libsensorPy.concretesensor.srf05.SRF05.changeSetup
libsensorPy.concretesensor.tcs34725.TCS34725.changeSetup
libsensorPy.concretesensor.urm37.URM37.changeSetup
libsensorPy.extension.hcsr04.HCSR04.changeSetup" class="py-name" href="#" onclick="return doclink('link-28', 'changeSetup', 'link-28');">changeSetup</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
</div><a name="L36"></a><tt class="py-lineno">36</tt>  <tt class="py-line"> </tt>
<a name="L37"></a><tt class="py-lineno">37</tt>  <tt class="py-line"> </tt>
<a name="BMP085Composite.getAltitude"></a><div id="BMP085Composite.getAltitude-def"><a name="L38"></a><tt class="py-lineno">38</tt> <a class="py-toggle" href="#" id="BMP085Composite.getAltitude-toggle" onclick="return toggle('BMP085Composite.getAltitude');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getAltitude">getAltitude</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt><tt class="py-param">seaLevelPressure</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="BMP085Composite.getAltitude-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="BMP085Composite.getAltitude-expanded"><a name="L39"></a><tt class="py-lineno">39</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L40"></a><tt class="py-lineno">40</tt>  <tt class="py-line"><tt class="py-docstring">        Return the altitude measured from the sensor.</tt> </tt>
<a name="L41"></a><tt class="py-lineno">41</tt>  <tt class="py-line"><tt class="py-docstring">        @param seaLevelPressure: The normal sea level pressure</tt> </tt>
<a name="L42"></a><tt class="py-lineno">42</tt>  <tt class="py-line"><tt class="py-docstring">        @type seaLevelPressure: int8</tt> </tt>
<a name="L43"></a><tt class="py-lineno">43</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L44"></a><tt class="py-lineno">44</tt>  <tt class="py-line">         </tt>
<a name="L45"></a><tt class="py-lineno">45</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Alt</tt><tt class="py-op">.</tt><tt id="link-29" class="py-name" targets="Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.getAltitude()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#getAltitude,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getAltitude()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getAltitude,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.getAltitude()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#getAltitude"><a title="libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.getAltitude
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getAltitude
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.getAltitude" class="py-name" href="#" onclick="return doclink('link-29', 'getAltitude', 'link-29');">getAltitude</a></tt><tt class="py-op">(</tt><tt class="py-name">seaLevelPressure</tt><tt class="py-op">)</tt> </tt>
</div><a name="L46"></a><tt class="py-lineno">46</tt>  <tt class="py-line"> </tt>
<a name="BMP085Composite.getPressure"></a><div id="BMP085Composite.getPressure-def"><a name="L47"></a><tt class="py-lineno">47</tt> <a class="py-toggle" href="#" id="BMP085Composite.getPressure-toggle" onclick="return toggle('BMP085Composite.getPressure');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getPressure">getPressure</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="BMP085Composite.getPressure-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="BMP085Composite.getPressure-expanded"><a name="L48"></a><tt class="py-lineno">48</tt>  <tt class="py-line">        <tt class="py-docstring">"""Return the pressure measured from the sensor."""</tt> </tt>
<a name="L49"></a><tt class="py-lineno">49</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Press</tt><tt class="py-op">.</tt><tt id="link-30" class="py-name" targets="Method libsensorPy.abstractclass.pressureSensor.PressureSensor.getPressure()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#getPressure,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getPressure()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getPressure,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.getPressure()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#getPressure"><a title="libsensorPy.abstractclass.pressureSensor.PressureSensor.getPressure
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getPressure
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.getPressure" class="py-name" href="#" onclick="return doclink('link-30', 'getPressure', 'link-30');">getPressure</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L50"></a><tt class="py-lineno">50</tt>  <tt class="py-line"> </tt>
<a name="BMP085Composite.getTemperature"></a><div id="BMP085Composite.getTemperature-def"><a name="L51"></a><tt class="py-lineno">51</tt> <a class="py-toggle" href="#" id="BMP085Composite.getTemperature-toggle" onclick="return toggle('BMP085Composite.getTemperature');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getTemperature">getTemperature</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="BMP085Composite.getTemperature-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="BMP085Composite.getTemperature-expanded"><a name="L52"></a><tt class="py-lineno">52</tt>  <tt class="py-line">        <tt class="py-docstring">"""Return the temperature in Celsius measured from the sensor."""</tt> </tt>
<a name="L53"></a><tt class="py-lineno">53</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Temp</tt><tt class="py-op">.</tt><tt id="link-31" class="py-name" targets="Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperature()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperature,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperature()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getTemperature,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperature()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#getTemperature,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperature()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperature,Method libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.getTemperature()=libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#getTemperature,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.getTemperature()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#getTemperature,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.getTemperature()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#getTemperature,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.getTemperature()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#getTemperature"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperature
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperature
libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperature
libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperature
libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.getTemperature
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.getTemperature
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.getTemperature
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.getTemperature" class="py-name" href="#" onclick="return doclink('link-31', 'getTemperature', 'link-31');">getTemperature</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L54"></a><tt class="py-lineno">54</tt>  <tt class="py-line"> </tt>
<a name="BMP085Composite.getTemperatureInFahrenheit"></a><div id="BMP085Composite.getTemperatureInFahrenheit-def"><a name="L55"></a><tt class="py-lineno">55</tt> <a class="py-toggle" href="#" id="BMP085Composite.getTemperatureInFahrenheit-toggle" onclick="return toggle('BMP085Composite.getTemperatureInFahrenheit');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getTemperatureInFahrenheit">getTemperatureInFahrenheit</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="BMP085Composite.getTemperatureInFahrenheit-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="BMP085Composite.getTemperatureInFahrenheit-expanded"><a name="L56"></a><tt class="py-lineno">56</tt>  <tt class="py-line">        <tt class="py-docstring">"""Return the temperature in Fahrenheit measured from the sensor."""</tt> </tt>
<a name="L57"></a><tt class="py-lineno">57</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Temp</tt><tt class="py-op">.</tt><tt id="link-32" class="py-name" targets="Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperatureInFahrenheit()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInFahrenheit,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperatureInFahrenheit()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getTemperatureInFahrenheit,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperatureInFahrenheit()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#getTemperatureInFahrenheit,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperatureInFahrenheit()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperatureInFahrenheit"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperatureInFahrenheit
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperatureInFahrenheit
libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperatureInFahrenheit
libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperatureInFahrenheit" class="py-name" href="#" onclick="return doclink('link-32', 'getTemperatureInFahrenheit', 'link-32');">getTemperatureInFahrenheit</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L58"></a><tt class="py-lineno">58</tt>  <tt class="py-line"> </tt>
<a name="BMP085Composite.getTemperatureInKelvin"></a><div id="BMP085Composite.getTemperatureInKelvin-def"><a name="L59"></a><tt class="py-lineno">59</tt> <a class="py-toggle" href="#" id="BMP085Composite.getTemperatureInKelvin-toggle" onclick="return toggle('BMP085Composite.getTemperatureInKelvin');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getTemperatureInKelvin">getTemperatureInKelvin</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="BMP085Composite.getTemperatureInKelvin-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="BMP085Composite.getTemperatureInKelvin-expanded"><a name="L60"></a><tt class="py-lineno">60</tt>  <tt class="py-line">        <tt class="py-docstring">"""Return the temperature in Kelvin measured from the sensor."""</tt> </tt>
<a name="L61"></a><tt class="py-lineno">61</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Temp</tt><tt class="py-op">.</tt><tt id="link-33" class="py-name" targets="Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperatureInKelvin()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInKelvin,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperatureInKelvin()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getTemperatureInKelvin,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperatureInKelvin()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#getTemperatureInKelvin,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperatureInKelvin()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperatureInKelvin"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperatureInKelvin
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperatureInKelvin
libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperatureInKelvin
libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperatureInKelvin" class="py-name" href="#" onclick="return doclink('link-33', 'getTemperatureInKelvin', 'link-33');">getTemperatureInKelvin</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L62"></a><tt class="py-lineno">62</tt>  <tt class="py-line"> </tt>
<a name="BMP085Composite.add"></a><div id="BMP085Composite.add-def"><a name="L63"></a><tt class="py-lineno">63</tt> <a class="py-toggle" href="#" id="BMP085Composite.add-toggle" onclick="return toggle('BMP085Composite.add');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#add">add</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt><tt class="py-param">sensor</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="BMP085Composite.add-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="BMP085Composite.add-expanded"><a name="L64"></a><tt class="py-lineno">64</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L65"></a><tt class="py-lineno">65</tt>  <tt class="py-line"><tt class="py-docstring">        Add a basic sensor to the composite</tt> </tt>
<a name="L66"></a><tt class="py-lineno">66</tt>  <tt class="py-line"><tt class="py-docstring">        @param sensor: The sensor to be added</tt> </tt>
<a name="L67"></a><tt class="py-lineno">67</tt>  <tt class="py-line"><tt class="py-docstring">        @type sensor: Sensor</tt> </tt>
<a name="L68"></a><tt class="py-lineno">68</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L69"></a><tt class="py-lineno">69</tt>  <tt class="py-line"> </tt>
<a name="L70"></a><tt class="py-lineno">70</tt>  <tt class="py-line">        <tt class="py-keyword">if</tt> <tt class="py-op">(</tt> <tt class="py-name">isinstance</tt><tt class="py-op">(</tt><tt id="link-34" class="py-name" targets="Module libsensorPy.abstractclass.sensor=libsensorPy.abstractclass.sensor-module.php"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-34', 'sensor', 'link-34');">sensor</a></tt><tt class="py-op">,</tt> <tt id="link-35" class="py-name"><a title="libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude" class="py-name" href="#" onclick="return doclink('link-35', 'BMP085Altitude', 'link-11');">BMP085Altitude</a></tt><tt class="py-op">)</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L71"></a><tt class="py-lineno">71</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Alt</tt> <tt class="py-op">=</tt> <tt id="link-36" class="py-name"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-36', 'sensor', 'link-34');">sensor</a></tt> </tt>
<a name="L72"></a><tt class="py-lineno">72</tt>  <tt class="py-line">        <tt class="py-keyword">elif</tt> <tt class="py-op">(</tt> <tt class="py-name">isinstance</tt><tt class="py-op">(</tt><tt id="link-37" class="py-name"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-37', 'sensor', 'link-34');">sensor</a></tt><tt class="py-op">,</tt> <tt id="link-38" class="py-name"><a title="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure" class="py-name" href="#" onclick="return doclink('link-38', 'BMP085Pressure', 'link-14');">BMP085Pressure</a></tt><tt class="py-op">)</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L73"></a><tt class="py-lineno">73</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Press</tt> <tt class="py-op">=</tt> <tt id="link-39" class="py-name"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-39', 'sensor', 'link-34');">sensor</a></tt> </tt>
<a name="L74"></a><tt class="py-lineno">74</tt>  <tt class="py-line">        <tt class="py-keyword">elif</tt> <tt class="py-op">(</tt> <tt class="py-name">isinstance</tt><tt class="py-op">(</tt><tt id="link-40" class="py-name"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-40', 'sensor', 'link-34');">sensor</a></tt><tt class="py-op">,</tt> <tt id="link-41" class="py-name"><a title="libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature" class="py-name" href="#" onclick="return doclink('link-41', 'BMP085Temperature', 'link-17');">BMP085Temperature</a></tt><tt class="py-op">)</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L75"></a><tt class="py-lineno">75</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bmp085Temp</tt> <tt class="py-op">=</tt> <tt id="link-42" class="py-name"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-42', 'sensor', 'link-34');">sensor</a></tt> </tt>
<a name="L76"></a><tt class="py-lineno">76</tt>  <tt class="py-line">        <tt class="py-keyword">else</tt><tt class="py-op">:</tt> </tt>
<a name="L77"></a><tt class="py-lineno">77</tt>  <tt class="py-line">            <tt class="py-keyword">assert</tt> <tt class="py-number">0</tt><tt class="py-op">,</tt> <tt class="py-string">"Bad sensor creation. "</tt> </tt>
</div></div><a name="L78"></a><tt class="py-lineno">78</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
