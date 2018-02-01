<?php
namespace Sumo\Core;

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

    /**
     * Create a new instance of a model.
     * @deprecated Being replaced with Autoloading.
     * @param $model
     * @param string $property_name
     */
    protected function model($model, $property_name = '')
    {
        $model = ucfirst($model);

        if ($property_name != '') {
            $this->{$property_name} = new $model;
        }
        else
        {
            $this->{lcfirst($model)} = new $model;
        }
    }

    /**
     * Add a Data variable to use in View.
     * @param $key
     * @param $val
     */
    protected function add_data($key, $val) {
        $this->{$key} = $val;
    }

    /**
     * Add a new Subview.
     * @param string $subview
     */
    protected function add_view($subview = '')
    {
        $this->subviews[] = $subview;
    }

    /**
     * Render the HTML.
     * @param string $view
     */
    protected function render($view = '_layout_main')
    {
        if (file_exists(VIEW_DIR . $view . '.php'))
        {
            require_once VIEW_DIR . $view . '.php';
        }
    }
}