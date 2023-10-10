<?php

$people = [
    [
        'name' => 'John David Washington',
        'job' => 'actor'
    ],
    [
        'name' => 'Robert Pattinson',
        'job' => 'actor'
    ],
    [
        'name' => 'Christopher Nolan',
        'job' => 'director'
    ],
    [
        'name' => 'Steven Spielberg',
        'job' => 'director'
    ],
    [
        'name' => 'Michael Caine',
        'job' => 'actor'
    ]
];

$cast_crew = [
  'actors' => [],
  'directors' => [],
];

foreach ($people as $person) {
  if ($person['job'] === 'actor') {
    $cast_crew['actors'][] = $person['name'];
  }
  if ($person['job'] === 'director') {
    $cast_crew['directors'][] = $person['name'];
  }
}

$default_values = [
    'title' => null,
    'year' => null,
    'plot' => null,
    'duration' => null,
];
 
$movie = [
    'title' => 'Tenet',
    'year' => 2020,
    'rating' => 7.5,
    'duration' => 150,
];

$movie = array_merge($default_values, $movie);

$movies = [
    [
        'title' => 'Dunkerk',
        'year' => 2017,
        'pg' => 13,
        'favourite' => false
    ],
    [
        'title' => 'Tenet',
        'year' => 2020,
        'pg' => 13
    ],
    [
        'title' => 'Interstellar',
        'year' => 2014,
        'pg' => 13,
        'favourite' => false
    ],
    [
        'title' => 'Inception',
        'year' => 2010,
        'pg' => 13,
        'favourite' => true
    ],
    [
        'title' => 'The Prestige',
        'year' => 2006,
        'pg' => 13
    ],
    [
        'title' => 'Batman begins',
        'year' => 2005,
        'pg' => 12,
        'favourite' => true
    ],
    [
        'title' => 'The Dark Knight',
        'year' => 2008,
        'pg' => 12,
        'favourite' => true
    ],
    [
        'title' => 'The Dark Knight Rises',
        'year' => 2012,
        'pg' => 12,
        'favourite' => false
    ],
];

$fave_movies = [];
foreach ($movies as $movie) {
  if (isset($movie['favourite']) && $movie['favourite']) {
    $fave_movies[] = $movie;
  }
}

$movies = [
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
];

echo '<ol>';
foreach($movies as $movie) {
  echo '<li>{$movie}</li>';
}

$movie_names = [
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0111161' => 'The Shawshank redemption',
  'tt0071562' => 'The Godfather II',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club',
  'tt0068646' => 'The Godfather',
];
$movie_ratings = [
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
];

foreach($movie_names as $id => $movie) {
  echo '<li>{$movie} - {$movie_ratings[$id]}</li>';
}

$order = $_GET['order'];
$url = 'http://www.home.test/your-path-to-file/index.php?order=desc';

if ($order === 'asc') {
  asort($movie_ratings);
}

foreach($movie_ratings as $id => $rating) {
  echo "<li>{$movie_names[$id]} - {$rating}</li>";
}

$movies = [];
foreach($movie_ratings as $id => $rating) {
  $movies[] = [
    'name' => $movie_names[$id],
    'rating' => $rating,
  ];
}

// sort from highest to lowest rating
// name tie-breaker is sorted A-Z
uasort($movies, function($a, $b) {
    if ($a['rating'] > $b['rating']) {
        return -1;
    }
    if ($a['rating'] == $b['rating']) {
        if ($a['name'] < $b['name']) {
            return -1;
        }
        if ($a['name'] < $b['name']) {
            return 0;
        }
        if ($a['name'] > $b['name']) {
            return 1;
        }
    }
    if ($a['rating'] < $b['rating']) {
        return 1;
    }
});

$messages = [
  'error' => [
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ],
  'warning' => [
    'This is your first warning',
    'This is your final warning'
  ],
  'success' => [
    'Finally, something was successful.'
  ]
];

foreach ($messages as $type => $messages) {
  foreach ($messages as $message) {
    echo "<div class='message {$type}'>{$message}</div>";
  }
}

function do_something_risky() {
  // pretend to do the risky stuff
 
  // return new messages
  return [
    'error' => [
      'I knew this would happen!',
      'This always happens.'
    ],
    'warning' => [
      'You should fix this before proceeding'
    ],
    'success' => []
  ];
}
 
// let's try it
$new_messages = do_something_risky();
foreach ($messages as $type => $message) {
  $messages[$type] = array_merge($message, $new_messages[$type]);
}


?>