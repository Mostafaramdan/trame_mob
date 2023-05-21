<?php

namespace App\Http\Controllers\Theme\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MiscError extends Controller
{
  public function index()
  {
    return view('Theme.content.pages.pages-misc-error');
  }
}
