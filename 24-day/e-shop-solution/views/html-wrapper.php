<?php

$site_url = 'http://www.cbp-exercises.test/day24-php/exercise-solutions/include-require-eshop';

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>My eshop</title>

    <link rel="stylesheet" href="css/main.css" />

</head>
<body>

    <div id="page">

        <!-- header -->
        <?php include 'header.php' ?>

        <!-- topmenu -->
        <?php include 'topmenu.php' ?>

        <div id="content">

            <!-- homepage/layout -->
            <?php include $current_page .'/layout.php' ?>

        </div>

        <!-- footer -->
        <?php include 'footer.php' ?>

    </div>

</body>
</html>