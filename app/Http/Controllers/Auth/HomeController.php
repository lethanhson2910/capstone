<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
class HomeContoller extends Controller
{
  protected $redirectTo = '/home';
    public function Sondeptrai()
    {
      echo "Son dep trai";
    }
}
