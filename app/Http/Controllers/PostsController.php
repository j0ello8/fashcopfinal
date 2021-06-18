<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function create()        
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption'=>'required',
            'location'=>'required',
            'description' => 'required',
            'budget'=>'required',
            'contact'=>'contact',
            'image'=>['required', 'image'],
        ]);

        //dd(request('image')->store('uploads', 'public'));
        $imagePath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("/storage/{$imagePath}"))->fit('500', '333');
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'location' => $data['location'],
            'description' => $data['description'],
            'budget' => $data['budget'],
            'contact'=> $data['contact'],
            'image' => $imagePath,
        ]);

        //dd(request()->all());
        return redirect('/profile/' . auth()->user()->id);
    }

    public function _construct()
    {
        $this->middleware('auth');
    }

    public function show(Post $post)
    {
        //return $post->toJson(JSON_PRETTY_PRINT);
        return view('posts.show', compact('post'));
    }

    public function showapi(Post $post)
    {
        return $post->toJson(JSON_PRETTY_PRINT);
        //return view('posts.show', compact('post'));
    }
}
