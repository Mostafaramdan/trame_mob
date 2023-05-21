<?php

namespace App\Http\Controllers\Theme\form_elements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicInput extends Controller
{
  public function index()
  {
    return view('Theme.content.form-elements.forms-basic-inputs');
  }
}
