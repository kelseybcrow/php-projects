<?php

require_once 'Song.php';
require_once 'DBBlackbox.php';

// find the ID of the record we want to edit in the request
$id = $_GET['id'];

// somehow retrieve existing data from some storage
$song = find( $id, 'Song' );

// update entity from request
$song->name     = $_POST['name'] ?? $song->name; // if 'name' was not found in $_POST data, keep the current value
$song->author   = $_POST['author'] ?? $song->author;
$song->length   = intval($_POST['length'] ?? $song->length);
$song->album    = $_POST['album'] ?? $song->album;

// somehow save the data into the database (using the unique ID)
// update($id, $song);
$song->save();