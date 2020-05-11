@extends('../layouts.master')
@section('content')
@include('../partials/successalert')
    <h3 class="mb-3">Admins</h3>
    <hr>
    <div class="card-columns mb-5">
        @foreach ($admins as $admin)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$admin->name}}</h5>
                    <h6 class="card-subtitle text-muted">{{$admin->email}}</h6>
                    <hr>
                    <form action="{{route('users.update')}}" method="POST">
                        <h6 class="text-muted">Role</h6>
                        <select name="role" class="form-control">
                            <option value="Admin" selected>Admin</option>
                            <option value="Planner">Planner</option>
                            <option value="Finance">Finance</option>
                            <option value="User">User</option>
                        </select>
                        <hr>
                        @csrf
                        <input type="hidden" name="id" value="{{$admin->id}}">
                        <button type="submit" class="btn btn-primary">Update role</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <h3 class="mb-3">Planners</h3>
    <hr>
    <div class="card-columns mb-5">
        @foreach ($planners as $planner)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$planner->name}}</h5>
                    <h6 class="card-subtitle text-muted">{{$planner->email}}</h6>
                    <hr>
                    <form action="{{route('users.update')}}" method="POST">
                        <h6 class="text-muted">Role</h6>
                        <select name="role" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Planner" selected>Planner</option>
                            <option value="Finance">Finance</option>
                            <option value="User">User</option>
                        </select>
                        <hr>
                        @csrf
                        <input type="hidden" name="id" value="{{$planner->id}}">
                        <button type="submit" class="btn btn-primary">Update role</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <h3 class="mb-3">Finance</h3>
    <hr>
    <div class="card-columns mb-5">
        @foreach ($financers as $finance)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$finance->name}}</h5>
                    <h6 class="card-subtitle text-muted">{{$finance->email}}</h6>
                    <hr>
                    <form action="{{route('users.update')}}" method="POST">
                        <h6 class="text-muted">Role</h6>
                        <select name="role" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Planner">Planner</option>
                            <option value="Finance" selected>Finance</option>
                            <option value="User">User</option>
                        </select>
                        <hr>
                        @csrf
                        <input type="hidden" name="id" value="{{$finance->id}}">
                        <button type="submit" class="btn btn-primary">Update role</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <h3 class="mb-3">Users</h3>
    <hr>
    <div class="card-columns mb-5">
        @foreach ($users as $user)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$user->name}}</h5>
                    <h6 class="card-subtitle text-muted">{{$user->email}}</h6>
                    <hr>
                    <form action="{{route('users.update')}}" method="POST">
                        <h6 class="text-muted">Role</h6>
                        <select name="role" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Planner">Planner</option>
                            <option value="Finance">Finance</option>
                            <option value="User" selected>User</option>
                        </select>
                        <hr>
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <button type="submit" class="btn btn-primary">Update role</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
