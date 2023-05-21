<?php

namespace App\Http\Controllers\Theme\extended_ui;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TextDivider extends Controller
{
  public function index()
  {
    return view('Theme.content.extended-ui.extended-ui-text-divider');
  }
}
