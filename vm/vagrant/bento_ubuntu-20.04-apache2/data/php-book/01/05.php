<?php

if(isset($_GET['message']))
{
    $font = dirname(__FILE__).'/fonts/blazed.ttf';
    $size = 12;
    $image = imagecreatefrompng("button.png");
    $tsize = imagegettfbbox($size,0,$font,$_GET['message']);

    $dx = abs($tsize[2] - tsize[0]);
    $dy = abs($tsize[5] - tsize[3]);
    $x  = (imagesx($image) - $dx) / 2;
    $y  = (imagesy($image) - $dy) / 2;

    $black = imagecolorallocate($im,0,0,0);
    imagetftext($image,$size,0,$x,$y,$black,$font,$_GET['message']);

    header("Content-type: image/png");
    imagepng($image);

    exit;
}

?>

<html>
    <head>
    <title> example-05 </title>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
        Enter message to appear on button: 
        <input type="text" name="message"/>
        <br/>
        <input type="submit" value="Create Button"/>
        <br/>
        </form>
    </body>
</html>