<?php 
require_once('../source/config.php');
include('../source/data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include('../source/views/menu.php');
?>
<div class="container">
    <div class="blokjes">
        <?php
        foreach($library as $single){
            include('../source/views/card.php');
        }
        ?>
    </div>
</div>
</body>
</html>