<?php 

class view
{
    public $viewName = NULL;
    public $name = array();
    public $isRender = FALSE;

    public $data;

    public function __construct($view)
    {
        $this->viewName = $view;
    }

    public function bind($name, $value = '')
    {
        if (is_array($name)) {
            foreach ($name as $attr => $val) {
                $this->data[$attr] = $val;
            }
        } else
            $this->data[$name] = $value;
    }

    public function forceRender()
    {
        $this->isRender = TRUE;
        extract($this->data);
        $view = 'views' . DS . $this->viewName . '.view.php';

        //return $view;
        if (file_exists($view))
            require_once $view;
        else
            echo ($view . ' Not Found !');
    }

    public function __destruct()
    {
        if (!$this->isRender)
            $this->forceRender();
    }

}