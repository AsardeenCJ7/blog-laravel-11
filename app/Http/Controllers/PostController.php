<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function arg($id)
    {
        // Your code here

        return "Welcome to User " . $id;
    }


    // redirect part

    // public function oldUrl(){
    //     return redirect('new-url');
    // }

// but here should not use direct URI, better use route name


//here using router name and best this is
public function oldUrl(){
    return redirect()->route('new-url');
}

    public function newUrl(){
        return '<h1>This is New URL</h1>';
    }
}