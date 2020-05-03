@extends('../layouts.master')
@section('content')
@include('../partials/erroralert')
    <h5>Creating ticket</h5>
    <hr>
    <form method="POST" action="{{route('tickets.postCreate')}}" class="mb-5">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group mb-4">
            <div class="form-row">
                <div class="col">
                    <label for="price">Price per ticket</label>
                    <input type="number" name="price" class="form-control" step="0.01">
                </div>
                <div class="col">
                    <label for="amount">Amount of tickets</label>
                    <input type="number" name="amount" class="form-control">
                </div>
                <div class="col">
                    <label for="open">Registrations open</label>
                    <select name="open" class="form-control">
                        <option value="1">True</option>
                        <option value="0">False</option>
                    </select>
                </div>
            </div>
        </div>
        @csrf
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="{{route('tickets')}}" class="btn btn-outline-primary">Cancel</a>
    </form>
@endsection
