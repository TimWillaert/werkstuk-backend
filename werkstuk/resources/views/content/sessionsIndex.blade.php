@extends('../layouts.master')
@section('content')
@include('../partials/successalert')
    <a href="{{route('sessions.create')}}" role="button" class="btn btn-primary">Add session</a>
    <hr>
    @foreach ($sessions as $session)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">{{$session->title}}</h5>
                <hr>
                <h6 class="text-muted">By {{$session->spreker->name}} - {{$session->time_start}} to {{$session->time_end}} - {{$session->location}}</h6>
                <div class="mt-4">
                    <a href="{{route('sessions.edit', ['id' => $session->id])}}" class="btn btn-info">Edit</a>
                    <a href="{{route('sessions.delete', ['id' => $session->id])}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
    <hr>
    {{$sessions->links()}}
@endsection
