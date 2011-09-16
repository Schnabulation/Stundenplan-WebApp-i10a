<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>
<title>Mittwoch</title>
<meta content="keyword1,keyword2,keyword3" name="keywords" />
<meta content="Description of your page" name="description" />
</head>

<body class="musiclist">

<div id="topbar">
  <div id="title"><div id="leftnav"><a href="index.php"><img alt="home" src="images/home.png" /></a> </div>Donnerstag (Blau)</div>
</div>
<div id="content">
<ul>

<?php
if (time() < 1316383200) {
	echo "<li><span style=\"margin-left:10px; margin-right:10px;\">17:30-21:50</span><span class=\"name\" style=\"padding-left:10px;\">Meth. d/Prog.</span><span class=\"time\">(153/154)</span></li>";
}
else {
	echo "<li><span style=\"margin-left:10px; margin-right:10px;\">18:30-21:50</span><span class=\"name\" style=\"padding-left:10px;\">Alg. & Datenstr.</span><span class=\"time\">(153/154)</span></li>";
}
?>

</ul>
<div id="footer">
	<!-- Support iWebKit by sending us traffic; please keep this footer on your page, consider it a thank you for our work :-) -->
	<a class="noeffect" href="http://snippetspace.com">Powered by iWebKit</a></div>

</body>

</html>
