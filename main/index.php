<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="../element/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_dischi</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
<?php include __DIR__.'/../element/API.php' ?>
<header>
    roba del header
</header>
<div class="container-card" >
    <?php
        foreach ($response as $key) {?>
            <ul class="card" >
                <img src="<?=$key['poster']?>" alt="">
                <li><?=$key['title']?></li>
                <li><?=$key['author']?></li>
                <li><?=$key['genre']?></li>
                <li><?=$key['year']?></li>
            </ul>
        <?php }

    ?>
</div>
</body>
</html>