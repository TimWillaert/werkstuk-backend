@extends('../layouts.master')
@section('content')
@include('../partials/successalert')
    <a href="{{route('speakers.create')}}" role="button" class="btn btn-primary">Add speaker</a>
    <hr>
    @foreach ($speakers as $speaker)
    <div class="card mb-4">
        <div class="card-body">
            <img class="d-inline mr-2" src="data:image/png;base64, {{$speaker->profilepic}}" style="width: 40px; height: 40px; border-radius: 50px; object-fit: cover;">
            <h5 class="card-title d-inline">{{$speaker->name}}</h5>
            <hr>
            @if (count($speaker->sessions)>0)
                @foreach ($speaker->sessions as $session)
            <h6 class="text-muted">{{$session->title}} - {{$session->time_start}} to {{$session->time_end}}</h6>
                @endforeach
            @else
                <h6 class="text-muted">No assigned sessions</h6>
                <a href="{{route('sessions')}}">Assign one now</a>
            @endif
            <div class="mt-4">
                <a href="{{route('speakers.edit', ['id' => $speaker->id])}}" class="btn btn-info">Edit</a>
                <a href="{{route('speakers.delete', ['id' => $speaker->id])}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
    <hr>
    {{$speakers->links()}}
@endsection
