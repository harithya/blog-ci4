<?php

namespace Modules\Frontend\Controllers;

class Home extends Frontend
{
    public function index()
    {
        return view(FRONTEND . 'home/index');
    }
}
