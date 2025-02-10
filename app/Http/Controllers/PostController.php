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
}