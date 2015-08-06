<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{

   protected $request;

   public function doLogin()
   {
      $request = Request::all();

      return $request;
   }

}