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
  background-position: center; 
  background-size: cover;
}
";

?>
</style>
</head>
<body>
<h3>$title</h3>

</body>
</html>
