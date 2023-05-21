<?php

namespace App\Http\Controllers\Theme\form_validation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Validation extends Controller
{
  public function index()
  {
    return view('Theme.content.form-validation.form-validation');
  }
}
