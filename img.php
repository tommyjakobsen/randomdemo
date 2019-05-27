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



function LoadPNG($imgname)
{
    /* Attempt to open */
    $im = @imagecreatefrompng($imgname);

    /* See if it failed */
    if(!$im)
    {
        /* Create a blank image */
        $im  = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        /* Output an error message */
        imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
    }

    return $im;
}

header('Content-Type: image/png');

$img = LoadPNG('./img/howdoesitwork.png');
$red   = imagecolorallocate($img, 255, 0, 0);
imagesetthickness($img, 3);

imageline($img, 450, 60, 180, 320, $green);

// Path to our ttf font file
$font_file = './font/PlayfairDisplay-Bold.ttf';

// Draw the text
imagefttext($img, 13, 0, 200, 130, $red, $font_file, "1\nLogon to Ansible\nstart playbook");
imagefttext($img, 13, 0, 50, 450, $red, $font_file, "2\nGet Openshift secret\nfrom Vault");
imagefttext($img, 13, 0, 50, 530, $red, $font_file, "3\nUse values from\nAnsible survey");

//DEPLOY LINE
imageline($img, 200, 570, 520, 570, $green);
imagefttext($img, 13, 0, 330, 530, $red, $font_file, "4\nDeploy");

//APP LINE
imageline($img, 450, 80, 580, 230, $red);

//Get git code
imageline($img, 700, 600, 800, 100, $green);
imagefttext($img, 13, 0, 700, 130, $red, $font_file, "5\nGet Code\nfrom SCM");

//BUILD AND DEPLOY
imagefttext($img, 13, 0, 750, 640, $red, $font_file, "6\nBuild Image\nand Deploy");


//Container
$container = imagecreatefrompng('img/small_container.png');
$container = imagescale($container, 100);
imagesetthickness($img, 3);
imagesetbrush($img, $container);

imageline($img, 880, 500, 880, 500, IMG_COLOR_BRUSHED);
imageline($img, 700, 500, 700, 500, IMG_COLOR_BRUSHED);
imageline($img, 880, 500, 880, 500, IMG_COLOR_BRUSHED);

imagefttext($img, 13, 0, 620, 380, $red, $font_file, "7\nContainers\nRunning");


//INFRA
imagefttext($img, 13, 0, 820, 220, $red, $font_file, "8\nApp Exposed\nthrough Infra");


//THE PAGE
$cloud = imagecreatefrompng("./img/${bgcolor}_cloud.png");
$cloud = imagescale($cloud, 150);
imagesetthickness($img, 3);
imagesetbrush($img, $cloud);

imageline($img, 600, 50, 600, 80, IMG_COLOR_BRUSHED);

imagefttext($img, 13, 0, 550, 80, $black, $font_file, "8\n$title");


imageantialias($img, true);

imagepng($img);
imagedestroy($img);


?>
