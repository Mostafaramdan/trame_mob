<?php

namespace App\Http\Controllers\Theme\cards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardBasic extends Controller
{
  public function index()
  {
    return view('Theme.content.cards.cards-basic');
  }
}
