<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Home';
        return view('connectors/home', $data);
    }
    
    public function userHome()
    {
        $data['pageTitle'] = 'User Page';
        return view('dashboard/userhome', $data);
    }

    public function adminPage()
    {
        $data['pageTitle'] = 'Admin Page';
        return view('dashboard/admin', $data);
    }
}
