<?php

namespace App\Http\Controllers\Theme\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountSettingsNotifications extends Controller
{
  public function index()
  {
    return view('Theme.content.pages.pages-account-settings-notifications');
  }
}
