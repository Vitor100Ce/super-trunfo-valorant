<?php

namespace app\Controllers;

use app\Core\View;

class HomeController
{
    public function index()
    {
        // Renderiza a view home.twig e passa um dado
        return View::render('home.twig', ['nome' => 'Vitor']);
    }
}
