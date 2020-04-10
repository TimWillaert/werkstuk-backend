@extends('../layouts.master')
@section('content')
    <a href="{{route('speakers.create')}}" role="button" class="btn btn-primary">Add speaker</a>
    <hr>
    @foreach ($speakers as $speaker)
        <div class="row mb-2">
            <h5 class="col-10">{{$speaker->name}}</h5>
            <a href="{{route('speakers.edit', ['id' => $speaker->id])}}" class="btn btn-info btn col-1">Edit</a>
            <a href="{{route('speakers.delete', ['id' => $speaker->id])}}" class="btn btn-danger btn col-1">Delete</a>
        </div>
    @endforeach
@endsection
