<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $this->page_title; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo Sumo\Core\Assets::css('main'); ?>">
    </head>
    <body>

        <?php $this->render('components/header/index'); ?>

        <?php foreach ($this->subviews as $view): ?>
            <?php $this->render($view); ?>
        <?php endforeach; ?>


        <?php $this->render('components/footer/index'); ?>

    </body>
</html>