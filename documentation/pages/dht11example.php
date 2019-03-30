<!--<?php
$siteUrl = "http://libsensorpy.com/";
?> -->

<div class="section" id="examples">
	<h1>Using DHT11Temperature Sensor <a class="headerlink" href="#welcome-to-libsensorpy-s-documentation" title="Permalink to this headline">¶</a></h1>
	<p>
		The following example demonstrates how simple is to get the temperature read by the dht11 sensor.
	</p>
	<!--python code here-->
	<div class="hlcode">
		<div class="highlight">
			<pre>
				<span class="sd">'''Created on 11/02/2015</span>

				<span class="sd">@author: Junior Mascarenhas</span>
				<span class="sd">'''</span>

				<span class="kn">from</span> <span class="nn">concretefactory.temperatureSensorFactory</span> <span class="k">import</span> <span class="n">TemperatureSensorFactory</span>
				<span class="k">if</span> <span class="n">__name__</span> <span class="o">==</span> <span class="s">'__main__'</span><span class="p">:</span>

				    <span class="n">dht11</span> <span class="o">=</span> <span class="n">TemperatureSensorFactory</span><span class="o">.</span><span class="n">createSensor</span><span class="p">(</span><span class="s">"DHT11Temperature"</span><span class="p">)</span>
				    <span class="nb">print</span> <span class="p">(</span><span class="s">"Temperature in Celsius: "</span> <span class="o">+</span> <span class="n">dht11</span><span class="o">.</span><span class="n">getTemperature</span><span class="p">()</span> <span class="o">+</span> <span class="s">u"</span><span class="se">\u00b0</span><span class="s">"</span> <span class="o">+</span> <span class="s">"C"</span><span class="p">)</span>
				    <span class="nb">print</span> <span class="p">(</span><span class="s">"Temperature in Fahrenheit: "</span> <span class="o">+</span> <span class="n">dht11</span><span class="o">.</span><span class="n">getTemperatureInFahrenheit</span><span class="p">()</span> <span class="o">+</span><span class="s">"F"</span><span class="p">)</span>
				    <span class="nb">print</span> <span class="p">(</span><span class="s">"Temperature in Kelvin: "</span> <span class="o">+</span> <span class="n">dht11</span><span class="o">.</span><span class="n">getTemperatureInKelvin</span><span class="p">()</span> <span class="o">+</span><span class="s">"K"</span><span class="p">)</span>

				</pre>
</div>
	</div>

	<!--end python code -->
	<div class="toctree-wrapper compound">
		<ul class="simple"></ul>
	</div>
</div>
