<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function building()
  {
    return'建物です';
  }
    public function room($room_no)
  {
    return '部屋番号は'.$room_no.'です';
  }
}
