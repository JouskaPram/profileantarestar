<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function user()
    {
        return view('user/landingpage');
    }
}
