<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\filterResultRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $posts = Post::all()->sortBy('created_at');
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('posts.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {

        try {
            Post::create($request->validated());
            return redirect(status: 200)->route('posts.index')->with('success', 'post added successfully!');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect(status: 500)->route('posts.create')->with('fail', 'post didnt add!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::query()->find($id)->getAttributes();
        return view("posts.show")->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("posts/edit" , compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        try {
            $post->update($request->validated());
            return redirect(status: 200)->route('posts.index')->with('success', 'post updated successfully!');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect(status: 500)->route('posts.edit', $post)->with('fail', 'post didnt update!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        try {
            $post->delete();
            return redirect(status: 200)->route('posts.index')->with('success', 'post deleted successfully!');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect(status: 500)->route('posts.index', $post)->with('fail', 'post didnt delete!');
        }
    }

    public function userPosts(User $user)
    {
//        dd($user->posts()->get());
        $posts = $user->posts()->get();
        return view('posts.userPosts' , compact('posts'));
    }

    public function showResult(filterResultRequest $request)
    {
        $validated = $request->validated();
        $text = $validated['text'];
        $name = $validated['filter'];
//        $posts = Post::query()->select()->where("$name",'LIKE',"%$text%")->get();
//        if ($name == 'title'){
//
//        }else{
//            $posts = Post::query()->leftJoin('users', 'posts.user_id','=','users.id')->select()->where("$name",'LIKE',"%$text%")->get();
//        }
        $posts = Post::select('posts.*')->full('users', 'posts.user_id', 'users.id')->where("$name",'LIKE',"%$text%")->get()->unique();
        dd($posts);
        return view('posts.index', compact('posts'));
    }
}
