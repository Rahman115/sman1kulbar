<?php

// deskripsikan sebuah variabel
define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

include('./config.php');

// include('./class/database.class.php');
include('./class/controller.class.php');
include('./class/model.class.php');
include('./class/view.class.php');
include('./class/url.class.php');

// $url = $_SERVER["REQUEST_URI"];

$url = new url();
$ctrl = new controller();

$controller = './controllers' . DS . $url->pages() . '.controller.php';

// var_dump($controller);

if (file_exists($controller)) {
    include($controller);

    var_dump($url->linked());
    if ($url->linked() == '' || $url->linked() == null) {
        $action = 'index';
    } else {
        $action = $url->linked();
    }
    $f = strtolower($url->pages()) . 'controller';

    $obj = new $f;

    if (method_exists($obj, $action)) {
        $args = array();

        if ($url->args() != '') {
            $args = array('title' => $url->args());
        } else {
            // echo "<script>window.location = 'https://argajaladri.or.id'</script>";
        }
        // run
        call_user_func_array(array($obj, $action), $args);
    } else {

        $args = array();
        $files = './controllers' . DS . 'notfound.controller.php';
        include($files);
        $fx = strtolower('notfoundcontroller');
        $objx = new $fx;
        $action = 'index';
        //  var_dump($objx);
        // echo "<script>window.location = 'https://argajaladri.or.id'</script>";
        call_user_func_array(array('$objx', $action), $args);
    }


} else {


    if ($url->pages() == 'sitemap') {
        //var_dump(); 
        header("Content-Type:text/xml");
        include('./sitemap.xml');
    } else {
        $not = './controllers' . DS . 'notfound' . '.controller.php';
        include($not);
        //$args = array();
        $notfound = new notfoundcontroller();
        call_user_func_array(array($notfound, 'index'), array());
    }

}