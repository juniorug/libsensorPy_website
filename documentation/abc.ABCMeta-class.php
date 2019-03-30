
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>abc.ABCMeta</title>
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
        abc ::
        ABCMeta ::
        Class&nbsp;ABCMeta
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="abc.ABCMeta-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
</div>
</div>
<!-- ==================== TYPE DESCRIPTION ==================== -->
<h1 class="epydoc">Type ABCMeta</h1><p class="nomargin-top"></p>
<center>
<center>  <map id="uml_class_diagram_for_abc_abcm" name="uml_class_diagram_for_abc_abcm">
<area shape="rect" id="node0" href="abc.ABCMeta-class.php#__instancecheck__" title="Override for isinstance(instance, cls)." alt="" coords="17,559,271,577"/>
<area shape="rect" id="node0" href="abc.ABCMeta-class.php#__new__" title="abc.ABCMeta.__new__" alt="" coords="17,577,271,596"/>
<area shape="rect" id="node0" href="abc.ABCMeta-class.php#__subclasscheck__" title="Override for issubclass(subclass, cls)." alt="" coords="17,596,271,615"/>
<area shape="rect" id="node0" href="abc.ABCMeta-class.php#register" title="Register a virtual subclass of an ABC." alt="" coords="17,615,271,633"/>
<area shape="rect" id="node1" href="abc.ABCMeta-class.php" title="Metaclass for defining Abstract Base Classes (ABCs)." alt="" coords="5,526,283,639"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="type.__abstractmethods__" alt="" coords="77,31,209,49"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="type.__base__" alt="" coords="77,49,209,68"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="type.__bases__" alt="" coords="77,68,209,87"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="type.__basicsize__" alt="" coords="77,87,209,105"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="type.__dictoffset__" alt="" coords="77,105,209,124"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="type.__flags__" alt="" coords="77,124,209,143"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="type.__itemsize__" alt="" coords="77,143,209,161"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="type.__mro__" alt="" coords="77,161,209,180"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="type.__name__" alt="" coords="77,180,209,199"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="type.__weakrefoffset__" alt="" coords="77,199,209,217"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="x(...)" alt="" coords="77,220,209,239"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="x.__delattr__(&#39;name&#39;) &lt;==&gt; del x.name" alt="" coords="77,239,209,257"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="x==y" alt="" coords="77,257,209,276"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="x&gt;=y" alt="" coords="77,276,209,295"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="x.__getattribute__(&#39;name&#39;) &lt;==&gt; x.name" alt="" coords="77,295,209,313"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="x&gt;y" alt="" coords="77,313,209,332"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="hash(x)" alt="" coords="77,332,209,351"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="x.__init__(...) initializes x; see help(type(x)) for signature" alt="" coords="77,351,209,369"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="x&lt;=y" alt="" coords="77,369,209,388"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="x&lt;y" alt="" coords="77,388,209,407"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="x!=y" alt="" coords="77,407,209,425"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="repr(x)" alt="" coords="77,425,209,444"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="x.__setattr__(&#39;name&#39;, value) &lt;==&gt; x.name = value" alt="" coords="77,444,209,463"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="type.__subclasses__" alt="" coords="77,463,209,481"/>
<area shape="rect" id="node1" href="javascript:void(0);" title="return a type&#39;s method resolution order" alt="" coords="77,481,209,500"/>
<area shape="rect" id="node2" href="javascript:void(0);" title="type(object) &#45;&gt; the object&#39;s type type(name, bases, dict) &#45;&gt; a new type" alt="" coords="65,6,220,506"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_abc_abcm.gif" alt='' usemap="#uml_class_diagram_for_abc_abcm" ismap="ismap" class="graph-without-title" />
</center>
</center>
<hr />
<p>Metaclass for defining Abstract Base Classes (ABCs).</p>
  <p>Use this metaclass to create an ABC.  An ABC can be subclassed 
  directly, and then acts as a mix-in class.  You can also register 
  unrelated concrete classes (even built-in classes) and unrelated ABCs as 
  'virtual subclasses' -- these and their descendants will be considered 
  subclasses of the registering ABC by the built-in issubclass() function, 
  but the registering ABC won't show up in their MRO (Method Resolution 
  Order) nor will method implementations defined by the registering ABC be 
  callable (not even via super()).</p>

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
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">bool</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="abc.ABCMeta-class.php#__instancecheck__" class="summary-sig-name">__instancecheck__</a>(<span class="summary-sig-arg">cls</span>,
        <span class="summary-sig-arg">instance</span>)</span><br />
      Override for isinstance(instance, cls).</td>
          <td align="right" valign="top">
            
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">bool</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="abc.ABCMeta-class.php#__subclasscheck__" class="summary-sig-name">__subclasscheck__</a>(<span class="summary-sig-arg">cls</span>,
        <span class="summary-sig-arg">subclass</span>)</span><br />
      Override for issubclass(subclass, cls).</td>
          <td align="right" valign="top">
            
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a name="_dump_registry"></a><span class="summary-sig-name">_dump_registry</span>(<span class="summary-sig-arg">cls</span>,
        <span class="summary-sig-arg">file</span>=<span class="summary-sig-default">None</span>)</span><br />
      Debug helper to print the ABC registry.</td>
          <td align="right" valign="top">
            
            
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
          <td><span class="summary-sig"><a name="register"></a><span class="summary-sig-name">register</span>(<span class="summary-sig-arg">cls</span>,
        <span class="summary-sig-arg">subclass</span>)</span><br />
      Register a virtual subclass of an ABC.</td>
          <td align="right" valign="top">
            
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code>type</code></b>:
      <code>__call__</code>,
      <code>__delattr__</code>,
      <code>__eq__</code>,
      <code>__ge__</code>,
      <code>__getattribute__</code>,
      <code>__gt__</code>,
      <code>__hash__</code>,
      <code>__init__</code>,
      <code>__le__</code>,
      <code>__lt__</code>,
      <code>__ne__</code>,
      <code>__repr__</code>,
      <code>__setattr__</code>,
      <code>__subclasses__</code>,
      <code>mro</code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__format__</code>,
      <code>__reduce__</code>,
      <code>__reduce_ex__</code>,
      <code>__sizeof__</code>,
      <code>__str__</code>,
      <code>__subclasshook__</code>
      </p>
    </td>
  </tr>
