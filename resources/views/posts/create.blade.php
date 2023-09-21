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
        <form action="{{ route('posts.create') }}" method="post" >
            @csrf
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   id="user_id" type="text" placeholder="user_id" name="user_id">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                title:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   id="title" type="text" placeholder="title" name="title">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                content:
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      name="content" id="content" placeholder="content"></textarea>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                Create
            </button>
        </form>
    </div>
</div>
</body>
</html>
