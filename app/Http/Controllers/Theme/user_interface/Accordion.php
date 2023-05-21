<?php

namespace App\Http\Controllers\Theme\user_interface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Accordion extends Controller
{
  public function index()
  {
    return view('Theme.content.user-interface.ui-accordion');
  }
}
