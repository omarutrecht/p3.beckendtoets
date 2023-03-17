<?php

class Reuzenrad extends BaseController
{
    private $reuzenradModel;

    public function __construct()
    {
        $reuzenradModel = $this->model('ReuzenradModel');
    }
     
    public function index()
    {
        $result = $this->reuzenradModel->getReuzenrad();


        $data = [
            'title' => 'top 5 hoogste reuzenraden ter wereld'
        ];


        $this->view('Reuzenrad/index', $data);
    }

}