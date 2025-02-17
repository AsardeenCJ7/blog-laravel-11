<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function detail($id){
        $posts = $this->getPost();
        $post = collect($posts)->firstWhere('id',$id);
        return view('detail', compact('post'));
    }

public function index(){
    $title = 'Blog Cj7';
    $posts = $this->getPost();
    return view('index',compact('title','posts'));
}

private function getPost(){
    $data = [
        ['id'=>'1','title'=>'post 1 Edit', 'content'=> 'content of post 1 Edit database not included'],
        ['id'=>'2','title'=>'post 2', 'content'=> 'content of post 2 db'],
    ];
    // Here we can convert array to object their 3 methods one of this methods called json_decode
    // Convert an Array to an Object in Laravel (PHP)
    $objects = json_decode(json_encode($data));
    return $objects;
}



// $data = [
//     ['id'=>'1','title'=>'post 1', 'content'=> 'content of post 1'],
//     ['id'=>'2','title'=>'post 2', 'content'=> 'content of post 2'],
// ];

// // Here we can convert array to object their 3 methods one of this methods called json_decode
// // Convert an Array to an Object in Laravel (PHP)
// $objects = json_decode(json_encode($data));

//return view('index',['title'=>$title]); //or compact method also we can use simply


}