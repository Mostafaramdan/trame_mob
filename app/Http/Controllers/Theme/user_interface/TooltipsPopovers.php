<?php

namespace App\Http\Controllers\Theme\user_interface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TooltipsPopovers extends Controller
{
  public function index()
  {
    return view('Theme.content.user-interface.ui-tooltips-popovers');
  }
}
