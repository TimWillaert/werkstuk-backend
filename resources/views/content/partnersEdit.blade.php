@extends('../layouts.master')
@section('content')
@include('../partials/erroralert')
    <h5>Editing partner/sponsor</h5>
    <hr>
    <form method="POST" action="{{route('partners.update')}}" class="mb-5" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$partner->name}}">
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <label for="type">Type</label>
                    <select name="type" class="form-control">
                        <option value="Partner" {{$partner->type === 'Partner' ? 'selected' : ''}}>Partner</option>
                        <option value="Sponsor" {{$partner->type === 'Sponsor' ? 'selected' : ''}}>Sponsor</option>
                    </select>
                </div>
                <div class="col">
                    <label for="level">Level</label>
                    <select name="level" class="form-control">
                        <option value="Bronze" {{$partner->level === 'Bronze' ? 'selected' : ''}}>Bronze</option>
                        <option value="Silver" {{$partner->level === 'Silver' ? 'selected' : ''}}>Silver</option>
                        <option value="Gold" {{$partner->level === 'Gold' ? 'selected' : ''}}>Gold</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Logo</label>
            <div class="row">
                <div class="col-1">
                    <img class="rounded" src="data:image/png;base64, {{$partner->img}}" style="width: 40px; height: 40px; object-fit: cover;">
                </div>
                <div class="col-11">
                    <input type="file" class="custom-file-input" id="customFile" name="logo">
                    <label class="custom-file-label" for="customFile">{{$partner->imgname}}</label>
                </div>
            </div>
        </div>
        <div class="form-group mb-4">
            <label for="website">Website</label>
            <input type="text" name="website" class="form-control" value="{{$partner->website}}">
        </div>
        @csrf
        <input type="hidden" value="{{$partner->id}}" name="id">
        <button class="btn btn-primary" type="submit">Update</button>
        <a href="{{route('partners')}}" class="btn btn-outline-primary">Cancel</a>
    </form>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

    <script>
        $(document).ready(function () {
        bsCustomFileInput.init();
    })
    </script>
@endsection
