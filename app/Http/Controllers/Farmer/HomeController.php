<?php

namespace App\Http\Controllers\Farmer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
     * Show the farm dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Farmer.home');
    }
}
