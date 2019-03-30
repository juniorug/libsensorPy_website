# Welcome to libsensorPy! 
LibsensorPy is an extensible open source python library, which allows the user to interact with environment through sensors and actuators coupled to the Raspberry Pi 
as well as add new sensors/actuators and easy way to practice, thereby strengthening the use of free hardware, aiming to solve problems of a physical nature. With this 
library the user only need keep focus on implementing their application business logic using the data that the solution delivery already processed, since LibsensorPy 
provides the abstractions of the main necessary resources for the processing.

LibsensorPy provides a simple abstraction layer between user's application and the actual sensor Hardware, allowing to drop in any comparable sensor with only one or 
two lines of code to change in the project that uses the library. Its goal is to facilitate the creation of ubiquitous systems using the Raspberry Pi. The tool is 
implemented in Python and is designed to facilitate the inclusion of new sensors, families and factories of sensors, as well as ease of use by the user, abstracting 
technical and behaviors specific to that system's type, using design patterns and following the SOLID principles.

The library's differential is the use of Abstract Factory pattern, allowing sensors and events from the same family work together, to be easily exchanged if necessary 
and the same type of sensors may be replaced without being necessary changes in existing code. The library also provides basic and composite sensors according to the 
client's needs, as well as a set of events related to specific types of sensors and unit conversions.


More info on [libsensorPy.com](http://libsensorpy.com/) :dog:
