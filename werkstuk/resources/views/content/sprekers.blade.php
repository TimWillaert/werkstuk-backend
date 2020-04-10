@extends('../layouts.master')
@section('content')
    <a href="{{route('sprekers.create')}}" role="button" class="btn btn-primary">Add speaker</a>
    <hr>
    @foreach ($sprekers as $spreker)
        <div class="row mb-2">
            <h5 class="col-10">{{$spreker->name}}</h5>
            <a href="{{route('sprekers.edit', ['id' => $spreker->id])}}" class="btn btn-info btn col-1">Edit</a>
            <a href="{{route('sprekers.delete', ['id' => $spreker->id])}}" class="btn btn-danger btn col-1">Delete</a>
        </div>
    @endforeach
@endsection
