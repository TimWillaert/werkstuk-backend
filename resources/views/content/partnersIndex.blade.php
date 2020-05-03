@extends('../layouts.master')
@section('content')
@include('../partials/successalert')
    <a href="{{route('partners.create')}}" role="button" class="btn btn-primary">Add partner/sponsor</a>
    <hr>
    <h3 class="text-warning mb-3">Gold</h3>
    <div class="card-columns">
    @foreach ($goldpartners as $partner)
        <div class="card border-warning">
            <div class="card-body">
                <a href="{{$partner->website}}" target="_blank" class="text-dark"><h5 class="card-title">{{$partner->name}}</h5></a>
                <hr>
                <h6 class="text-muted">{{$partner->type}} - {{$partner->level}}</h6>
                <img src="data:image/png;base64, {{$partner->img}}" style="height: 100px;" class="mt-2 rounded">
                <div class="mt-4">
                    <a href="{{route('partners.edit', ['id' => $partner->id])}}" class="btn btn-info">Edit</a>
                    <a href="{{route('partners.delete', ['id' => $partner->id])}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <h3 class="text-dark mb-3 mt-3">Silver</h3>
    <div class="card-columns">
    @foreach ($silverpartners as $partner)
        <div class="card border-dark">
            <div class="card-body">
                <a href="{{$partner->website}}" target="_blank" class="text-dark"><h5 class="card-title">{{$partner->name}}</h5></a>
                <hr>
                <h6 class="text-muted">{{$partner->type}} - {{$partner->level}}</h6>
                <img src="data:image/png;base64, {{$partner->img}}" style="height: 100px;" class="mt-2 rounded">
                <div class="mt-4">
                    <a href="{{route('partners.edit', ['id' => $partner->id])}}" class="btn btn-info">Edit</a>
                    <a href="{{route('partners.delete', ['id' => $partner->id])}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <h3 class="text-danger mb-3 mt-3">Bronze</h3>
    <div class="card-columns">
    @foreach ($bronzepartners as $partner)
        <div class="card border-danger">
            <div class="card-body">
                <a href="{{$partner->website}}" target="_blank" class="text-dark"><h5 class="card-title">{{$partner->name}}</h5></a>
                <hr>
                <h6 class="text-muted">{{$partner->type}} - {{$partner->level}}</h6>
                <img src="data:image/png;base64, {{$partner->img}}" style="height: 100px;" class="mt-2 rounded">
                <div class="mt-4">
                    <a href="{{route('partners.edit', ['id' => $partner->id])}}" class="btn btn-info">Edit</a>
                    <a href="{{route('partners.delete', ['id' => $partner->id])}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
