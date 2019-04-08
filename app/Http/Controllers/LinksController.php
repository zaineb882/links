<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinksController extends Controller
{
    public function index(){
      $links = Link::paginate(5);
       return view('shop', compact('links'));    }
}
