<?php

// URL Class Master
class url
{
    private $urli;
    public $link = array("", "", "", "", "");

    public function __construct()
    {
        $this->urli = $_SERVER["REQUEST_URI"];
    }

    public function pages()
    {
        $ur = explode("/", $this->urli);

        // var_dump($this->urli);

        // 1 untuk menggunakan server web dan 2 untuk lokalhost
        if ($ur[2] == null) {
            $ur[2] = 'dashboard';
        }

        return $ur[2];
    }

    public function verifikasiURL()
    {
        $this->link = explode("/", $this->urli);

    }
    public function linked()
    {
        $this->link = explode("/", $this->urli);
        // 2 untuk server web dan 3 untuk lokalhost

        if ($this->link[3] == null) {
            $this->link[3] = '';
        }
        var_dump($this->link);
        return $this->link[3];
    }

    public function args()
    {
        $link = explode("/", $this->urli);
        // 3 untuk server web dan 4 untuk lokalhost
        if ($this->link[4] == null) {
            $this->link[4] = '';
        }
        // var_dump($link);
        return $this->link[4];
    }
} // end class url