<?php

class controller
{

    protected function views($viewName)
    {
        $view = new view($viewName);
        return $view;
    }

    protected function template($viewName, $data = array(), $meta = array())
    {
        $view = new view('template');
        $view->bind('viewName', $viewName);
        $view->bind('data', $data);
        $view->bind('meta', $meta);
    }

    protected function model($tabel)
    {

        // var_dump($tabel);
        $mod = new model($tabel);
        return $mod;
    }

    protected function waktu($value)
    {
        // $dt = new tanggal($value);
        // return $dt;
    }
}