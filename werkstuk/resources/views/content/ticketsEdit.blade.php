@extends('../layouts.master')
@section('content')
@include('../partials/erroralert')
    <form method="POST" action="{{route('tickets.update')}}" class="mb-5">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$ticket->name}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control">{{$ticket->description}}</textarea>
        </div>
        <div class="form-group mb-4">
            <div class="form-row">
                <div class="col">
                    <label for="price">Price per ticket</label>
                    <input type="number" name="price" class="form-control" step="0.01" value="{{$ticket->price}}">
                </div>
                <div class="col">
                    <label for="amount">Amount of tickets</label>
                    <input type="number" name="amount" class="form-control" value="{{$ticket->amount}}">
                </div>
                <div class="col">
                    <label for="open">Registrations open</label>
                    <select name="open" class="form-control">
                        <option value="1" {{$ticket->open === '1' ? 'selected' : ''}}>True</option>
                        <option value="0" {{$ticket->open === '0' ? 'selected' : ''}}>False</option>
                    </select>
                </div>
            </div>
        </div>
        @csrf
        <input type="hidden" value="{{$ticket->id}}" name="id">
        <button class="btn btn-primary" type="submit">Update</button>
        <a href="{{route('tickets')}}" class="btn btn-outline-primary">Cancel</a>
    </form>
@endsection
