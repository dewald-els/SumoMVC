<?php
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2017/06/17
 * Time: 10:39 AM
 */
class Home extends Controller
{
    public function index()
    {
        $this->page_title = "Home";
        $this->add_view('home/index');
        $this->render();
    }

    public function save()
    {
        var_dump($_POST);
    }
}