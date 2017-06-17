<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $this->page_title; ?></title>
    </head>
    <body>

        <h1>Main page</h1>

        <?php $this->render('components/header'); ?>

        <?php foreach ($this->subviews as $view): ?>
            <?php $this->render($view); ?>
        <?php endforeach; ?>


        <?php $this->render('components/footer'); ?>

    </body>
</html>