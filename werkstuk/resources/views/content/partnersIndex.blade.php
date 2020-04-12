@extends('../layouts.master')
@section('content')
@include('../partials/successalert')
    <a href="{{route('partners.create')}}" role="button" class="btn btn-primary">Add partner/sponsor</a>
    <hr>
    <div class="card-columns">
    @foreach ($partners as $partner)
        @if ($partner->level == "Gold")
            <div class="card border-warning">
        @elseif ($partner->level == "Silver")
            <div class="card border-dark">
        @else
            <div class="card border-danger">
        @endif
            <div class="card-body">
                <h5 class="card-title">{{$partner->name}}</h5>
                <hr>
                <h6 class="text-muted">{{$partner->type}} - {{$partner->level}}</h6>
                <img src="data:image/png;base64, {{$partner->img}}" style="height: 100px;" class="mt-2">
                <div class="mt-4">
                    <a href="{{route('partners.edit', ['id' => $partner->id])}}" class="btn btn-info">Edit</a>
                    <a href="{{route('partners.delete', ['id' => $partner->id])}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
