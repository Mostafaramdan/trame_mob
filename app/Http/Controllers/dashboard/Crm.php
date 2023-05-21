<?php

namespace App\Http\Controllers\Theme\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Crm extends Controller
{
  public function index()
  {
    return view('Theme.content.dashboard.dashboards-crm');
  }
}
