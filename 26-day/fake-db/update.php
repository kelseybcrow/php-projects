<?php

require_once 'DBBlackbox.php';
require_once '../oop/AudioTrack.php';

$track = find(4, 'AudioTrack');

$track->length = 153;

$track->save();