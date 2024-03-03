<?php

$url = $_SERVER["REQUEST_URI"];
$ur = explode("/", $url);

$page = $ur[1];
$view = new view($viewName);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8" />
    <meta name="description" content="<?php echo $meta['desk']; ?>">

    <meta name="keywords" content="<?php echo $meta['keywords']; ?>">

    <meta name="author" content="AbuduChoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <title></title>

    <link rel="stylesheet" href="<?php echo STYLE; ?>style.min.css">

</head>

<body>
    <?php
    $view->bind('data', $data);
    $view->forceRender();
    ?>
</body>

</html>