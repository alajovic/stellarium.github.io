<?php
$locale = (isset($_GET['lang']))? $_GET['lang'] : 'en';

include("init.php");

printf('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN" "http://www.w3.org/TR/REC-html40/strict.dtd">
<html dir="%s" lang="%s">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="MSSmartTagsPreventParsing" content="TRUE" /> 
<meta name="Description" content="%s" />
<meta name="Keywords" content="Stellarium, planetarium, astronomy, software, stars, planets, constellations, meteors, universe, open source, free software, astro, freeware, download, stars, planets, realistic, software, sky, program, scientific, educational, free, real, time, Windows, Linux, Apple, Mac, GPL, milky way, moon, mercury, venus, mars, earth, venus, jupiter, saturn, sun, real time, 3D, openGL, graphic, GL, chart, map, twinkle, photo-realistic, brightness, screenshot" />
<title>%s</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/css/all.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/%s.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="%s" href="https://sourceforge.net/export/rss2_projnews.php?group_id=48857&rss_fulltext=1" />
<!--[if lt IE 8]>
<link href="/css/oldie.css" rel="stylesheet" type="text/css" /> 
<script defer type="text/javascript" src="/js/pngfix.js"></script>
<![endif]-->
	<script>
	function changelang(val) {
 		window.location = "/" + val + "/sponsors.php";
	}
	</script>
</head>',
$langdir,
$locale,
q_("Stellarium is a planetarium software that shows exactly what you see when you look up at the stars. It's easy to use, and free."),
q_("Supporters and friends of Stellarium"),
$langdir,
q_("Stellarium: Project News"));

printf('<body>
<div id="wrapper">
  %s',
  displayLanguageBar());

printf('
<div id="header">
	<div id="latestversion" class="block"><a href="/%s/">%s %s</a></div>
	%s
</div>',
$locale,
q_('latest version'),
$version,
displayDownloadBar());

printf('  
<div id="home">
	<div id="sponsors-describe" class="block">
		<p>%s</p>		
	</div>',
q_("Stellarium is produced by the efforts of the developer team, with the help and support of the following people and organisations:"));

printf('
</div>
<div id="content">
	<div id="stelsponsors" class="block">
		<h2>%s</h2>		
			<ul><li>%s</li><li>%s</li><li>%s</li><li>%s</li></ul>',
q_("sponsors"),
q_("Sourceforge for hosting the project files, website and SVN repositories.  Sourceforge have pushed many terabytes of data for Stellarium during the life of the project."),
q_("Launchpad for hosting the project trackers and translation system."),
sprintf(q_("The %sEuropean Southern Observatory%s for sponsoring and hosting the 2007 Stellarium developer meeting."), "<a href='http://www.eso.org/public/'>", "</a>"),
sprintf(q_("%sSergio Trujillo%s for paying and transfering the stellarium.org domain to us."), "<a href='http://www.andalux.com'>", "</a>"));
printf('
</div>
<div id="community" class="block">
	<h2>%s</h2>
	<p>%s</p>
	<ul><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li><li>%s</li></ul>',
q_("community"),
q_("Special thanks go out to all members of the Stellarium user community."),
q_("Program translators"),
q_("User guide translators"),
q_("Landscape authors"),
q_("Wiki authors"),
q_("Testers and bug reporters"),
q_("Donators"));

printf('
</div>
<div id="friends" class="block">
	<h2>%s</h2>
	<p>%s:</p>
	<ul>
		<li>Johan Meuris (%s)</li>
		<li>Johannes Gajdosik (%s)</li>
		<li>Rob Spearman (%s)</li>		
	</ul>',
q_("past developers"),
q_("Several people have made significant contributions but are no longer active. Their work has made a big difference to the project"),
q_("graphic designer"),
q_("developer"),
q_("developer"));

printf('
	<h2>%s</h2>		
		<ul>
			<li><a href="http://www.hypnosekreis.de/">%s</a></li>
			<li><a href="http://obviouslycloe.com/">%s</a></li>
		</ul>',
q_("friends"),
q_("Praxis Beatrice Ohms"),
q_("Portfolio of Cloe (working on new constellation art)"));

$langlinks = "";	
foreach ($language as $langcode => $langname) {
	$langlinks .= '<a href="/'.$langcode.'/sponsors.php">'.$langname.'</a> ';
};


printf('
</div></div>
<div id="footer">
    <a href="http://sourceforge.net/donate/index.php?group_id=48857"><img src="/img/nd/project.jpg" alt="Support This Project" width="88" height="32" border="0"></a> <a href="http://sourceforge.net/projects/stellarium"><img src="http://sourceforge.net/sflogo.php?group_id=48857&amp;type=5" alt="SourceForge.net Logo" width="108" height="32" border="0"></a>
</div>
<div id="langlist">
%s
</div>
</div>
</body>
</html>',
$langlinks);
?>

