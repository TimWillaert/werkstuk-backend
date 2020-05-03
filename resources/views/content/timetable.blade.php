@extends('../layouts.master')
@section('content')
@include('../partials/successalert')
@include('../partials/erroralert')
<form action="{{route('timetable.update')}}" method="POST" class="pb-5">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Session</th>
                <th scope="col">Speaker</th>
                <th scope="col">Start time</th>
                <th scope="col">End time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sessions as $session)
                <tr>
                    <td class="align-middle">{{$session->title}}</td>
                    <td class="align-middle">
                        <img class="d-inline m-1 rounded" src="data:image/png;base64, {{$session->spreker->profilepic}}" style="width: 30px; height: 30px; object-fit: cover;">
                        {{$session->spreker->name}}
                    </td>
                    <td>
                        <input type="time" class="form-control" value="{{$session->time_start}}" name="start[]">
                    </td>
                    <td>
                        <input type="time" class="form-control" value="{{$session->time_end}}" name="end[]">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @csrf
    <button class="btn btn-primary float-right mr-2 mt-3" type="submit">Save</button>
</form>
@endsection
