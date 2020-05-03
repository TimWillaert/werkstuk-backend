@extends('../layouts.master')
@section('content')
@include('../partials/successalert')
    <a href="{{route('tickets.create')}}" role="button" class="btn btn-primary">Add ticket</a>
    <hr>
    <div class="card-columns">
    @foreach ($tickets as $ticket)
        @if ($ticket->open)
            <div class="card border-success">
        @else
            <div class="card border-danger">
        @endif
            <div class="card-body">
                <h5 class="card-title">{{$ticket->name}} - €{{$ticket->price}}</h5>
                <hr>
                <h6 class="text-muted">To be sold: {{$ticket->amount}}</h6>
                @if ($ticket->open)
                    <h6 class="text-success">Open</h6>
                @else
                    <h6 class="text-danger">Closed</h6>
                @endif
                <div class="mt-4">
                    <a href="{{route('tickets.edit', ['id' => $ticket->id])}}" class="btn btn-info">Edit</a>
                    <a href="{{route('tickets.delete', ['id' => $ticket->id])}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
