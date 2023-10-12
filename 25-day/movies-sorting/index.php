<?php

include 'data.php';
require_once 'functions.php';

$orderby = $_GET['orderby'] ?? 'title';
$orderway = $_GET['orderway'] ?? 'asc';

$sorted_movies = sortMovies($movies, $orderby, $orderway);

$columns = [
    'title' => 'Title',
    'year' => 'Year',
    'rating' => 'Rating'
];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        th,
        td {
            border: 1px solid silver;
            padding: 0.25em 0.5em;
        }

        .order-indicator {
            display: none;
        }

        .order--asc .order-indicator {
            display: inline-block;
            transform: rotate(-90deg);
        }

        .order--desc .order-indicator {
            display: inline-block;
            transform: rotate(90deg);
        }
        </style>
    </head>

    <body>
        <a href="?orderby=title&orderway=asc">Order by title (asc)</a>
        <a href="?orderby=title&orderway=desc">Order by title (desc)</a>
        <a href="?orderby=rating&orderway=asc">Order by rating (asc)</a>
        <a href="?orderby=rating&orderway=desc">Order by rating (desc)</a>
        <a href="?orderby=year&orderway=asc">Order by year (asc)</a>
        <a href="?orderby=year&orderway=desc">Order by year (desc)</a>

        <table>
            <thead>
                <tr>
                    <?php foreach ($columns as $slug => $name) : ?>

                    <th>
                        <?php if ($orderby === $slug) : ?>
                        <a href="?orderby=<?= $slug ?>&orderway=desc" class="order--asc"></a>
                        <?php else : ?>
                        <a href="?orderby=<?= $slug ?>&orderway=asc" class="order--desc">
                            <?php endif; ?>
                            <? $name ?>
                            <div class="order-indicator">&gt;</div>
                        </a>
                    </th>

                    <?php endforeach; ?>
                    
                </tr>
            </thead>
            <tbody>

                <?php foreach ($sorted_movies as $movie) : ?>

                    <tr>
                        <td><?= $movie['title'] ?></td>
                        <td><?= $movie['year'] ?></td>
                        <td><?= $movie['rating'] ?></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>

    </body>

</html>