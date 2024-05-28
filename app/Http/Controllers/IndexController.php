<?php

namespace App\Http\Controllers;

use App\Models\User;
Use App\Models\Member;
Use App\Models\Group;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index(){

    return Member::with('group')->get();
   }



   public function new(){

    return Group::with('member')->get();

   }

}
