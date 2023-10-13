<?php

require_once 'Song.php';
require_once 'DBBlackbox.php';

// prepare empty entity
$song = new Song;

// update entity from request
$song->name     = $_POST['name'] ?? $song->name; // if 'name' was not found in $_POST data, keep the current value
$song->author   = $_POST['author'] ?? $song->author;
$song->length   = intval($_POST['length'] ?? $song->length);
$song->album    = $_POST['album'] ?? $song->album;

// yes change:
// $song->album    = $_POST['album'];

// no change:
// $song->album    = $song->album;

// somehow insert the entity into the database and generate a unique ID
// here done using DBBlackbox
// $id = insert($song);
$song->save();