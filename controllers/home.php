<?php
$title = 'Home';
$scripts =
    [
        'public/assets/pixi_min.js',
        'public/assets/index.js'
    ];
$styles =
    [
        'public/assets/index.css',
        'public/assets/pers_font_color.css'
    ];

$years= $pdo->prepare('SELECT * FROM years WHERE yearM > 1979 AND yearM < 2018 ;');
$years->bindParam(':id',$_GET['article']);
$years->execute();
$years = $years->fetchAll();

include '../views/pages/home.php';