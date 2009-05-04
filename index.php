<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>#!/var/www/1337days.net</title>
<meta name="description" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="/style.css" media="screen" />
</head>
<body>
<div id="wrap">
<div id="header">
<h1><a href="#">1337 Days</a></h1>
<h2>
<? 
$quote = array(
1  => "stfu!",
2  => "gtfo!",
3  => "watch porn!",
4  => "eat a dead baby!",
5  => "die in a fire!",
6  => "read a book!",
7  => "give me money!",
8  => "play with yourself!",
9  => "jump off a bridge!",
10  => "become a lawyer!",
11  => "make an WMD!",
12  => "support terrorism!",
13  => "rm -rf /",
14  => "kill a kitty!",
15  => "rape a slut!",
);
srand ((double) microtime() * 1000000);
$randnum = rand(1,15); 
echo"roflcopter sez: $quote[$randnum]";
?>
</h2>
</div>
<div id="menu">
 <a href="/">/root</a>
 <a href="/q/about">/about</a>
 <a href="/q/code">/code</a>
<a href="/q/howto">/howto</a>
<a href="/q/archlinux">/archlinux</a>
<a href="/q/touch">/contact</a>
<a href="/q/out">/blog</a>
<br />
<?php
$page = Array();
$page['trig'] = "xyz";

$pgm = $_GET[($page['trig'])];
if($pgm=="archlinux" OR $pgm=="aur" OR $pgm=="contrib" OR $pgm=="repo") {
echo("archlinux: <a href=\"/q/aur\">/aur</a>
<a href=\"/q/contrib\">/contributions</a>
<a href=\"/q/repo\">/repo</a>");
}
?>
</div>
<div id="content">
<?php$page = Array();

$page['home'] = "news";
$page['error'] = "404";
$page['format'] = ".xu";
$page['trig'] = "xyz";

if (empty($_GET[($page['trig'])])) $pg = $page['home'].$page['format'];
elseif (!file_exists($_GET[($page['trig'])].$page['format'])) $pg = $page['error'].$page['format'];
else $pg = $_GET[($page['trig'])].$page['format'];

include($pg);
?> 
</div>
<div id="footer">
<b>Friends</b>: <a href="http://www.infectious.cc">chi</a> <br />
<a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a> - <a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a><br />
<b>#EOF#</b>
</div> 
</div>
</body>
</html>