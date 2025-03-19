<?php

namespace app\Controllers;

use app\Core\View;
use app\Models\EstruturaDbModel;

class HomeController

{
    public function index()
    {
        // (new EstruturaDbModel)->setTodasCartas();
        return View::render('home.twig', ['nome' => 'Vitor']);
    }
}
