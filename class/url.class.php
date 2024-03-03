<?php

// URL Class Master
class url
{
    private $urli;

    public function __construct()
    {
        $this->urli = $_SERVER["REQUEST_URI"];
    }

    public function pages()
    {
        $ur = explode("/", $this->urli);

        // 1 untuk menggunakan server web dan 2 untuk lokalhost
        if ($ur[1] == null) {
            $ur[1] = 'home';
        }

        return $ur[1];
    }

    public function linked()
    {
        $link = explode("/", $this->urli);
        // 2 untuk server web dan 3 untuk lokalhost
        if ($link[2] == null) {
            $link[2] = '';
        }
        // var_dump($link);
        return $link[2];
    }

    public function args()
    {
        $link = explode("/", $this->urli);
        // 3 untuk server web dan 4 untuk lokalhost
        if ($link[3] == null) {
            $link[3] = '';
        }
        // var_dump($link);
        return $link[3];
    }
} // end class url