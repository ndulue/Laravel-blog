<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getPortfolio()
    {
        return view('portfolio');
    }
}
