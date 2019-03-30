<div class="section">
	<h1>Installation<a name="LibsensorPy_Installation"></a></h1>
	<p>
		The following installation instructions are provided to install, upgrade, and uninstall the LibsensorPy libraries,
		examples, utility scripts, etc. directly on your Rasbperry Pi.
		<b>These instructions are not intended to install LibsensorPy on your development workstation or other computer.</b>
		For development conducted on a computer other than the Raspberry Pi, please access the compressed LibsensorPy via
		<a href="<?=$siteUrl ?>download">download</a> them directly import them in your project.
	</p>
	<ul>
		<li>
			<a href="#Prerequisites">Prerequisites</a>
			<ul>
				<li>
					<a href="#Configure_SPI_I2C_ports">Configure and enable SPI and I2C ports on raspperry</a>
				</li>
				<li>
					<a href="#RPi_GPIO_Native_Library">RPi.GPIO Native Library</a>
				</li>
				<li>
					<a href="#Pigpio_Library">Pigpio Library</a>
				</li>
				<li>
					<a href="#setuptools">Setuptools</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#Installation">Installation</a>
			<ul>
				<li>
					<a href="#EasyPreferred">Easy/Preferred</a>
				</li>
				<li>
					<a href="#OfflineManual">Offline/Manual</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#Upgrade">Upgrade</a>
			<ul>
				<li>
					<a href="#EasyPreferred">Easy/Preferred</a>
				</li>
				<li>
					<a href="#OfflineManual">Offline/Manual</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#Uninstall">Uninstall</a>
		</li>
	</ul>
	<hr>
</div>
<div class="section">
	<h3>Prerequisites<a name="Prerequisites"></a></h3>
	<h4>Configure and enable SPI and I2C ports on Raspperry<a name="Configure_SPI_I2C_ports"></a></h4>
	<p>
		Download and install python-smbus and  i2c-tools:
		<br/>
		<br/>
		<code>
			sudo apt-get install python-smbus
		</code>
		<br/>
		<code>
			sudo apt-get install i2c-tools
		</code>
	</p>
	<p>
		For Raspbian users, check /etc/modprobe.d/raspi-blacklist.conf and comment "blacklist i2c-bcm2708" and "blacklist spi-bcm2708" by running:
		<br/>
		<br/>
		<code>
			sudo nano /etc/modprobe.d/raspi-blacklist.conf
		</code>
		<br/>
		<br/>
		And adding a # (if its not there):

		<ul>
			<li>
				# blacklist i2c-bcm2708
			</li>
			<li>
				# blacklist spi-bcm2708
			</li>

		</ul>
	</p>
	<h4>RPi.GPIO Native Library<a name="RPi_GPIO_Native_Library"></a></h4>
	<p>
		LibsensorPy depends on the raspberry-gpio-python native library by Ben Croston. Please see the following page for more information on raspberry-gpio-python.
		<br />
		<a class="externalLink" href="https://pypi.python.org/pypi/RPi.GPIO">https://pypi.python.org/pypi/RPi.GPIO</a>
		<br />
		<br />
		Installing RPi_GPIO:
		<br />
		<br />
		<code>
			sudo apt-get update</code>
		<br/>
		<code>
			sudo apt-get install python-dev python-rpi.gpio</code>
		<br/>
	</p>

	<h4>Pigpio Library<a name="Pigpio_Library"></a></h4>
	<p>
		Pigpio is a C library for the Raspberry which allows control of the general purpose input outputs (gpios). Please see the following page for more information on Pigpio.
		<br />
		<a class="externalLink" href="http://abyz.co.uk/rpi/pigpio/">http://abyz.co.uk/rpi/pigpio/</a>
		<br />
		<br />
		Installing Pigpio:
		<br />
		<br />
		<code>
			wget abyz.co.uk/rpi/pigpio/pigpio.zip</code>
		<br/>
		<code>
			unzip pigpio.zip</code>
		<br/>
		<code>
			cd PIGPIO</code>
		<br/>
		<code>
			sudo make</code>
		<br/>
		<code>
			sudo make install</code>
	</p>
	<h4>Setuptools<a name="setuptools"></a></h4>
	<p>
		If you are installing LibsensorPy without using pip, you will need to install setuptools too:
		<br />
		<br />
		<code>
			sudo apt-get install python-setuptools</code>
	</p>
	<hr>
