<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vars = [];

        $vars['membros'] = \App\Membro::all();
        $vars['tipos'] = \App\models\Tipo::all();

        return view('home/index', $vars);
    }
}
