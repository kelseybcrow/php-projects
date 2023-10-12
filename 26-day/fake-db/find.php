<?php

require_once 'DBBlackbox.php';
require_once '../oop/AudioTrack.php';

$track = find(1, 'AudioTrack');

var_dump($track);