</div>

<div class="section">
	<h3>Installation<a name="Installation"></a></h3>
	<h4>Easy/Preferred<a name="EasyPreferred"></a></h4>
	<p>
		(NOTE: This installation method requires that your RaspberryPi is connected to the Internet.)
	</p>
	<p>
		The simplest method to install LibsensorPy on your RaspberryPi is to execute the following command directly on your RaspberryPi.
		<br />
		<br />
		<code>
			sudo pip install libsensorPy</code>
	</p>
	<p>
		This method will download and launch an installation script that perform the following steps:
	</p>
	<ol style="list-style-type: decimal">
		<li>
			Download LibsensorPy files.
		</li>
		<li>
			Install LibsensorPy to the standard location for third-party Python modules. On Raspberry it is generally located at <i>/usr/local/lib/pythonX.Y/site-packages</i>
		</li>
	</ol>

	<h4>Offline/Manual<a name="OfflineManual"></a></h4>
	<p>
		If you prefer/need to install LibsensorPy on a RaspberryPi device without an Internet connection, the following instructions provide the steps necessary to install LibsensorPy without requiring an Internet connection.
	</p>
	<p>
		First, download a copy of the latest LibsensorPy compressed (.tar.gz) file to your local computer. You can download the LibsensorPy using your web browser at the following URL:
		<br>
		<a class="externalLink" href="http://libsensorpy.com/dld/libsensorPy-0.0.7.tar.gz">http://libsensorpy.com//dld/libsensorPy-0.0.7.tar.gz</a>
	</p>
	<p>
		Next, you will need to transfer the download compressed file over to your RaspberryPi. You can use any method you prefer to transfer the file (USB, SCP, FTP, etc.)
	</p>
	<p>
		(NOTE: If you have a previous version of LibsensorPy installed, you will need to uninstall it first.)
	</p>
	<p>
		Once the compressed file is available on your RaspberryPi, use the following command on the Pi to perform the installation:
		<br />
		<br />
		<code>
			tar -zxvf libsensorPy-0.0.7.tar.gz</code>
		<br/>
		<code>
			cd libsensorPy-0.0.7/</code>
		<br/>
		<code>
			sudo python setup.py install</code>
	</p>
	<hr>
</div>

<div class="section">
	<h3>Upgrade<a name="Upgrade"></a></h3>
	<h4>Easy/Preferred<a name="EasyPreferred"></a></h4>
	<p>
		If you originally installed LibsensorPy using the <i>'easy'</i> method, then LibsensorPy upgrades will be available anytime you perform a system update using 'sudo apt-get update' and 'sudo update-get upgrade'.
	</p>
	<p>
		If you wish to force an upgrade of the LibsensorPy package only, you can do so by executing the following command:
		<br />
		<br />
		<code>
			sudo pip install LibsensorPy --upgrade</code>
	</p>

	<h4>Offline/Manual<a name="OfflineManual"></a></h4>
	<p>
		If you originally installed LibsensorPy using the <i>'offline'</i> method, then you will need to manually uninstall the LibsensorPy module and download, transfer, and install the new version module using the 'offline' uninstall and installation methods described here on this page.
	</p>
	<hr>
</div>

<div class="section">
	<h3>Uninstall<a name="Uninstall"></a></h3>
	<p>
		If you originally installed LibsensorPy using the <i>'easy'</i> method, then you can uninstall LibsensorPy simply by executing the following command on your RaspberryPi.
		<br />
		<br />
		<code>
			sudo pip uninstall LibsensorPy</code>
	</p>
	<hr>

</div>
