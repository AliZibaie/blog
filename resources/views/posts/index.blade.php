
@extends('layout.component')
@section('title')
        <title>Home</title>
@endsection
@section('content')
<div class="w-2/3 mx-auto">
    {{session('success')}}
    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <!-- head -->
            <thead>
            <tr>
                <th>Item</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            <!-- row 1 -->
            @foreach($posts as $key => $value)
                <tr>
                    <th>#{{++$key}}</th>
                    <td><a href='{{route("posts.edit", $value)}}'>{{$value->title}}</a></td>
                    <td>{{$value->content}}</td>
                    <td>{{$value->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection



