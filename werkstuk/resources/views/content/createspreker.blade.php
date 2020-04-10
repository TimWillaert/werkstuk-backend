@extends('../layouts.master')
@section('content')
    <form method="POST" action="{{route('sprekers.postcreate')}}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" name="website" class="form-control">
        </div>
        @csrf
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="{{route('sprekers')}}" class="btn btn-outline-primary">Cancel</a>
    </form>
@endsection
