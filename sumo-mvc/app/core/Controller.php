<?php

/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2017/06/17
 * Time: 10:37 AM
 */
class Controller
{
    protected $page_title = '';

    public function __construct()
    {
        $this->subviews = [];
    }

    protected function model($model, $property_name = '')
    {
        require_once MODEL_DIR . ucfirst($model) . '.php';
        if ($property_name != '') {
            $this->{$property_name} = new $model;
        }
        else
        {
            $this->{$model} = new $model;
        }
    }

    protected function add_data($key, $val) {
        $this->{$key} = $val;
    }

    protected function add_view($subview = '')
    {
        $this->subviews[] = $subview;
    }

    protected function render($view = '_layout_main')
    {
        if (file_exists(VIEW_DIR . $view . '.php'))
        {
            require_once VIEW_DIR . $view . '.php';
        }
    }
}