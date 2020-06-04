
<?php
$HP= 100;

define('MAX_DAMAGE', 25);
define('MIN_DAMAGE', 5);

$damage= 0;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
      <body>
    <?php
         do {
            $damage = rand(MIN_DAMAGE, MAX_DAMAGE);
            $HP= $HP- $damage;
            if ($HP <= -1) {
                $HP= 0;
            }

    ?> <br> Utrpel jsi <?= $damage ?> bodu poskozeni zbyva ti <?= $HP ?> HP. </br>
    <?php
         } while ($HP > 0 );
        
    ?> 
    <p> GAME OVER </p>

      </body>
</html>