<?php

namespace App\Http\Controllers;

use App\Models\UserAction;
use Illuminate\Http\Request;

class UserActionController extends Controller
{
   public function index()
   {
    $actions = UserAction::all();
    return view('user-action', ['posts' => $actions]);
   }
}
