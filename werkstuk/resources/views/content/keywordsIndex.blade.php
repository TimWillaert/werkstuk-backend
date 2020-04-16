@extends('../layouts.master')
@section('content')
@include('../partials/successalert')
@include('../partials/erroralert')
    <a href="{{route('keywords.create')}}" role="button" class="btn btn-primary">Add keyword</a>
    <hr>
    <div class="card-columns">
    @foreach ($keywords as $keyword)
    @php
        $speakers = $keyword->sprekers()->get();
    @endphp
    <form action="{{route('keywords.postUpdate')}}" method="POST">
       <div class="card border-dark">
            <div class="card-body">
                <input type="text" name="name" value="{{$keyword->name}}" class="form-control font-weight-bold">
                <hr>
                @if (count($speakers) > 0)
                @foreach ($speakers as $speaker)
                <div class="mb-2">
                    <img class="d-inline mr-2 rounded" src="data:image/png;base64, {{$speaker->profilepic}}" style="width: 40px; height: 40px; object-fit: cover;">
                    <h6 class="d-inline text-muted">{{$speaker->name}}</h6>
                </div>
                @endforeach
                @else
                <h6 class="text-muted">No assigned speakers</h6>
                <a href="{{route('speakers')}}">Assign one now</a>
                @endif
                <hr>
                <div class="mt-4">
                    @csrf
                    <input type="hidden" name="id" value="{{$keyword->id}}">
                    <button type="submit" class="btn btn-info">Save</button>
                    <a href="{{route('keywords.delete', ['id' => $keyword->id])}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </form>
    @endforeach
    </div>
@endsection
