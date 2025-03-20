<?php

namespace app\Controllers;

use app\Core\View;
use app\Models\EstruturaDbModel;

class HomeController

{
    public function index()
    {
        if(!file_exists(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'super-trunfo-valorant.db')){
            (new EstruturaDbModel)->setTodasCartas();
        }

        return View::render('home.twig', ['nome' => 'Vitor']);
    }
}
