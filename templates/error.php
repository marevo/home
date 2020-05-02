<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php require __DIR__ . '/head.php'; ?>
<body>
<?php require __DIR__ . '/navigationPanel.php'; ?>
    <div class="container">
        <header>
                <h1><?php   if($_GET['error']) { echo $_GET['error'];  } ?></h1>
        </header>
        <body>

        </body>

    </div>

<?php require __DIR__. '/footer.php' ?></body>
</html>
