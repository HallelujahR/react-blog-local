<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Laravel 5.5 ReactJS CRUD Example</title>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css">
        <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        </script>
    </head>
    <body>
        <div id="crud-app"></div>
        <script src="<?php echo e(asset('js/app.js')); ?>" ></script>
    </body>
</html>
