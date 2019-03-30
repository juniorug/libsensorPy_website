<div class="section" id="welcome-to-libsensorpy-s-documentation">
    <h1>
        Welcome to libsensorPy!
        <a class="headerlink" href="<?=$siteUrl?>#welcome-to-libsensorpy-s-documentation"
            title="Permalink to this headline">&para</a>
    </h1>
    <p>
        LibsensorPy is an extensible open source python library, which allows
        the user to interact with environment through sensors and actuators coupled
        to the Raspberry Pi as well as add new sensors/actuators and easy way to
        practice, thereby strengthening the use of free hardware, aiming to solve
        problems of a physical nature. With this library the user only need keep
        focus on implementing their application business logic using the data that
        the solution delivery already processed, since LibsensorPy provides the
        abstractions of the main necessary resources for the processing.
    </p>
    <p>
        LibsensorPy provides a simple abstraction layer between user's application
        and the actual sensor Hardware, allowing to drop in any comparable sensor
        with only one or two lines of code to change in the project that uses the
        library. Its goal is to facilitate the creation of ubiquitous systems using
        the Raspberry Pi. The tool is implemented in Python and is designed to
        facilitate the inclusion of new sensors, families and factories of sensors,
        as well as ease of use by the user, abstracting technical and behaviors
        specific to that system's type, using design patterns and following the
        SOLID principles.
    </p>
    <p>
        The library's differential is the use of Abstract Factory pattern, allowing
        sensors and events from the same family work together, to be easily exchanged
        if necessary and the same type of sensors may be replaced without being
        necessary changes in existing code. The library also provides basic and
        composite sensors according to the client's needs, as well as a set of
        events related to specific types of sensors and unit conversions.
    </p>
    <div class="toctree-wrapper compound">
        <ul class="simple">
        </ul>
    </div>
</div>
<!--adicionados por mim-->
<div class="section" id="news-announcements">
    <h1>
        News / Announcements
        <a class="headerlink" href="<?=$siteUrl?>#indices-and-tables" title="Permalink to this headline">&para</a>
    </h1>
    <b>
    2015-04-23
    </b>
    <p>
        Version 0.0.7 has been pre-released and is already available for download.
        (
        <a href="download">Downloads</a>
        |
        <a href="./install">Installation</a>
        )
    </p>
    <p>
        New development and bug fixes will now be provided via the 1.0-SNAPSHOT
        builds and the latest development codebase will now be maintained in the
        'develop' branch. In addtition to maintenance and bug fixes, the 1.0-SNAPSHOT
        build also includes new sensors and implement the events.
    </p>
    <div class="toctree-wrapper compound">
        <ul class="simple">
        </ul>
    </div>
</div>
<div class="section" id="project-status">
    <h1>
        Project Status
        <a class="headerlink" href="<?=$siteUrl?>#indices-and-tables" title="Permalink to this headline">&para</a>
    </h1>
    <p>
        Please note that this project is continually under development. The functionality
        is very stable but we need help to improvements and bug fixes by tests,
        and we would like to have these feedbacks committed into the
        <a class="externalLink" href="https://github.com/juniorug/libsensorPy">develop</a>
        branch in the libsensorPy GitHub repository and SNAPSHOT builds are published
        in the
        <a href="https://pypi.python.org/pypi/libsensorPy/">Pypi repository</a>
        .
    </p>
    <p>
        You are welcome to start using and integrating this library in your project.
        Please provide any feedback good, bad or ugly. (
        <i>
        We'll maybe keep the ugly feedback to a minimum.
        </i>
        )
    </p>
    <p>
        Visit the
        <a href="download">Downloads</a>
        page to download the latest libsensorPy library builds.
    </p>
    <div class="toctree-wrapper compound">
        <ul class="simple">
        </ul>
    </div>
</div>
<div class="section" id="features">
    <h1>
        Features
        <a class="headerlink" href="<?=$siteUrl?>#indices-and-tables" title="Permalink to this headline">&para</a>
    </h1>
    <ul>
        <li>
            Manipulate sensor data to delivery readable standard values for users
        </li>
        <li>
            Change any comparable sensor with only one or two lines of code to change
            in the project that uses the library.
        </li>
        <li>
            Convert measurement units
        </li>
        <li>
            Configure GPIO pin direction
        </li>
        <li>
            Control/write GPIO pin states
        </li>
        <li>
            Easy to extend the library and add new sensor
        </li>
        <li>
            Automatically set GPIO states on program termination (GPIO cleanup)
        </li>
        <li>
            Triggers for automation based on event state changes
        </li>
        <li>
            Basic and Composite sensors
        </li>
    </ul>
    <div class="toctree-wrapper compound">
        <ul class="simple">
        </ul>
    </div>
</div>
<div class="section" id="getting-started">
    <h1>
        Getting Started
        <a class="headerlink" href="<?=$siteUrl?>#indices-and-tables" title="Permalink to this headline">&para</a>
    </h1>
    <p>
        The simplest method to install libsensorPy on your RaspberryPi is to execute
        the following command directly on your RaspberryPi.
        <br>
        <br>
        <code>
        sudo pip install libsensorPy
        </code>
    </p>
    <p>
        To get started using the libsensorPy library, please see the following
        pages:
    </p>
    <ul>
        <li>
            <a href="install">Installation</a>
        </li>
        <li>
            <a href="usage">Usage</a>
        </li>
    </ul>
    <div class="toctree-wrapper compound">
        <ul class="simple">
        </ul>
    </div>
</div>
<div class="section" id="examples">
    <h1>
        Examples
        <a class="headerlink" href="<?=$siteUrl?>#indices-and-tables" title="Permalink to this headline">&para</a>
    </h1>
    <p>
        Review each of the following examples to explore the functionality provided
        by the libsensorPy library.
    </p>
    <ul>
        <li>
            <a href="dht11example">DHT11Temperature Example</a>
        </li>
    </ul>
    <div class="toctree-wrapper compound">
        <ul class="simple">
        </ul>
    </div>
</div>
<!--end adicionados por mim-->
<div class="section" id="indices-and-tables">
    <h1>
        Indices and tables
        <a class="headerlink" href="<?=$siteUrl ?>#indices-and-tables" title="Permalink to this headline">&para</a>
    </h1>
    <ul class="simple">
        <li>
            <a class="reference internal" href="genindex"><em>Index</em></a>
        </li>
        <li>
            <a class="reference internal" href="py-modindex"><em>Module Index</em></a>
        </li>
        <li>
            <a class="reference internal" href="search"><em>Search Page</em></a>
        </li>
    </ul>
</div>