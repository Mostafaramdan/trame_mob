<?php

namespace App\Http\Controllers\Theme\form_elements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InputGroups extends Controller
{
  public function index()
  {
    return view('Theme.content.form-elements.forms-input-groups');
  }
}
