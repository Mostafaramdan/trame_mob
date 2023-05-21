<?php

namespace App\Http\Controllers\Theme\icons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Boxicons extends Controller
{
  public function index()
  {
    return view('Theme.content.icons.icons-boxicons');
  }
}
