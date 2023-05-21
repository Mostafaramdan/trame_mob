<?php

namespace App\Http\Controllers\Theme\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginBasic extends Controller
{
  public function index()
  {
    return view('Theme.content.authentications.auth-login-basic');
  }
}
