@extends('../layouts.master')
@section('content')
@include('../partials/erroralert')
    <form method="POST" action="{{route('sessions.postCreate')}}" class="mb-5">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <label for="speaker">Speaker</label>
                    <select name="speaker" class="form-control">
                    @foreach ($speakers as $speaker)
                        <option value="{{$speaker->id}}">{{$speaker->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control" value="2020-10-02">
                </div>
                <div class="col">
                    <label for="time_start">Start time</label>
                    <input type="time" name="time_start" class="form-control">
                </div>
                <div class="col">
                    <label for="time_end">End time</label>
                    <input type="time" name="time_end" class="form-control">
                </div>
            </div>
        </div>
        @csrf
        <button class="btn btn-primary mt-2" type="submit">Submit</button>
        <a href="{{route('sessions')}}" class="btn btn-outline-primary mt-2">Cancel</a>
    </form>
@endsection
