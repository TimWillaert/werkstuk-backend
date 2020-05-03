@extends('../layouts.master')
@section('content')
    <h1>Uh oh :(</h1>
    <hr>
    <p>You are not allowed to do this as your role is <b>{{Auth::user()->role}}</b>.<br>
        Please contact an admin to resolve this issue.
    </p>
@endsection
