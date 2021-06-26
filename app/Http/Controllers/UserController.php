<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        
        // return 'This is user mode';
    }

     public function uploadAvatar (Request $request) 
    {
        // $request->image->store('images', 'public'); 
        User::find(1)->update(['avatar'=> 'prsada']);
        return 'upload';
    }
}