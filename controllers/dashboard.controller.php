<?php

class dashboardcontroller extends controller
{

    public function index()
    {

        $arr = $this->model('artikel');
        //var_dump($arr->dataArray());
        $dt = $arr->dataArray();
        // $this->template('beranda', array('title' => 'home'));
        //$this->template('home', array('title' => 'home', 'dt' => $arr->dataArray()));
        // <!-- content=""> -->
        // <!-- <meta name="keywords" content=""> -->
        $meta = array(
            'title' => 'Argajaladri Mapala Unissula',
            'desk' => "Mapala Argajaladri adalah organisasi mahasiswa pencinta alam di Universitas Islam Sultan Agung Semarang",
            'keywords' => 'Mapala Unissula, Mapala Unissula Semarang, Penggiat Alam Bebas Semarang'
        );

        $this->template('home', array('title' => 'HOME', 'dt' => $dt), $meta);



    }
}