<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);
        return $request;
    }
}