<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class VanierController extends Controller
{

    public function __construct() {
        //$this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {

        return view('vanier.index');
    }

    public function indexfr() {

        return view('vanier.indexfr');
    }
}
