<?php

require_once 'DBBlackbox.php';
require_once '../oop/AudioTrack.php';


//                 limit  offset
$audioTracks = select(10,   0, 'AudioTrack');

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <ul>
            <?php foreach ($audioTracks as $track) : ?>

            <li>
                <?= $track->name ?>
                by <?= $track->author_name ?>
            </li>

            <?php endforeach; ?>
        </ul>

    </body>

</html>