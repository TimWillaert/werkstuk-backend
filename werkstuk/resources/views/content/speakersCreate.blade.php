@extends('../layouts.master')
@section('content')
    <form method="POST" action="{{route('speakers.postCreate')}}" class="mb-5" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Keywords</label>
            @foreach ($keywords as $keyword)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="keywords[]" value="{{$keyword['id']}}" id="{{$keyword['id']}}">
                    <label for="{{$keyword['id']}}" class="custom-control-label">{{$keyword['name']}}</label>
                </div>
            @endforeach
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" name="website" class="form-control">
        </div>
        <div class="form-group">
            <label>Key images</label>
            <input type="file" name="image1">
            <input type="file" name="image2">
            <input type="file" name="image3">
        </div>
        @csrf
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="{{route('speakers')}}" class="btn btn-outline-primary">Cancel</a>
    </form>
@endsection
