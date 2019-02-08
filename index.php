<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License
Name       : Lorikeet 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140314
-->
<?php
    session_start();
?>

<head>
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="indexStyles.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Coding Challenge</a></h1>
		</div>
	</div>
	<div id="banner" class="container">
		<div class="title">
			<h2>
                Preview Cost of Benefits
            </h2>
			<span class="byline">
                This tool provides a preview of the cost of supplying benefits
                to your employees.
            </span>
		</div>
		<ul class="actions">
			<li>
				<a href="#wrapper" class="button">
				Get Started</a>
			</li>
		</ul>
	</div>
</div>
<div id="wrapper">
    <div id="three-column" class="container">
        <div class="title">
            <h2>Get Started: Load File</h2>
        </div>
        <div class="boxA">
            <p>
                Upload a csv file with employees and dependents. 
                To see the proper file format click the Help button.
            </p>
            <form class="form" action="loadFileHandler.php" method="POST" enctype="multipart/form-data">
                <input type="file" id="fileToUpload" name="fileToUpload" accept=".csv">
                <input type="submit" value="Calculate" class="button
                button-alt" name="submit">
            </form>
            <a href="help.php" class="button button-alt">Help</a>
        </div>
    </div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
