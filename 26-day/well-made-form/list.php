<?php

require_once 'Song.php';
require_once 'DBBlackbox.php';

$songs = select(10, 0, 'Song');

?>

<a href="create.php">Add new song</a>

<ul>
    <?php foreach ($songs as $song) : ?>
    <li>
        <?= $song->name ?>

        <a href="edit.php?id=<?= $song->id ?>">EDIT</a>
    </li>
    <?php endforeach; ?>
</ul>