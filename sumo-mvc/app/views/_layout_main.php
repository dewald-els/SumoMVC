<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->page_title; ?></title>
    </head>
    <body>

        <h1>Main page</h1>

        <?php foreach ($this->subviews as $view): ?>
            <?php $this->render($view); ?>
        <?php endforeach; ?>

    </body>
</html>