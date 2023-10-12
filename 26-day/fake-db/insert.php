<?php

require_once 'DBBlackbox.php';
require_once '../oop/AudioTrack.php';


$audioTrack = new AudioTrack;
// $audioTrack->name = 'Imagine';
// $audioTrack->author_name = 'John Lennon';

$audioTrack->name = 'Let it be';
$audioTrack->author_name = 'The Beatles';


$audioTrack->save();

// $id = insert($audioTrack);

// var_dump($id);