
@extends('layout.component')
@section('title')
        <title>Home</title>
@endsection
@section('content')

    @if(session('success'))
        <div class="alert alert-success w-72 m-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                </path>
            </svg>
            <span>{{session('success')}}</span>
        </div>

    @endif
<div class="w-2/3 mx-auto my-20">

    <div class="overflow-x-auto flex justify-between items-start">
        <table class="table table-zebra">
            <!-- head -->
            <thead>
            <tr>
                <th class="textarea-ghost text-lg">Item</th>
                <th class="textarea-ghost text-lg">Title</th>
                <th class="textarea-ghost text-lg">Content</th>
                <th class="textarea-ghost text-lg">Actions</th>
                <th class="textarea-ghost text-lg">Created At</th>
            </tr>
            </thead>
            <tbody>
            <!-- row 1 -->
            @foreach($posts as $key => $value)
                <tr>
                    <th><p class="text-lg text-white">#{{++$key}}</p></th>
                    <td><a class="link link-success text-lg" href=' {{ route('posts.show', $value) }}'>{{$value->title}}</a></td>
                    <td><p class=" text-lg">{{$value->content}}</p></td>
                    <td>
                        <div class="flex items-center">
                            <form method="post" action="{{ route('posts.destroy', $value->id) }}">
                                @csrf
                                @method('delete')
                                <button class=" text-red-900" type="submit">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"><path fill="currentColor" d="M20 10.5v.5h8v-.5a4 4 0 0 0-8 0Zm-2.5.5v-.5a6.5 6.5 0 1 1 13 0v.5h11.25a1.25 1.25 0 1 1 0 2.5h-2.917l-2 23.856A7.25 7.25 0 0 1 29.608 44H18.392a7.25 7.25 0 0 1-7.224-6.644l-2-23.856H6.25a1.25 1.25 0 1 1 0-2.5H17.5Zm4 9.25a1.25 1.25 0 1 0-2.5 0v14.5a1.25 1.25 0 1 0 2.5 0v-14.5ZM27.75 19c-.69 0-1.25.56-1.25 1.25v14.5a1.25 1.25 0 1 0 2.5 0v-14.5c0-.69-.56-1.25-1.25-1.25Z"/></svg>
                                </button>
                            </form>
                            <a href=" {{route("posts.edit", $value->id)}}" class="text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 16 16"><path fill="currentColor" d="M10.529 1.764a2.621 2.621 0 1 1 3.707 3.707l-.779.779L9.75 2.543l.779-.779ZM9.043 3.25L2.657 9.636a2.955 2.955 0 0 0-.772 1.354l-.87 3.386a.5.5 0 0 0 .61.608l3.385-.869a2.95 2.95 0 0 0 1.354-.772l6.386-6.386L9.043 3.25Z"/></svg>
                            </a>
                        </div>
                    </td>
                    <td>{{$value->created_at}}</td>
                    <td>{{$value->user_id}}</td>
{{--                    <td>--}}
{{--                        <select>--}}
{{--                            @foreach($users as $user)--}}
{{--                                <option>{{ $user->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </td>--}}
                </tr>

            @endforeach
            </tbody>
        </table>

        <a href="{{route("posts.create")}}" class="text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M20 14h-6v6h-4v-6H4v-4h6V4h4v6h6v4Z"/></svg>
        </a>
    </div>
</div>


@endsection



