
@extends('layout.component')
@section('title')
    <title>Home</title>
@endsection
@section('content')
    <div class="w-2/3 mx-auto">
        <p class="text-green-700">{{session('success')}}</p>
        <div class="overflow-x-auto">
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                    <tr>
                        <td>{{$post['title']}}</td>
                        <td>{{$post['content']}}</td>
                        <td>{{$post['created_at']}}</td>
                        <td><a href="{{ route('posts.showPosts', $post['id']) }}"> bolbol </a></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
