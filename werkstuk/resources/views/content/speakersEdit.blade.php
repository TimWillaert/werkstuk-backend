@extends('../layouts.master')
@section('content')
    <form method="POST" action="{{route('speakers.update')}}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$speaker->name}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="10" class="form-control">{{$speaker->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" name="website" class="form-control" value="{{$speaker->website}}">
        </div>
        @csrf
        <input type="hidden" value="{{$speaker->id}}" name="id">
        <button class="btn btn-primary" type="submit">Update</button>
        <a href="{{route('speakers')}}" class="btn btn-outline-primary">Cancel</a>
    </form>
@endsection
