@extends('../layouts.master')
@section('content')
    <form method="POST" action="{{route('speakers.update')}}" class="mb-5">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$speaker->name}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control">{{$speaker->description}}</textarea>
        </div>
        <div class="form-group">
            <label>Keywords</label>
            @foreach ($keywords as $keyword)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="keywords[]" value="{{$keyword['id']}}" {{$speaker->keywords->contains($keyword->id) ? 'checked' : ''}} id="{{$keyword['id']}}">
                    <label for="{{$keyword['id']}}" class="custom-control-label">{{$keyword['name']}}</label>
                </div>
            @endforeach
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" name="website" class="form-control" value="{{$speaker->website}}">
        </div>
        <div class="form-group">
            <label>Key images</label>
            @foreach ($speaker->images as $image)
                <div>
                    <img src="data:image/png;base64, {{$image->src}}" class="rounded mb-2" style="width: 100px; height: 100px;">
                </div>
            @endforeach
        </div>
        @csrf
        <input type="hidden" value="{{$speaker->id}}" name="id">
        <button class="btn btn-primary" type="submit">Update</button>
        <a href="{{route('speakers')}}" class="btn btn-outline-primary">Cancel</a>
    </form>
@endsection
