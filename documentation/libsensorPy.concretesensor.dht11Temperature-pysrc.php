
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretesensor.dht11Temperature</title>
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
        Module&nbsp;dht11Temperature
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.concretesensor.dht11Temperature-module.php">Module libsensorPy.concretesensor.dht11Temperature</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno">  1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno">  2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 30/01/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno">  3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno">  4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno">  5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno">  6</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">RPi</tt><tt class="py-op">.</tt><tt class="py-name">GPIO</tt> <tt class="py-keyword">as</tt> <tt class="py-name">GPIO</tt> </tt>
<a name="L7"></a><tt class="py-lineno">  7</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Package libsensorPy.abstractclass=libsensorPy.abstractclass-module.php"><a title="libsensorPy.abstractclass" class="py-name" href="#" onclick="return doclink('link-0', 'abstractclass', 'link-0');">abstractclass</a></tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Module libsensorPy.abstractclass.temperatureSensor=libsensorPy.abstractclass.temperatureSensor-module.php"><a title="libsensorPy.abstractclass.temperatureSensor" class="py-name" href="#" onclick="return doclink('link-1', 'temperatureSensor', 'link-1');">temperatureSensor</a></tt> <tt class="py-keyword">import</tt> <tt id="link-2" class="py-name" targets="Class libsensorPy.abstractclass.temperatureSensor.TemperatureSensor=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor" class="py-name" href="#" onclick="return doclink('link-2', 'TemperatureSensor', 'link-2');">TemperatureSensor</a></tt> </tt>
<a name="L8"></a><tt class="py-lineno">  8</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">time</tt> </tt>
<a name="L9"></a><tt class="py-lineno">  9</tt>  <tt class="py-line"> </tt>
<a name="DHT11Temperature"></a><div id="DHT11Temperature-def"><a name="L10"></a><tt class="py-lineno"> 10</tt> <a class="py-toggle" href="#" id="DHT11Temperature-toggle" onclick="return toggle('DHT11Temperature');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php">DHT11Temperature</a><tt class="py-op">(</tt><tt class="py-base-class">TemperatureSensor</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT11Temperature-collapsed" style="display:none;" pad="+++" indent="++++"></div><div id="DHT11Temperature-expanded"><a name="L11"></a><tt class="py-lineno"> 11</tt>  <tt class="py-line">    <tt class="py-docstring">'''</tt> </tt>
<a name="L12"></a><tt class="py-lineno"> 12</tt>  <tt class="py-line"><tt class="py-docstring">    classdocs</tt> </tt>
<a name="L13"></a><tt class="py-lineno"> 13</tt>  <tt class="py-line"><tt class="py-docstring">    '''</tt> </tt>
<a name="L14"></a><tt class="py-lineno"> 14</tt>  <tt class="py-line"> </tt>
<a name="DHT11Temperature.__init__"></a><div id="DHT11Temperature.__init__-def"><a name="L15"></a><tt class="py-lineno"> 15</tt> <a class="py-toggle" href="#" id="DHT11Temperature.__init__-toggle" onclick="return toggle('DHT11Temperature.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT11Temperature.__init__-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT11Temperature.__init__-expanded"><a name="L16"></a><tt class="py-lineno"> 16</tt>  <tt class="py-line">        <tt class="py-docstring">'''</tt> </tt>
<a name="L17"></a><tt class="py-lineno"> 17</tt>  <tt class="py-line"><tt class="py-docstring">        Constructor</tt> </tt>
<a name="L18"></a><tt class="py-lineno"> 18</tt>  <tt class="py-line"><tt class="py-docstring">        '''</tt> </tt>
<a name="L19"></a><tt class="py-lineno"> 19</tt>  <tt class="py-line">        <tt id="link-3" class="py-name"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor" class="py-name" href="#" onclick="return doclink('link-3', 'TemperatureSensor', 'link-2');">TemperatureSensor</a></tt><tt class="py-op">.</tt><tt id="link-4" class="py-name" targets="Method libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__()=libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory-class.php#__init__,Method libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__()=libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#__init__,Method libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__()=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.php#__init__,Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#__init__,Method libsensorPy.abstractclass.actuator.Actuator.__init__()=libsensorPy.abstractclass.actuator.Actuator-class.php#__init__,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#__init__,Method libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__()=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.eventObserver.EventObserver.__init__()=libsensorPy.abstractclass.eventObserver.EventObserver-class.php#__init__,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#__init__,Method libsensorPy.abstractclass.lightSensor.LightSensor.__init__()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#__init__,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#__init__,Method libsensorPy.abstractclass.motionSensor.MotionSensor.__init__()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#__init__,Method libsensorPy.abstractclass.motorActuator.MotorActuator.__init__()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#__init__,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#__init__,Method libsensorPy.abstractclass.sensor.Sensor.__init__()=libsensorPy.abstractclass.sensor.Sensor-class.php#__init__,Method libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__()=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__()=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__init__,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#__init__,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#__init__,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#__init__,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#__init__,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#__init__,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#__init__,Method libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__()=libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#__init__,Method libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__()=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__()=libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__()=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__()=libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory-class.php#__init__,Method libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__()=libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__()=libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__()=libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__()=libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__()=libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php#__init__,Method libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__()=libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__()=libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory-class.php#__init__,Method libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__()=libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#__init__,Method libsensorPy.concretesensor.adxl345.ADXL345.__init__()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#__init__,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#__init__,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#__init__,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#__init__,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#__init__,Method libsensorPy.concretesensor.hysrf05.HYSRF05.__init__()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#__init__,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#__init__,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#__init__,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#__init__,Method libsensorPy.concretesensor.pir.PIR.__init__()=libsensorPy.concretesensor.pir.PIR-class.php#__init__,Method libsensorPy.concretesensor.srf04.SRF04.__init__()=libsensorPy.concretesensor.srf04.SRF04-class.php#__init__,Method libsensorPy.concretesensor.srf05.SRF05.__init__()=libsensorPy.concretesensor.srf05.SRF05-class.php#__init__,Method libsensorPy.concretesensor.tcs34725.TCS34725.__init__()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__init__,Method libsensorPy.concretesensor.urm37.URM37.__init__()=libsensorPy.concretesensor.urm37.URM37-class.php#__init__,Method libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__()=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.php#__init__,Method libsensorPy.extension.hcsr04.HCSR04.__init__()=libsensorPy.extension.hcsr04.HCSR04-class.php#__init__,Method libsensorPy.utils.pycomms.PyComms.__init__()=libsensorPy.utils.pycomms.PyComms-class.php#__init__"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__
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
libsensorPy.utils.pycomms.PyComms.__init__" class="py-name" href="#" onclick="return doclink('link-4', '__init__', 'link-4');">__init__</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
<a name="L20"></a><tt class="py-lineno"> 20</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-5" class="py-name" targets="Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#setup,Method libsensorPy.abstractclass.actuator.Actuator.setup()=libsensorPy.abstractclass.actuator.Actuator-class.php#setup,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#setup,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#setup,Method libsensorPy.abstractclass.lightSensor.LightSensor.setup()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#setup,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#setup,Method libsensorPy.abstractclass.motionSensor.MotionSensor.setup()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#setup,Method libsensorPy.abstractclass.motorActuator.MotorActuator.setup()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setup,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.setup()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#setup,Method libsensorPy.abstractclass.sensor.Sensor.setup()=libsensorPy.abstractclass.sensor.Sensor-class.php#setup,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#setup,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#setup,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#setup,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#setup,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#setup,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#setup,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setup,Method libsensorPy.concretesensor.adxl345.ADXL345.setup()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#setup,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#setup,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#setup,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#setup,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#setup,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#setup,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#setup,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#setup,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.setup()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#setup,Method libsensorPy.concretesensor.hysrf05.HYSRF05.setup()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#setup,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#setup,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#setup,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#setup,Method libsensorPy.concretesensor.pir.PIR.setup()=libsensorPy.concretesensor.pir.PIR-class.php#setup,Method libsensorPy.concretesensor.srf04.SRF04.setup()=libsensorPy.concretesensor.srf04.SRF04-class.php#setup,Method libsensorPy.concretesensor.srf05.SRF05.setup()=libsensorPy.concretesensor.srf05.SRF05-class.php#setup,Method libsensorPy.concretesensor.tcs34725.TCS34725.setup()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#setup,Method libsensorPy.concretesensor.urm37.URM37.setup()=libsensorPy.concretesensor.urm37.URM37-class.php#setup,Method libsensorPy.extension.hcsr04.HCSR04.setup()=libsensorPy.extension.hcsr04.HCSR04-class.php#setup,Module libsensorPy.setup=libsensorPy.setup-module.php"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
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
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-5', 'setup', 'link-5');">setup</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L21"></a><tt class="py-lineno"> 21</tt>  <tt class="py-line"> </tt>
<a name="L22"></a><tt class="py-lineno"> 22</tt>  <tt class="py-line"> </tt>
<a name="DHT11Temperature.setup"></a><div id="DHT11Temperature.setup-def"><a name="L23"></a><tt class="py-lineno"> 23</tt> <a class="py-toggle" href="#" id="DHT11Temperature.setup-toggle" onclick="return toggle('DHT11Temperature.setup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#setup">setup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT11Temperature.setup-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT11Temperature.setup-expanded"><a name="L24"></a><tt class="py-lineno"> 24</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L25"></a><tt class="py-lineno"> 25</tt>  <tt class="py-line"><tt class="py-docstring">        Setup the board and GPIO  </tt> </tt>
<a name="L26"></a><tt class="py-lineno"> 26</tt>  <tt class="py-line"><tt class="py-docstring">        @return: void</tt> </tt>
<a name="L27"></a><tt class="py-lineno"> 27</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L28"></a><tt class="py-lineno"> 28</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">setmode</tt><tt class="py-op">(</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">BCM</tt><tt class="py-op">)</tt> </tt>
<a name="L29"></a><tt class="py-lineno"> 29</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">setwarnings</tt><tt class="py-op">(</tt><tt class="py-name">False</tt><tt class="py-op">)</tt> </tt>
<a name="L30"></a><tt class="py-lineno"> 30</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt> <tt class="py-op">=</tt> <tt class="py-number">23</tt> </tt>
<a name="L31"></a><tt class="py-lineno"> 31</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__data</tt> <tt class="py-op">=</tt> <tt class="py-op">[</tt><tt class="py-op">]</tt> </tt>
<a name="L32"></a><tt class="py-lineno"> 32</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__crc</tt> <tt class="py-op">=</tt> <tt class="py-string">""</tt> </tt>
<a name="L33"></a><tt class="py-lineno"> 33</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__humidity</tt> <tt class="py-op">=</tt> <tt class="py-string">""</tt> </tt>
<a name="L34"></a><tt class="py-lineno"> 34</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__temperature</tt> <tt class="py-op">=</tt> <tt class="py-string">""</tt> </tt>
</div><a name="L35"></a><tt class="py-lineno"> 35</tt>  <tt class="py-line"> </tt>
<a name="L36"></a><tt class="py-lineno"> 36</tt>  <tt class="py-line">    <tt class="py-comment">##</tt> </tt>
<a name="L37"></a><tt class="py-lineno"> 37</tt>  <tt class="py-line">    <tt class="py-comment"># @param pin: the GPIO pin used to wire the sensor</tt> </tt>
<a name="L38"></a><tt class="py-lineno"> 38</tt>  <tt class="py-line">    <tt class="py-comment"># @return: void</tt> </tt>
<a name="DHT11Temperature.changeSetup"></a><div id="DHT11Temperature.changeSetup-def"><a name="L39"></a><tt class="py-lineno"> 39</tt> <a class="py-toggle" href="#" id="DHT11Temperature.changeSetup-toggle" onclick="return toggle('DHT11Temperature.changeSetup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#changeSetup">changeSetup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt> <tt class="py-param">pin</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT11Temperature.changeSetup-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT11Temperature.changeSetup-expanded"><a name="L40"></a><tt class="py-lineno"> 40</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L41"></a><tt class="py-lineno"> 41</tt>  <tt class="py-line"><tt class="py-docstring">        @param pin: the GPIO pin used to wire the sensor.</tt> </tt>
<a name="L42"></a><tt class="py-lineno"> 42</tt>  <tt class="py-line"><tt class="py-docstring">        @return: void</tt> </tt>
<a name="L43"></a><tt class="py-lineno"> 43</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L44"></a><tt class="py-lineno"> 44</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt> <tt class="py-op">=</tt> <tt class="py-name">pin</tt> </tt>
</div><a name="L45"></a><tt class="py-lineno"> 45</tt>  <tt class="py-line"> </tt>
<a name="DHT11Temperature.__checkValidData"></a><div id="DHT11Temperature.__checkValidData-def"><a name="L46"></a><tt class="py-lineno"> 46</tt> <a class="py-toggle" href="#" id="DHT11Temperature.__checkValidData-toggle" onclick="return toggle('DHT11Temperature.__checkValidData');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__checkValidData">__checkValidData</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT11Temperature.__checkValidData-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT11Temperature.__checkValidData-expanded"><a name="L47"></a><tt class="py-lineno"> 47</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L48"></a><tt class="py-lineno"> 48</tt>  <tt class="py-line"><tt class="py-docstring">        Check if data is valid.</tt> </tt>
<a name="L49"></a><tt class="py-lineno"> 49</tt>  <tt class="py-line"><tt class="py-docstring">        @return: Boolean</tt> </tt>
<a name="L50"></a><tt class="py-lineno"> 50</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L51"></a><tt class="py-lineno"> 51</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-op">(</tt><tt class="py-name">int</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__humidity</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-name">int</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__temperature</tt><tt class="py-op">)</tt> <tt class="py-op">-</tt> <tt class="py-name">int</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__crc</tt><tt class="py-op">)</tt> <tt class="py-op">==</tt> <tt class="py-number">0</tt><tt class="py-op">)</tt> </tt>
</div><a name="L52"></a><tt class="py-lineno"> 52</tt>  <tt class="py-line"> </tt>
<a name="DHT11Temperature.__getValidData"></a><div id="DHT11Temperature.__getValidData-def"><a name="L53"></a><tt class="py-lineno"> 53</tt> <a class="py-toggle" href="#" id="DHT11Temperature.__getValidData-toggle" onclick="return toggle('DHT11Temperature.__getValidData');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__getValidData">__getValidData</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT11Temperature.__getValidData-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT11Temperature.__getValidData-expanded"><a name="L54"></a><tt class="py-lineno"> 54</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L55"></a><tt class="py-lineno"> 55</tt>  <tt class="py-line"><tt class="py-docstring">        Reads sensor data until its send a valid data.</tt> </tt>
<a name="L56"></a><tt class="py-lineno"> 56</tt>  <tt class="py-line"><tt class="py-docstring">        @return: void</tt> </tt>
<a name="L57"></a><tt class="py-lineno"> 57</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L58"></a><tt class="py-lineno"> 58</tt>  <tt class="py-line">         </tt>
<a name="L59"></a><tt class="py-lineno"> 59</tt>  <tt class="py-line">        <tt class="py-name">dataRead</tt> <tt class="py-op">=</tt> <tt class="py-name">False</tt> </tt>
<a name="L60"></a><tt class="py-lineno"> 60</tt>  <tt class="py-line">        <tt class="py-keyword">while</tt> <tt class="py-keyword">not</tt> <tt class="py-op">(</tt><tt class="py-name">dataRead</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L61"></a><tt class="py-lineno"> 61</tt>  <tt class="py-line">            <tt class="py-name">dataRead</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-6" class="py-name" targets="Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__readData()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#__readData,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__readData()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__readData"><a title="libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__readData
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__readData" class="py-name" href="#" onclick="return doclink('link-6', '__readData', 'link-6');">__readData</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L62"></a><tt class="py-lineno"> 62</tt>  <tt class="py-line">            <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">dataRead</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L63"></a><tt class="py-lineno"> 63</tt>  <tt class="py-line">                <tt class="py-name">dataRead</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-7" class="py-name" targets="Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__checkValidData()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#__checkValidData,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__checkValidData()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__checkValidData"><a title="libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__checkValidData
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__checkValidData" class="py-name" href="#" onclick="return doclink('link-7', '__checkValidData', 'link-7');">__checkValidData</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L64"></a><tt class="py-lineno"> 64</tt>  <tt class="py-line">            <tt class="py-keyword">if</tt> <tt class="py-keyword">not</tt> <tt class="py-op">(</tt><tt class="py-name">dataRead</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L65"></a><tt class="py-lineno"> 65</tt>  <tt class="py-line">                <tt class="py-name">time</tt><tt class="py-op">.</tt><tt class="py-name">sleep</tt><tt class="py-op">(</tt><tt class="py-number">0.5</tt><tt class="py-op">)</tt> </tt>
</div><a name="L66"></a><tt class="py-lineno"> 66</tt>  <tt class="py-line"> </tt>
<a name="DHT11Temperature.getTemperature"></a><div id="DHT11Temperature.getTemperature-def"><a name="L67"></a><tt class="py-lineno"> 67</tt> <a class="py-toggle" href="#" id="DHT11Temperature.getTemperature-toggle" onclick="return toggle('DHT11Temperature.getTemperature');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#getTemperature">getTemperature</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT11Temperature.getTemperature-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT11Temperature.getTemperature-expanded"><a name="L68"></a><tt class="py-lineno"> 68</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L69"></a><tt class="py-lineno"> 69</tt>  <tt class="py-line"><tt class="py-docstring">        Gets the temperature from the sensor</tt> </tt>
<a name="L70"></a><tt class="py-lineno"> 70</tt>  <tt class="py-line"><tt class="py-docstring">        @return: The temperature read</tt> </tt>
<a name="L71"></a><tt class="py-lineno"> 71</tt>  <tt class="py-line"><tt class="py-docstring">        @rtype: float</tt> </tt>
<a name="L72"></a><tt class="py-lineno"> 72</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L73"></a><tt class="py-lineno"> 73</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-8" class="py-name" targets="Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__getValidData()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#__getValidData,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__getValidData()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__getValidData"><a title="libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__getValidData
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__getValidData" class="py-name" href="#" onclick="return doclink('link-8', '__getValidData', 'link-8');">__getValidData</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L74"></a><tt class="py-lineno"> 74</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__temperature</tt> </tt>
</div><a name="L75"></a><tt class="py-lineno"> 75</tt>  <tt class="py-line"> </tt>
<a name="DHT11Temperature.__readData"></a><div id="DHT11Temperature.__readData-def"><a name="L76"></a><tt class="py-lineno"> 76</tt> <a class="py-toggle" href="#" id="DHT11Temperature.__readData-toggle" onclick="return toggle('DHT11Temperature.__readData');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__readData">__readData</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT11Temperature.__readData-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT11Temperature.__readData-expanded"><a name="L77"></a><tt class="py-lineno"> 77</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L78"></a><tt class="py-lineno"> 78</tt>  <tt class="py-line"><tt class="py-docstring">        Read sensor's raw data.</tt> </tt>
<a name="L79"></a><tt class="py-lineno"> 79</tt>  <tt class="py-line"><tt class="py-docstring">        @return: Boolean</tt> </tt>
<a name="L80"></a><tt class="py-lineno"> 80</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L81"></a><tt class="py-lineno"> 81</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__data</tt> <tt class="py-op">=</tt> <tt class="py-op">[</tt><tt class="py-op">]</tt> </tt>
<a name="L82"></a><tt class="py-lineno"> 82</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">setmode</tt><tt class="py-op">(</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">BCM</tt><tt class="py-op">)</tt> </tt>
<a name="L83"></a><tt class="py-lineno"> 83</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt id="link-9" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
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
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-9', 'setup', 'link-5');">setup</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">OUT</tt><tt class="py-op">)</tt> </tt>
<a name="L84"></a><tt class="py-lineno"> 84</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">output</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">HIGH</tt><tt class="py-op">)</tt> </tt>
<a name="L85"></a><tt class="py-lineno"> 85</tt>  <tt class="py-line">        <tt class="py-name">time</tt><tt class="py-op">.</tt><tt class="py-name">sleep</tt><tt class="py-op">(</tt><tt class="py-number">0.025</tt><tt class="py-op">)</tt> </tt>
<a name="L86"></a><tt class="py-lineno"> 86</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">output</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">LOW</tt><tt class="py-op">)</tt> </tt>
<a name="L87"></a><tt class="py-lineno"> 87</tt>  <tt class="py-line">        <tt class="py-name">time</tt><tt class="py-op">.</tt><tt class="py-name">sleep</tt><tt class="py-op">(</tt><tt class="py-number">0.02</tt><tt class="py-op">)</tt> </tt>
<a name="L88"></a><tt class="py-lineno"> 88</tt>  <tt class="py-line"> </tt>
<a name="L89"></a><tt class="py-lineno"> 89</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt id="link-10" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
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
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-10', 'setup', 'link-5');">setup</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt> <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">IN</tt><tt class="py-op">,</tt> <tt class="py-name">pull_up_down</tt><tt class="py-op">=</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">PUD_UP</tt><tt class="py-op">)</tt> </tt>
<a name="L90"></a><tt class="py-lineno"> 90</tt>  <tt class="py-line"> </tt>
<a name="L91"></a><tt class="py-lineno"> 91</tt>  <tt class="py-line">        <tt class="py-keyword">for</tt> <tt class="py-name">i</tt> <tt class="py-keyword">in</tt> <tt class="py-name">range</tt><tt class="py-op">(</tt><tt class="py-number">0</tt><tt class="py-op">,</tt><tt class="py-number">500</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L92"></a><tt class="py-lineno"> 92</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__data</tt><tt class="py-op">.</tt><tt class="py-name">append</tt><tt class="py-op">(</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">input</tt><tt class="py-op">(</tt><tt class="py-number">23</tt><tt class="py-op">)</tt><tt class="py-op">)</tt> </tt>
<a name="L93"></a><tt class="py-lineno"> 93</tt>  <tt class="py-line"> </tt>
<a name="L94"></a><tt class="py-lineno"> 94</tt>  <tt class="py-line">        <tt class="py-name">bit_count</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L95"></a><tt class="py-lineno"> 95</tt>  <tt class="py-line">        <tt class="py-name">tmp</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L96"></a><tt class="py-lineno"> 96</tt>  <tt class="py-line">        <tt class="py-name">count</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L97"></a><tt class="py-lineno"> 97</tt>  <tt class="py-line">        <tt class="py-name">humidityBit</tt> <tt class="py-op">=</tt> <tt class="py-string">""</tt> </tt>
<a name="L98"></a><tt class="py-lineno"> 98</tt>  <tt class="py-line">        <tt class="py-name">temperatureBit</tt> <tt class="py-op">=</tt> <tt class="py-string">""</tt> </tt>
<a name="L99"></a><tt class="py-lineno"> 99</tt>  <tt class="py-line">        <tt class="py-name">crc</tt> <tt class="py-op">=</tt> <tt class="py-string">""</tt> </tt>
<a name="L100"></a><tt class="py-lineno">100</tt>  <tt class="py-line"> </tt>
<a name="L101"></a><tt class="py-lineno">101</tt>  <tt class="py-line">        <tt class="py-keyword">try</tt><tt class="py-op">:</tt> </tt>
<a name="L102"></a><tt class="py-lineno">102</tt>  <tt class="py-line">            <tt class="py-keyword">while</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__data</tt><tt class="py-op">[</tt><tt class="py-name">count</tt><tt class="py-op">]</tt> <tt class="py-op">==</tt> <tt class="py-number">1</tt><tt class="py-op">:</tt> </tt>
<a name="L103"></a><tt class="py-lineno">103</tt>  <tt class="py-line">                <tt class="py-name">tmp</tt> <tt class="py-op">=</tt> <tt class="py-number">1</tt> </tt>
<a name="L104"></a><tt class="py-lineno">104</tt>  <tt class="py-line">                <tt class="py-name">count</tt> <tt class="py-op">=</tt> <tt class="py-name">count</tt> <tt class="py-op">+</tt> <tt class="py-number">1</tt> </tt>
<a name="L105"></a><tt class="py-lineno">105</tt>  <tt class="py-line"> </tt>
<a name="L106"></a><tt class="py-lineno">106</tt>  <tt class="py-line">            <tt class="py-keyword">for</tt> <tt class="py-name">i</tt> <tt class="py-keyword">in</tt> <tt class="py-name">range</tt><tt class="py-op">(</tt><tt class="py-number">0</tt><tt class="py-op">,</tt> <tt class="py-number">32</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L107"></a><tt class="py-lineno">107</tt>  <tt class="py-line">                <tt class="py-name">bit_count</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L108"></a><tt class="py-lineno">108</tt>  <tt class="py-line"> </tt>
<a name="L109"></a><tt class="py-lineno">109</tt>  <tt class="py-line">                <tt class="py-keyword">while</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__data</tt><tt class="py-op">[</tt><tt class="py-name">count</tt><tt class="py-op">]</tt> <tt class="py-op">==</tt> <tt class="py-number">0</tt><tt class="py-op">:</tt> </tt>
<a name="L110"></a><tt class="py-lineno">110</tt>  <tt class="py-line">                    <tt class="py-name">tmp</tt> <tt class="py-op">=</tt> <tt class="py-number">1</tt> </tt>
<a name="L111"></a><tt class="py-lineno">111</tt>  <tt class="py-line">                    <tt class="py-name">count</tt> <tt class="py-op">=</tt> <tt class="py-name">count</tt> <tt class="py-op">+</tt> <tt class="py-number">1</tt> </tt>
<a name="L112"></a><tt class="py-lineno">112</tt>  <tt class="py-line"> </tt>
<a name="L113"></a><tt class="py-lineno">113</tt>  <tt class="py-line">                <tt class="py-keyword">while</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__data</tt><tt class="py-op">[</tt><tt class="py-name">count</tt><tt class="py-op">]</tt> <tt class="py-op">==</tt> <tt class="py-number">1</tt><tt class="py-op">:</tt> </tt>
<a name="L114"></a><tt class="py-lineno">114</tt>  <tt class="py-line">                    <tt class="py-name">bit_count</tt> <tt class="py-op">=</tt> <tt class="py-name">bit_count</tt> <tt class="py-op">+</tt> <tt class="py-number">1</tt> </tt>
<a name="L115"></a><tt class="py-lineno">115</tt>  <tt class="py-line">                    <tt class="py-name">count</tt> <tt class="py-op">=</tt> <tt class="py-name">count</tt> <tt class="py-op">+</tt> <tt class="py-number">1</tt> </tt>
<a name="L116"></a><tt class="py-lineno">116</tt>  <tt class="py-line"> </tt>
<a name="L117"></a><tt class="py-lineno">117</tt>  <tt class="py-line">                <tt class="py-keyword">if</tt> <tt class="py-name">bit_count</tt> <tt class="py-op">&gt;</tt> <tt class="py-number">3</tt><tt class="py-op">:</tt> </tt>
<a name="L118"></a><tt class="py-lineno">118</tt>  <tt class="py-line">                    <tt class="py-keyword">if</tt> <tt class="py-name">i</tt><tt class="py-op">&gt;=</tt><tt class="py-number">0</tt> <tt class="py-keyword">and</tt> <tt class="py-name">i</tt><tt class="py-op">&lt;</tt><tt class="py-number">8</tt><tt class="py-op">:</tt> </tt>
<a name="L119"></a><tt class="py-lineno">119</tt>  <tt class="py-line">                        <tt class="py-name">humidityBit</tt> <tt class="py-op">=</tt> <tt class="py-name">humidityBit</tt> <tt class="py-op">+</tt> <tt class="py-string">"1"</tt> </tt>
<a name="L120"></a><tt class="py-lineno">120</tt>  <tt class="py-line">                    <tt class="py-keyword">if</tt> <tt class="py-name">i</tt><tt class="py-op">&gt;=</tt><tt class="py-number">16</tt> <tt class="py-keyword">and</tt> <tt class="py-name">i</tt><tt class="py-op">&lt;</tt><tt class="py-number">24</tt><tt class="py-op">:</tt> </tt>
<a name="L121"></a><tt class="py-lineno">121</tt>  <tt class="py-line">                        <tt class="py-name">temperatureBit</tt> <tt class="py-op">=</tt> <tt class="py-name">temperatureBit</tt> <tt class="py-op">+</tt> <tt class="py-string">"1"</tt> </tt>
<a name="L122"></a><tt class="py-lineno">122</tt>  <tt class="py-line">                <tt class="py-keyword">else</tt><tt class="py-op">:</tt> </tt>
<a name="L123"></a><tt class="py-lineno">123</tt>  <tt class="py-line">                    <tt class="py-keyword">if</tt> <tt class="py-name">i</tt><tt class="py-op">&gt;=</tt><tt class="py-number">0</tt> <tt class="py-keyword">and</tt> <tt class="py-name">i</tt><tt class="py-op">&lt;</tt><tt class="py-number">8</tt><tt class="py-op">:</tt> </tt>
<a name="L124"></a><tt class="py-lineno">124</tt>  <tt class="py-line">                        <tt class="py-name">humidityBit</tt> <tt class="py-op">=</tt> <tt class="py-name">humidityBit</tt> <tt class="py-op">+</tt> <tt class="py-string">"0"</tt> </tt>
<a name="L125"></a><tt class="py-lineno">125</tt>  <tt class="py-line">                    <tt class="py-keyword">if</tt> <tt class="py-name">i</tt><tt class="py-op">&gt;=</tt><tt class="py-number">16</tt> <tt class="py-keyword">and</tt> <tt class="py-name">i</tt><tt class="py-op">&lt;</tt><tt class="py-number">24</tt><tt class="py-op">:</tt> </tt>
<a name="L126"></a><tt class="py-lineno">126</tt>  <tt class="py-line">                        <tt class="py-name">temperatureBit</tt> <tt class="py-op">=</tt> <tt class="py-name">temperatureBit</tt> <tt class="py-op">+</tt> <tt class="py-string">"0"</tt> </tt>
<a name="L127"></a><tt class="py-lineno">127</tt>  <tt class="py-line"> </tt>
<a name="L128"></a><tt class="py-lineno">128</tt>  <tt class="py-line">        <tt class="py-keyword">except</tt><tt class="py-op">:</tt> </tt>
<a name="L129"></a><tt class="py-lineno">129</tt>  <tt class="py-line">            <tt class="py-keyword">return</tt> <tt class="py-name">False</tt> </tt>
<a name="L130"></a><tt class="py-lineno">130</tt>  <tt class="py-line"> </tt>
<a name="L131"></a><tt class="py-lineno">131</tt>  <tt class="py-line">        <tt class="py-keyword">try</tt><tt class="py-op">:</tt> </tt>
<a name="L132"></a><tt class="py-lineno">132</tt>  <tt class="py-line">            <tt class="py-keyword">for</tt> <tt class="py-name">i</tt> <tt class="py-keyword">in</tt> <tt class="py-name">range</tt><tt class="py-op">(</tt><tt class="py-number">0</tt><tt class="py-op">,</tt> <tt class="py-number">8</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L133"></a><tt class="py-lineno">133</tt>  <tt class="py-line">                <tt class="py-name">bit_count</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L134"></a><tt class="py-lineno">134</tt>  <tt class="py-line"> </tt>
<a name="L135"></a><tt class="py-lineno">135</tt>  <tt class="py-line">                <tt class="py-keyword">while</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__data</tt><tt class="py-op">[</tt><tt class="py-name">count</tt><tt class="py-op">]</tt> <tt class="py-op">==</tt> <tt class="py-number">0</tt><tt class="py-op">:</tt> </tt>
<a name="L136"></a><tt class="py-lineno">136</tt>  <tt class="py-line">                    <tt class="py-name">tmp</tt> <tt class="py-op">=</tt> <tt class="py-number">1</tt> </tt>
<a name="L137"></a><tt class="py-lineno">137</tt>  <tt class="py-line">                    <tt class="py-name">count</tt> <tt class="py-op">=</tt> <tt class="py-name">count</tt> <tt class="py-op">+</tt> <tt class="py-number">1</tt> </tt>
<a name="L138"></a><tt class="py-lineno">138</tt>  <tt class="py-line"> </tt>
<a name="L139"></a><tt class="py-lineno">139</tt>  <tt class="py-line">                <tt class="py-keyword">while</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__data</tt><tt class="py-op">[</tt><tt class="py-name">count</tt><tt class="py-op">]</tt> <tt class="py-op">==</tt> <tt class="py-number">1</tt><tt class="py-op">:</tt> </tt>
<a name="L140"></a><tt class="py-lineno">140</tt>  <tt class="py-line">                    <tt class="py-name">bit_count</tt> <tt class="py-op">=</tt> <tt class="py-name">bit_count</tt> <tt class="py-op">+</tt> <tt class="py-number">1</tt> </tt>
<a name="L141"></a><tt class="py-lineno">141</tt>  <tt class="py-line">                    <tt class="py-name">count</tt> <tt class="py-op">=</tt> <tt class="py-name">count</tt> <tt class="py-op">+</tt> <tt class="py-number">1</tt> </tt>
<a name="L142"></a><tt class="py-lineno">142</tt>  <tt class="py-line"> </tt>
<a name="L143"></a><tt class="py-lineno">143</tt>  <tt class="py-line">                <tt class="py-keyword">if</tt> <tt class="py-name">bit_count</tt> <tt class="py-op">&gt;</tt> <tt class="py-number">3</tt><tt class="py-op">:</tt> </tt>
<a name="L144"></a><tt class="py-lineno">144</tt>  <tt class="py-line">                    <tt class="py-name">crc</tt> <tt class="py-op">=</tt> <tt class="py-name">crc</tt> <tt class="py-op">+</tt> <tt class="py-string">"1"</tt>     </tt>
<a name="L145"></a><tt class="py-lineno">145</tt>  <tt class="py-line">                <tt class="py-keyword">else</tt><tt class="py-op">:</tt> </tt>
<a name="L146"></a><tt class="py-lineno">146</tt>  <tt class="py-line">                    <tt class="py-name">crc</tt> <tt class="py-op">=</tt> <tt class="py-name">crc</tt> <tt class="py-op">+</tt> <tt class="py-string">"0"</tt> </tt>
<a name="L147"></a><tt class="py-lineno">147</tt>  <tt class="py-line">        <tt class="py-keyword">except</tt><tt class="py-op">:</tt> </tt>
<a name="L148"></a><tt class="py-lineno">148</tt>  <tt class="py-line">            <tt class="py-keyword">return</tt> <tt class="py-name">False</tt> </tt>
<a name="L149"></a><tt class="py-lineno">149</tt>  <tt class="py-line">             </tt>
<a name="L150"></a><tt class="py-lineno">150</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__humidity</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-11" class="py-name" targets="Method libsensorPy.abstractclass.humiditySensor.HumiditySensor._bin2dec()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#_bin2dec,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor._bin2dec()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#_bin2dec,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor._bin2dec()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#_bin2dec"><a title="libsensorPy.abstractclass.humiditySensor.HumiditySensor._bin2dec
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor._bin2dec
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor._bin2dec" class="py-name" href="#" onclick="return doclink('link-11', '_bin2dec', 'link-11');">_bin2dec</a></tt><tt class="py-op">(</tt><tt class="py-name">humidityBit</tt><tt class="py-op">)</tt> </tt>
<a name="L151"></a><tt class="py-lineno">151</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__temperature</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-12" class="py-name"><a title="libsensorPy.abstractclass.humiditySensor.HumiditySensor._bin2dec
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor._bin2dec
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor._bin2dec" class="py-name" href="#" onclick="return doclink('link-12', '_bin2dec', 'link-11');">_bin2dec</a></tt><tt class="py-op">(</tt><tt class="py-name">temperatureBit</tt><tt class="py-op">)</tt> </tt>
<a name="L152"></a><tt class="py-lineno">152</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__crc</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-13" class="py-name"><a title="libsensorPy.abstractclass.humiditySensor.HumiditySensor._bin2dec
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor._bin2dec
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor._bin2dec" class="py-name" href="#" onclick="return doclink('link-13', '_bin2dec', 'link-11');">_bin2dec</a></tt><tt class="py-op">(</tt><tt class="py-name">crc</tt><tt class="py-op">)</tt> </tt>
<a name="L153"></a><tt class="py-lineno">153</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">True</tt> </tt>
</div></div><a name="L154"></a><tt class="py-lineno">154</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
