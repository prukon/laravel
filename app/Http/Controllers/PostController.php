<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PostController extends Controller
{
    public function index() {

        $onePost = Post::find(1);
//        dd($onePost);
        dump($onePost);

        $allPosts = Post::all();
//        dd($allPosts);
dump($allPosts);
foreach ($allPosts as $post) {
    dump($post->title);
}

        $somePost = Post::where('is_published', 1)->get();
dump($somePost);

  }

    public function create() {
$postsArr =[
    [
    'title' => 'Мой заголовок',
    'content' => 'Некий текст',
    'image' => 'Image',
    'likes' => '2',
    'is_Published' => '1',
],
    [
     'title' => 'Мой заголовок2',
     'content' => 'Некий текст2',
     'image' => 'Image2',
     'likes' => '4',
     'is_Published' => '1',
 ],
];
//1 способ
//Post::create([
//    'title' => 'Мой заголовок3',
//    'content' => 'Некий текст3',
//    'image' => 'Image3',
//    'likes' => '5',
//    'is_Published' => '1',
//]);

//2 способ
foreach ($postsArr as $post) {
Post::create($post);
}
//3 способ
//        foreach ($postsArr as $post) {
//        Post::create([
//            'title' => $post['title'],
//            'content' => $post['content'],
//            'image' => $post['image'],
//            'likes' => $post['likes'],
//            'is_Published' => $post['is_Published'],
//        ]);
//        }
        dd("created");
  }

    public function  update() {
        $post = Post::find(6);
//        dd($post->content);
        $post->update([
            'title' => 'update1',
            'content' => 'update2',
            'image' => 'update3',
            'likes' => 33,
            'is_Published' => true
        ]);
        dump("updated");

    }

    public function delete() {
        $post = Post::find(5);
        $postAll=Post::all();
        dump($post);
        dump($postAll);
//            $post->delete();
        dump("deleted");


        //восстановление данных
        $post=Post::withTrashed()->find(2);
        $post->restore();
        dump("restored");
    }
// 1
}
