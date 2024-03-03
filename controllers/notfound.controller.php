<?php

class notfoundcontroller extends controller
{

    public function index()
    {
        $meta = array(
            'title' => 'KESALAHAN',
            'desk' => "Terjadi kesalahan dalam penelusuran",
            'keywords' => 'Not Found Argajaladri Mapala Unissula'
        );

        $this->template('notfound', array('title' => 'Data Yang Anda Cari tidak ditemukan'), $meta);

    }
}