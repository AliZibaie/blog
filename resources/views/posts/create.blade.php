<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<div>
    <div class="container mx-auto mt-5">
        <form action="{{ route('posts.store') }}" method="post" class="space-y-4">
            @csrf
            <label class="text-white block text-gray-700 text-sm font-bold mb-2" for="title">
                User id:
            </label>
{{--            <input class="text-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"--}}
{{--                   id="user_id" type="text" placeholder="user_id" name="user_id" value="{{ old('user_id') }}">--}}
            <select name="user_id">
                @foreach($users as $user)
                    <option>{{ $user->id }}</option>
                @endforeach
            </select>
            @error('user_id')
            <div class="alert alert-danger text-red-700">{{ $message }}</div>
            @enderror
            <label class="text-white block text-gray-700 text-sm font-bold mb-2" for="title">
                Title:
            </label>
            <input class="text-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   id="title" type="text" placeholder="title" name="title" value="{{ old('title') }}">
            @error('title')
            <div class="alert alert-danger text-red-700">{{ $message }}</div>
            @enderror
            <label class="text-white block text-gray-700 text-sm font-bold mb-2" for="content">
                Content:
            </label>
            <input type="text" class="text-white shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      name="content" id="content" placeholder="content" value="{{ old('content') }}"></input>
            @error('content')
            <div class="alert alert-danger text-red-700">{{ $message }}</div>
            @enderror
            <div class="flex justify-between items-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                    Create
                </button>
                <button class="btn btn-primary" type="button"><a href=" {{ route('posts.index') }}">Back</a></button>
            </div>
        </form>
        {{session('fail')}}
    </div>
</div>
</body>
</html>

