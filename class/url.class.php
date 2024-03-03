<?php

// URL Class Master
class url
{
    private $urli;
    public $li = array();
    public $link = array();
    public $exp = array();

    public function __construct()
    {
        $this->urli = $_SERVER["REQUEST_URI"];
        $this->exp = explode("/", $this->urli);

        // var_dump(count($this->exp));
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
        // $this->link = explode("/", $this->urli);
        // 2 untuk server web dan 3 untuk lokalhost
        foreach ($this->exp as $k => $val) {
            $this->li[$k] = $val;
            // if (count($this->exp) > 3) {
            // array_push($this->exp, 's');
        }

        if (count($this->exp) < 4) {
            $this->li[3] = '';
        }

        // var_dump($this->li);
        return $this->li[3];
    }

    public function args()
    {
        foreach ($this->exp as $k => $val) {
            $this->li[$k] = $val;
            // if (count($this->exp) > 3) {
            // array_push($this->exp, 's');
        }

        if (count($this->exp) < 5) {
            $this->li[4] = '';
        }

        // var_dump($this->li);
        return $this->li[4];

    }
} // end class url