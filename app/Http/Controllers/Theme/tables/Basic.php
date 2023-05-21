<?php

namespace App\Http\Controllers\Theme\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Basic extends Controller
{
  public function index()
  {
    return view('Theme.content.tables.tables-basic');
  }
}
