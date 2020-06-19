<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="<?= URL ?>/assets/images/favicon.png"/>
        <title><?= !empty($title) ? $title : 'Title is empty' ?></title>
        <link rel="stylesheet" href="<?= URL ?>public/assets/reset.css">
        <link rel="stylesheet" href="<?= URL ?>public/assets/style.css">
        <?php
        if(!empty($styles))
        {
            foreach ($styles as $style)
            {
                echo '<link rel="stylesheet" href="'. URL . $style .'">';
            }
        }
        ?>
    </head>
    <body>
        <header>
        </header>