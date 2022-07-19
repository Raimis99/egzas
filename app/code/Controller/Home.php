<?php

namespace Controller;

use Core\BaseController;
use Model\Club;

class Home extends BaseController
{
    public function index()
    {
        $club = Club::all();
        $this->render('home/index', compact('club'));
    }
}
