<html>
<head>
<script>
var to = 2;
function gogo(){
var d=new Date(),
    dummy=d.getTime(),
        i=0,
        pix=document.images;
for(; i < pix.length; i++){
if(pix[i].className!=='refr'){continue;}
else{
var obj = pix[i],
    s_rc=obj.getAttribute('src'),
    pure_src = s_rc.substring(0,s_rc.indexOf('x=x')+3);
obj.setAttribute('src',pure_src+'&'+dummy);
obj.setAttribute('title',pure_src+'&'+dummy);
obj.nextSibling.innerHTML=obj.getAttribute('src');
}
}
setTimeout(gogo,to*500);
}
onload=gogo;
</script>


<style>
<?php

if(isset($_GET[counter]))
        {
        $counter=$counter+$_GET["counter"];
        }else{
        $counter=0;
        }

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



?>
</style>
</head>
<body>

<script>
function refreshIframe(){
var iframe = document.getElementById('myframe');
iframe.src = iframe.src;
}
setInterval(refreshIframe, 10000);
</script>

<?php
//print_r($_SERVER);
echo "<center><h1>How did ${title} come around?</h1>";
echo "<table border=0 cellspacing=0 width=100% height=100%>";
echo "<tr><td align=middle><iframe width=100% height=100% src=\"http://$_SERVER[HTTP_HOST]/img.php?counter=".$counter."\" frameBorder=\"1\" scrolling=\"no\" id='myframe' width=270></iframe>
</td></tr>
</table></center>";


?>

</body>
</html>
