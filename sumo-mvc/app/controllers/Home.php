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
        $this->model('User', 'user');
        $this->user->name = "Dewald Els";
        $this->user->email = "dewald@mail.com";
        $this->user->username = "forest";
        $this->add_view('home/index');
        $this->render();
    }

    public function save()
    {
        var_dump($_POST);
    }
}