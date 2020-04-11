@extends('../layouts.master')
@section('content')
    <a href="{{route('sessions.create')}}" role="button" class="btn btn-primary">Add session</a>
    <hr>
    @foreach ($sessions as $session)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{$session->title}}</h5>
                <h6 class="text-muted">by {{$session->spreker->name}}</h6>
                <a href="{{route('sessions.edit', ['id' => $session->id])}}" class="btn btn-info mt-4">Edit</a>
                <a href="{{route('sessions.delete', ['id' => $session->id])}}" class="btn btn-danger mt-4">Delete</a>
            </div>
        </div>
    @endforeach
@endsection
