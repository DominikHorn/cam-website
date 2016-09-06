<?php
/*  include '../php/browserUtil.php';
  
  $ua = getBrowserInfo();
  $yourbrowser = "Your browser: " . $ua['name'] . " " . $ua['version'] . 
  " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];

  echo $yourbrowser;*/
  if( $_POST["name"] || $_POST["age"] ) {
    if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
      die ("invalid name and name should be alpha");
    }
      
    echo "Welcome ". $_POST['name']. "<br />";
    echo "You are ". $_POST['age']. " years old.";
      
    exit();
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cosmetics and More</title>
</head>
<body>
  <form action = "<?php $_PHP_SELF ?>" method = "POST">
    Name: <input type = "text" name = "name" />
    Age: <input type = "text" name = "age" />
    <input type = "submit" />
  </form>
</body>
</html>