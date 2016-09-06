<!DOCTYPE html>
<html>
<head>
	<title>Cosmetics and More</title>
</head>
<body>
	<div>
    	<?php
      		include '../php/browserUtil.php';

		    $ua = getBrowserInfo();
   			$yourbrowser = "Your browser: " . $ua['name'] . " " . $ua['version'] . 
   			" on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
   
        // Dies ist ein test

   			echo $yourbrowser;
      	?>
   </div>
</body>
</html>