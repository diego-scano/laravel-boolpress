@extends('base')

@section('content')

  <form action="{{ route('posts.store') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="author_id">Author</label>
      <select class="form-control" name="author_id" id="author_id">
        @foreach ($authors as $author)
          <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="body">Content</label>
      <textarea class="form-control" id="body" name="body" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="tags[]">Tags</label>
      <select class="custom-select" name="tags[]" multiple>
        @foreach ($tags as $tag)
          <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
