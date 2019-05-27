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

echo "
body { 
  background-image: url('./img/$bgcolor_cloud.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
  background-size: auto;
}
";

?>
</style>
</head>
</html>
