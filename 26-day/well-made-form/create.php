<?php

require_once 'Song.php';

// prepare an empty entity
$song = new Song;

?>

<h1>Create a new song</h1>

<a href="list.php">Back to list</a>

<form action="insert.php" method="post">

    <!-- display the form prefilled with entity data -->

    Name:<br>
    <input type="text" name="name" value="<?= htmlspecialchars((string)$song->name) ?>"><br>
    <br>

    Author:<br>
    <input type="text" name="author" value="<?= htmlspecialchars((string)$song->author) ?>"><br>
    <br>

    Length:<br>
    <input type="number" name="length" value="<?= htmlspecialchars((string)$song->length) ?>"> seconds<br>
    <br>

    Album:<br>
    <input type="text" name="album" value="<?= htmlspecialchars((string)$song->album) ?>"
        placeholder="Please fill in the album"><br>
    <br>

    <button type="submit">Save</button>

</form>