@extends('../layouts.master')
@section('content')
@include('../partials/erroralert')
    <h5>Creating speaker</h5>
    <hr>
    <form method="POST" action="{{route('speakers.postCreate')}}" class="mb-5" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Keywords</label>
            @foreach ($keywords as $keyword)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="keywords[]" value="{{$keyword['id']}}" id="{{$keyword['id']}}">
                    <label for="{{$keyword['id']}}" class="custom-control-label">{{$keyword['name']}}</label>
                </div>
            @endforeach
        </div>
        <div class="pb-3">
            <a href="{{route('keywords.create')}}" target="_blank">Add keyword</a>
        </div>
        <div class="form-group">
            <label>Profile picture</label>
            <div class="custom-file mb-2">
                <input type="file" class="custom-file-input" id="customFile" name="profilepic">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-group">
            <label>Key images</label>
            <div class="custom-file mb-2">
                <input type="file" class="custom-file-input" id="customFile" name="image1">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <div class="custom-file mb-2">
                <input type="file" class="custom-file-input" id="customFile" name="image2">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="image3">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" name="website" class="form-control">
        </div>
        @csrf
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="{{route('speakers')}}" class="btn btn-outline-primary">Cancel</a>
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
