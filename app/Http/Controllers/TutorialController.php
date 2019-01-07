<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TutorialController extends Controller
{

    public function __construct() {
        //$this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {

        return view('tutorial.index');
    }

}
