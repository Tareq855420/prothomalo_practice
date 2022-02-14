<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand"><img src="assets/img/logo.png" alt="" style="height: 65px; width: 260px"></a>
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item"><a href="action.php?pages=home" class="nav-link">সকল খবর</a></li>
            <?php foreach ($categories as $category) { ?>
                <li class="nav-item"><a href="action.php?pages=category-news&&news_id=<?php echo $category['id'] ?>" class="nav-link"><?php echo $category['name'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
</nav>