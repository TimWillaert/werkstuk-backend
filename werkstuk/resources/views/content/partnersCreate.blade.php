@extends('../layouts.master')
@section('content')
@include('../partials/erroralert')
    <form method="POST" action="{{route('partners.postCreate')}}" class="mb-5" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <label for="type">Type</label>
                    <select name="type" class="form-control">
                        <option value="Partner">Partner</option>
                        <option value="Sponsor">Sponsor</option>
                    </select>
                </div>
                <div class="col">
                    <label for="level">Level</label>
                    <select name="level" class="form-control">
                        <option value="Bronze">Bronze</option>
                        <option value="Silver">Silver</option>
                        <option value="Gold">Gold</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Logo</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="logo">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label for="website">Website</label>
            <input type="text" name="website" class="form-control">
        </div>
        @csrf
        <button class="btn btn-primary" type="submit">Submit</button>
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
