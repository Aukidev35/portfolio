<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view ('template/header');
        echo view ('index');
        echo view ('template/footer');
        //return view('welcome_message');
    }
    public function btssio()
    {
        echo view ('template/header');
        echo view ('btssio');
        echo view ('template/footer');
        //return view('welcome_message');
    }

    public function veilleTechno()
    {
        echo view ('template/header');
        echo view ('veilleTechno');
        echo view ('template/footer');
        //return view('welcome_message');
    }

    public function PPE()
    {
        echo view ('template/header');
        echo view ('ppe');
        echo view ('template/footer');
        //return view('welcome_message');
    }

    public function stage()
    {
        echo view ('template/header');
        echo view ('stage');
        echo view ('template/footer');
        //return view('welcome_message');
    }
    public function contact()
    {
        echo view ('template/header');
        echo view ('contact');
        echo view ('template/footer');
        //return view('welcome_message');
    }
    
}
