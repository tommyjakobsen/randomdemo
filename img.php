<?php

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
 
imageline($img, 100, 50, 200, 200, IMG_COLOR_BRUSHED);



imageantialias($img, true);

imagepng($img);
imagedestroy($img);


?>
