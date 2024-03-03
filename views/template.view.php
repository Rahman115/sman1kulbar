<?php

$url = $_SERVER["REQUEST_URI"];
$ur = explode("/", $url);

$page = $ur[1];
$view = new view($viewName);

$view->bind('data', $data);
$view->forceRender();