</table>
</div>
</div>
<!-- ==================== STATIC METHODS ==================== -->
<a name="section-StaticMethods"></a>
<div class="panel panel-info">
      <div class="panel-heading">
      	<table border="0" cellpadding="0" cellspacing="0" width="100%">
      		<tr valign="top">	
        		<td align="left"><span class="table-header">
        			<h3 class="panel-title" id="panel-title">Static Methods<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
        		</span></td>
        		<td align="right" valign="top"><span class="options">
        			[<a href="#section-StaticMethods"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]
        		</span></td>
        	</tr>
    	</table>
      </div>
      <div class="panel-body">
      	<table border="0" cellpadding="0" cellspacing="0" width="100%">	
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">a new object with type S, a subtype of T</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="abc.ABCMeta-class.php#__new__" class="summary-sig-name">__new__</a>(<span class="summary-sig-arg">mcls</span>,
        <span class="summary-sig-arg">name</span>,
        <span class="summary-sig-arg">bases</span>,
        <span class="summary-sig-arg">namespace</span>)</span></td>
          <td align="right" valign="top">
            
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
</table>
</div>
</div>
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
        <a name="_abc_invalidation_counter"></a><span class="summary-name">_abc_invalidation_counter</span> = <code title="14">14</code>
    </td>
  </tr>
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
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code>type</code></b>:
      <code>__abstractmethods__</code>,
      <code>__base__</code>,
      <code>__bases__</code>,
      <code>__basicsize__</code>,
      <code>__dictoffset__</code>,
      <code>__flags__</code>,
      <code>__itemsize__</code>,
      <code>__mro__</code>,
      <code>__name__</code>,
      <code>__weakrefoffset__</code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__class__</code>
      </p>
    </td>
  </tr></td></tr>
</table>
</div>
</div>
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
<a name="__instancecheck__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__instancecheck__</span>(<span class="sig-arg">cls</span>,
        <span class="sig-arg">instance</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    >&nbsp;
    </td>
  </tr></table>
  
  <p>Override for isinstance(instance, cls).</p>
  <dl class="fields">
    <dt>Returns: bool</dt>
    <dt>Overrides:
        type.__instancecheck__
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="__new__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__new__</span>(<span class="sig-arg">mcls</span>,
        <span class="sig-arg">name</span>,
        <span class="sig-arg">bases</span>,
        <span class="sig-arg">namespace</span>)</span>
    <br /><em class="fname">Static Method</em>
  </h3>
  </td><td align="right" valign="top"
    >&nbsp;
    </td>
  </tr></table>
  
  
  <dl class="fields">
    <dt>Returns: a new object with type S, a subtype of T</dt>
    <dt>Overrides:
        object.__new__
        <dd><em class="note">(inherited documentation)</em></dd>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="__subclasscheck__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__subclasscheck__</span>(<span class="sig-arg">cls</span>,
        <span class="sig-arg">subclass</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    >&nbsp;
    </td>
  </tr></table>
  
  <p>Override for issubclass(subclass, cls).</p>
  <dl class="fields">
    <dt>Returns: bool</dt>
    <dt>Overrides:
        type.__subclasscheck__
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

<table border="0" cellpadding="0" cellspacing="0" width="100%%">
  <tr>
    <td align="left" class="footer">
    Generated by Epydoc 3.0.1 on Mon Apr 13 18:16:26 2015
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
