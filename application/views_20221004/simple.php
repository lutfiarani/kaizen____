<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>fullPage.js A simple Demo</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage very simple demo." />
	<meta name="keywords"  content="fullpage,jquery,demo,simple" />
	<meta name="Resource-type" content="Document" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/fullpage/fullpage.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/fullpage/examples.css" />
</head>
<body>

<select id="demosMenu">
    <option selected>Choose Demo</option>
    <option id="simple">Simple</option>
    <option id="custom-arrows">Custom arrows</option>
    <option id="hide-sections">Hide sections</option>
    <option id="scroll-after-fullpage">Scroll after fullpage</option>
    <option id="observer">Observer</option>
    <option id="jquery-adapter">jQuery adapter</option>
    <option id="active-slide">Active section and slide</option>
    <option id="auto-height">Auto height</option>
    <option id="autoplay-video-and-audio">Autoplay Video and Audio</option>
    <option id="backgrounds">Background images</option>
    <option id="backgrounds-fixed">Fixed fullscreen backgrounds</option>
    <option id="background-video">Background video</option>
    <option id="callbacks">Callbacks</option>
    <option id="continuous-horizontal">Continuous horizontal (paid)</option>
    <option id="continuous-vertical">Continuous vertical</option>
    <option id="parallax">Parallax (paid)</option>
    <option id="cards">Cards 3d (paid)</option>
    <option id="water-effect">Water effect (paid)</option>
    <option id="drop-effect">Drop effect (paid)</option>
    <option id="css3">CSS3</option>
    <option id="drag-and-move">Drag And Move (paid)</option>
    <option id="easing-css3">Easing CSS</option>
    <option id="easing-js">Easing JS</option>
    <option id="fading-effect">Fading Effect (paid)</option>
    <option id="fixed-headers">Fixed headers</option>
    <option id="gradient-backgrounds">Gradient backgrounds</option>
    <option id="interlocked-slides">Interlocked Slides (paid)</option>
    <option id="looping">Looping</option>
    <option id="methods">Methods</option>
    <option id="navigation-vertical">Vertical navigation dots</option>
    <option id="navigation-horizontal">Horizontal navigation dots</option>
    <option id="navigation-tooltips">Navigation tooltips</option>
    <option id="no-anchor">No anchor links</option>
    <option id="normal-scroll">Normal scrolling</option>
    <option id="normalScrollElements">Normal scroll elements</option>
    <option id="offset-sections">Offset sections (paid)</option>
    <option id="one-section">One single section</option>
    <option id="reset-sliders">Reset sliders (paid)</option>
    <option id="responsive-auto-height">Responsive Auto Height</option>
    <option id="responsive-height">Responsive Height</option>
    <option id="responsive-width">Responsive Width</option>
    <option id="responsive-slides">Responsive Slides (paid)</option>
    <option id="scrollBar">Scroll bar enabled</option>
    <option id="scroll-horizontally">Scroll horizontally (paid)</option>
    <option id="scrollOverflow">Scroll inside sections and slides</option>
    <option id="scrollOverflow-reset">ScrollOverflow Reset (paid)</option>
    <option id="lazy-load">Lazy load</option>
    <option id="scrolling-speed">Scrolling speed</option>
    <option id="trigger-animations">Trigger animations</option>
    <option id="vue-fullpage">Vue component</option>
    <option id="react-fullpage">React component</option>
    <option id="angular-fullpage">Angular component</option>
  </select>

<div id="fullpage">
	<div class="section active" id="section0"><h1>fullPage.js</h1></div>
    <div class="section" id="section1">
        <div class="slide "><h1>Simple Demo</h1></div>
        <div class="slide active"><h1>Only text</h1></div>
        <div class="slide"><h1>And text</h1></div>
        <div class="slide"><h1>And more text</h1></div>
    </div>
	<div class="section" id="section2"><h1>No wraps, no extra markup</h1></div>
    <div class="section" id="section3"><h1>Just the simplest demo ever</h1></div>
</div>



<script type="text/javascript" src="<?php echo base_url();?>template/fullpage/fullpage.js"></script>
<script type="text/javascript">
	var myFullpage = new fullpage('#fullpage', {
		sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff']
	});
</script>
</body>
</html>