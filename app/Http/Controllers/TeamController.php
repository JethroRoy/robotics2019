<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TeamController extends Controller
{

    public function __construct() {
        //$this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {

        return view('team.index');
    }

    public function indexfr() {

        return view('team.indexfr');
    }
    
}
