@extends('../layouts.master')
@section('content')
    <form method="POST" action="{{route('sessions.update')}}" class="mb-5">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{$session->title}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control">{{$session->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="speaker">Speaker</label>
            <select name="speaker" class="form-control">
            @foreach ($speakers as $speaker)
                <option value="{{$speaker->id}}" @if ($session->spreker->id === $speaker->id)
                    selected
                @endif>{{$speaker->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="{{$session->location}}">
        </div>
        <div class="form-group">
        <div class="form-row">
            <div class="col">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" value="{{$session->date}}">
            </div>
            <div class="col">
                <label for="time_start">Start time</label>
                <input type="time" name="time_start" class="form-control" value="{{$session->time_start}}">
            </div>
            <div class="col">
                <label for="time_end">End time</label>
                <input type="time" name="time_end" class="form-control" value="{{$session->time_end}}">
            </div>
        </div>
        </div>
        @csrf
        <input type="hidden" value="{{$session->id}}" name="id">
        <button class="btn btn-primary mt-2" type="submit">Update</button>
        <a href="{{route('sessions')}}" class="btn btn-outline-primary mt-2">Cancel</a>
    </form>
@endsection
