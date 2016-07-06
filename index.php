<?php

use \Drips\Image\Image;

require_once __DIR__.'/vendor/autoload.php';

$image = new Image('bild.png');
$image->scale(50);
$image->save('bild_neu.png');

 ?>
