<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License
Name       : Lorikeet 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140314
-->
<head>
<title></title>
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="Styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="wrapper">
	<div id="three-column" class="container">
    	<div class="banner">
	        <img src="banner.jpg" alt="" />
        </div>
		<div class="title">
			<h2>Preliminary Benefits Cost and Breakdown</h2>
		</div>
		<div class="boxA">
           
            <?php
                session_start();
    
                echo '<h1>Annual Cost:</h1>';
                echo '<h1>$'.$_SESSION['annualCostTotal'].'<h1><br>';
            
                echo '<hr>';
            
                echo '<h2>Annual Cost Breakdown</h2><br>';
      
                echo '<h3>Cost of Employees whose Last Name does NOT start ';
                echo 'with \'A\':</h3><h1 class=\'number\'>  $';
                echo $_SESSION['annualCostEmpNorm'].'</h1><br>';
           
                echo '<h3>Cost of Employees whose Last Name does start with';
                echo ' \'A\':</h3><h1>$'.$_SESSION['annualCostEmpDis'];
                echo '</h1><br>';
           
                echo '<h3>Cost of All Employees';
                echo ':</h3><h1>$'.$_SESSION['annualCostEmpAll'].'</h1><br>';
                echo '<hr>';
      
                echo '<h3>Cost of Dependents whose Last Name does NOT start ';
                echo 'with \'A\':</h3><h1 class=\'number\'>  $';
                echo $_SESSION['annualCostDepNorm'].'</h1><br>';
           
                echo '<h3>Cost of Dependents whose Last Name does start with';
                echo ' \'A\':</h3><h1>$'.$_SESSION['annualCostDepDis'];
                echo '</h1><br>';
           
                echo '<h3>Cost of All Dependents';
                echo ':</h3><h1>$'.$_SESSION['annualCostDepAll'].'</h1><br>';
            ?>
           
		</div>
        

		<div class="boxB">
            <?php
            
                echo '<h1>Pay Period Cost:</h1>';
                echo '<h1>$'.round($_SESSION['payperiodTotal'],2).'<h1><br>';

                echo '<hr>';
            
		        echo '<h2>Pay Period Cost Breakdown</h2><br>';
                echo '<h3>Cost of Employees whose Last Name does NOT start ';
                echo 'with \'A\':</h3><h1 class=\'number\'>  $';
                echo round($_SESSION['payperiodCostEmpNorm'],2).'</h1><br>';
           
                echo '<h3>Cost of Employees whose Last Name does start with';
                echo ' \'A\':</h3><h1>$';
                echo round($_SESSION['payperiodCostEmpDis'],2);
                echo '</h1><br>';
           
                echo '<h3>Cost of All Employees';
                echo ':</h3><h1>$';
                echo round($_SESSION['payperiodCostEmpAll'].'</h1><br>');
                echo '<hr>';
      
                echo '<h3>Cost of Dependents whose Last Name does NOT start ';
                echo 'with \'A\':</h3><h1 class=\'number\'>  $';
                echo round($_SESSION['payperiodCostDepNorm'], 2).'</h1><br>';
           
                echo '<h3>Cost of Dependents whose Last Name does start with';
                echo ' \'A\':</h3><h1>$';
                echo round($_SESSION['payperiodCostDepDis'], 2);
                echo '</h1><br>';
           
                echo '<h3>Cost of All Dependents';
                echo ':</h3><h1>$';
                echo round($_SESSION['payperiodCostDepAll'],2).'</h1><br>';
            ?>
           
			<a href="index.php" class="button button-alt">Start Over</a>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
