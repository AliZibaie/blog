<div>
    <form action="{{ route('posts.create') }}" method="post" >
        @csrf
        <input type="text" placeholder="title" name="title">
        <textarea name="content" placeholder="content"></textarea>
        <button type="submit">Create</button>
    </form>
</div>
