<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class GalleryController extends Controller
{

    public function __construct() {
        //$this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {

        return view('gallery.index');
    }

    public function indexfr() {

        return view('gallery.indexfr');
    }
}
