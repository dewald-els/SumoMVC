<?php

use Sumo\Core\Controller;

/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2017/06/17
 * Time: 11:36 AM
 */
class Contact extends Controller
{
    public function index()
    {
        $this->add_view('pages/contact/index');
        $this->render();
    }
}