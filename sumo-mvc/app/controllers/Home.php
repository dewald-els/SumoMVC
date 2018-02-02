<?php

use Sumo\Core\Controller;

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

//        Special::create([
//            'day' => 'Monday',
//            'name' => 'Pasta special',
//            'description' => 'Get half price pasta',
//            'available_time' => '16:00',
//            'store_id' => '1'
//        ]);


        $special = Special::find(1);

        var_dump($special);

        $this->add_view('pages/home/index');
        $this->render();
    }

    public function save()
    {
        var_dump($_POST);
    }
}