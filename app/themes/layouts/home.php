<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once Config::path('app') . '/themes/includes/meta.php'; ?>
        <?php require_once Config::path('app') . '/themes/layouts/home/head.php'; ?>
    </head>
    <body>
        <div id="wrapper">
            <?php require_once $content; ?>            
        </div>
        <?php require_once Config::path('app') . '/themes/layouts/admin/scripts.php'; ?>
    </body>
</html>