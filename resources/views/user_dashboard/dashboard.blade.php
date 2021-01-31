@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="/create_content/{{ $id }}" enctype="multipart/form-data">>
            @csrf
            <div class="form-group">
              <label for="title">Image Title</label>
              <input type="text" name="title" class="form-control" placeholder="Enter image title" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label><br>
                <input type="file" name="image" class="custom-file-input" required>
            </div>
            <div class="form-group">
              <label for="description">Image Description</label>
              <textarea name="description" class="form-control" placeholder="Write something about your Image" cols="30" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
