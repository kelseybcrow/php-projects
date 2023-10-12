<?php 
    for($k = 0; $k < 4; $k++) { ?>
<div class="white"></div>
<div class="black">

    <?php if ($i === 4 && $k === 0) { ?>
    <div class="image">
        <img src="./img/king.png" alt="king">
    </div>
    <?php } ?>

    <?php if ($i === 0 && $k === 2) { ?>
    <div class="image">
        <img src="./img/queen.png" alt="queen">
    </div>
    <?php }   ?>

</div>
<?php } ?>