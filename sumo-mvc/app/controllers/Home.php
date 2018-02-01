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

        $user = new User();
        $user->name = "Dewald";
        $user->email = "dewaldifels@gmail.com";
        $user->username = "dewaldcels";

        $lib = new Hello();
        $lib->sayHello();

        $this->add_data('user', $user);

        $this->add_view('pages/home/index');
        $this->render();
    }

    public function save()
    {
        var_dump($_POST);
    }
}