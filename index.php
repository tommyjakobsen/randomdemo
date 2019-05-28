<html>
<head>
<style>
<?php

if(getenv('background') !== false)
    {
        $bgcolor=getenv('background');
     }else{
	$bgcolor="blue";
     }

if(getenv('title') !== false)
    {
        $title=getenv('title');
     }else{
        $title="My little place...";
     }

echo "
body { 
  background-image: url('./img/${bgcolor}_cloud.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: auto;
}
";

?>


a:link {
  text-decoration: none;
  color: white;
}

a:visited {
  text-decoration: none;
  color: white;
}

a:hover {
  text-decoration: underline;
  color: white;
}

a:active {
  text-decoration: underline;
  color: white;
}


</style>
</head>
<body>
<?php
echo " <h1>${title}'s first container in the clouds...</h1>";
echo "<br><h3><a href='./about.php'>[ About ]</br></h3>";
?>

</body>
</html>
