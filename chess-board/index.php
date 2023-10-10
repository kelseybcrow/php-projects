<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="board">

      <?php for($i = 0; $i < 8; $i++) { ?>
      <div class="row">

        <?php 
                if($i % 2 === 0) {
                    include 'odd.php';
                } else {
                    include 'even.php';
                }
            ?>

      </div>
      <?php } ?>
  </body>

</html>