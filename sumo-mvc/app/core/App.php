<?php
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2017/06/17
 * Time: 10:36 AM
 */


class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    protected $url = '';

    public function __construct()
    {
        $this->parse_url();
        $this->load_controller();
        $this->load_method();
        $this->get_params();
        call_user_func([$this->controller, $this->method], $this->params);
    }

    protected function parse_url()
    {
        if (isset($_GET['url']))
        {
            $this->url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        else
        {
            $this->url = [$this->controller, $this->method];
        }
    }

    protected function load_controller()
    {
        if (file_exists(CONTROLLER_DIR.ucfirst($this->url[0]).'.php'))
        {
            $this->controller = $this->url[0];
            unset($this->url[0]);
        }
        else
        {
            $error = new NotFoundException("The Controller " . $this->url[0] . " could not be found.");
            $error->print_error();
        }


        require_once CONTROLLER_DIR.ucfirst($this->controller).'.php';
        $this->controller = new $this->controller;
    }

    protected function load_method()
    {
        if (isset($this->url[1]))
        {
            if (method_exists($this->controller, $this->url[1]))
            {
                echo 'Yes';
                $this->method = $this->url[1];
                unset($this->url[1]);
            }
            else
            {
                $error = new NotFoundException("The method " . $this->url[1]. " could not be found in the controller " . get_class($this->controller));
                $error->print_error();
            }
        }
    }

    protected function get_params()
    {
        $this->params = $this->url ? array_values($this->url) : [];
    }
}