<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $skills = [
            'HTML',
            'CSS',
            'JavaScript',
            'Bootstrap',
            'PHP',
            'Laravel'
        ];

        return view('portfolio', compact('skills'));
    }
}
