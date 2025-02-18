<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use PhpParser\Node\Stmt\TryCatch;

class HomeController extends Controller
{
    //

    public function detail($id){
        // $posts = $this->getPost();
        // $post = collect($posts)->firstWhere('id',$id);
        try {
            $post =Post::findOrFail($id); // Using pass arguments primary key and FindOrFail() very important thing
            return view('detail', compact('post'));
            //code...
        } 
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            //throw $th;
            return response()->view('errors.404',[], 404);
            //dd($th);
        }
    }

public function index(){
    // $title = 'Blog';
    // $posts = $this->getPost();
    $posts= Post::all();  // from database
    // return view('index',compact('title','posts'));
    return view('index',compact('posts'));
}

// private function getPost(){
//     //get post by id value from database
//     $data = [
//         ['id'=>'1','title'=>'post 1 Edit', 'content'=> 'content of post 1 Edit database not included'],
//         ['id'=>'2','title'=>'post 2', 'content'=> 'content of post 2 db'],
//     ];
//     // Here we can convert array to object their 3 methods one of this methods called json_decode
//     // Convert an Array to an Object in Laravel (PHP)
//     $objects = json_decode(json_encode($data));
//     return $objects;
// }



// $data = [
//     ['id'=>'1','title'=>'post 1', 'content'=> 'content of post 1'],
//     ['id'=>'2','title'=>'post 2', 'content'=> 'content of post 2'],
// ];

// // Here we can convert array to object their 3 methods one of this methods called json_decode
// // Convert an Array to an Object in Laravel (PHP)
// $objects = json_decode(json_encode($data));

//return view('index',['title'=>$title]); //or compact method also we can use simply


}