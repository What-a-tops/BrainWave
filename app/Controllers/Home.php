<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home';
            echo view('layout/header', $data);
            echo view('layout/menu');
            echo view( session()->get('firstname') == 'admin' ? 'pages/admin' : 'pages/dashboard');

    }
}