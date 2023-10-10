<?php
function headline ($text) {
    echo "<h1>$text</h1>";
}
headline('My website');

function headline2 ($text) {
    return "<h1>$text</h1>";
}
echo headline2('my website2');

$time_served = 0;

while ($time_served < 10) {
    $time_served++;
    echo "served $time_served years";
    echo '<br/>';
}

$time_served2 = 0;

do {
    $time_served2++;
    echo "served $time_served2 years with do while";
    echo '<br/>';
} while ($time_served2 < 10);

$time_served3 = 0;

for($time_served3; $time_served3 < 5; $time_served3++) {
    echo 'has ' . 5 - $time_served3 . ' years to serve with for loop';
    echo '<br/>';
}

for ($i = 10; $i > 0; $i--) {
    if ($i === 2) {
        echo "paroled";
        break;
    }
    echo "$i more years to serve";
    echo '<br/>';
    if ($i > 5) {
        continue;
    }
    echo 'going to parole hearing';
    echo '<br/>';
}






































