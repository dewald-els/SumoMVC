<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <h1>Main page</h1>

        <pre><?php var_dump($this); ?></pre>
        <?php foreach ($this->subviews as $view): ?>
        <?php $this->render($view); ?>
        <?php endforeach; ?>
    </body>
</html>