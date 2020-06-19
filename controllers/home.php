<?php
$title = 'Home';
$scripts =
    [
        './public/assets/pixi_min.js',
        './public/assets/home.js'
    ];
$styles =
    [
        './public/assets/home.css',
        './public/assets/pers_font_color.css'
    ];

$years= $pdo->prepare('SELECT * FROM years WHERE yearM > 1979 AND yearM < 2020 ;');
$years->execute();
$years = $years->fetchAll();

$topFromEachYear = $pdo->prepare('
SELECT DISTINCT * FROM song s INNER JOIN toGetAll t ON t.SongID = s.songID ORDER BY yearTOpA ASC');
$topFromEachYear->execute();
$topFromEachYear = $topFromEachYear->fetchAll();




include './views/pages/home.php';