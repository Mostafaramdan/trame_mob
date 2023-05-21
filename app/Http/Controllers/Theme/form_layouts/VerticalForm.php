<?php

namespace App\Http\Controllers\Theme\form_layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerticalForm extends Controller
{
  public function index()
  {
    return view('Theme.content.form-layout.form-layouts-vertical');
  }
}
