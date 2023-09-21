
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
                <th>Item</th>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            <!-- row 1 -->
            @foreach($posts as $key => $value)
                <tr>
                    <th>#{{++$key}}</th>
                    <td><a href='{{route("posts.edit", $value->id)}}'>{{$value->title}}</a></td>
                    <td>{{$value->content}}</td>
                    <td>
                        <div class="flex items-center">
                            <form method="post" action="{{ route('posts.destroy', $value->id) }}">
                                @csrf
                                @method('delete')
                                <button class=" text-red-900" type="submit">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"><path fill="currentColor" d="M20 10.5v.5h8v-.5a4 4 0 0 0-8 0Zm-2.5.5v-.5a6.5 6.5 0 1 1 13 0v.5h11.25a1.25 1.25 0 1 1 0 2.5h-2.917l-2 23.856A7.25 7.25 0 0 1 29.608 44H18.392a7.25 7.25 0 0 1-7.224-6.644l-2-23.856H6.25a1.25 1.25 0 1 1 0-2.5H17.5Zm4 9.25a1.25 1.25 0 1 0-2.5 0v14.5a1.25 1.25 0 1 0 2.5 0v-14.5ZM27.75 19c-.69 0-1.25.56-1.25 1.25v14.5a1.25 1.25 0 1 0 2.5 0v-14.5c0-.69-.56-1.25-1.25-1.25Z"/></svg>
                                </button>
                            </form>
                            <a href="{{ route('posts.show', $value) }}" class="text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 20 20"><path fill="currentColor" d="M.2 10a11 11 0 0 1 19.6 0A11 11 0 0 1 .2 10zm9.8 4a4 4 0 1 0 0-8a4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4a2 2 0 0 1 0 4z"/></svg>
                            </a>
                        </div>
                    </td>
                    <td>{{$value->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection



