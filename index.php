<?php

use \Drips\Image\Image;

$image = new Image('bild.png');
$image->scale(50);
$image->save('bild_neu.png');

 ?>
