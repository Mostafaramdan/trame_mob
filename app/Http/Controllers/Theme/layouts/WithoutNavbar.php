<?php

namespace App\Http\Controllers\Theme\layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithoutNavbar extends Controller
{
  public function index()
  {
    return view('Theme.content.layouts-example.layouts-without-navbar');
  }
}
