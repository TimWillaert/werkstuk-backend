@extends('../layouts.master')
@section('content')
    <h5>Editing speaker</h5>
    <hr>
    <form method="POST" action="{{route('speakers.update')}}" class="mb-5" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$speaker->name}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="5" class="form-control">{{$speaker->description}}</textarea>
        </div>
        <div class="form-group">
            <label>Keywords</label>
            @foreach ($keywords as $keyword)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="keywords[]" value="{{$keyword['id']}}" {{$speaker->keywords->contains($keyword->id) ? 'checked' : ''}} id="{{$keyword['id']}}">
                    <label for="{{$keyword['id']}}" class="custom-control-label">{{$keyword['name']}}</label>
                </div>
            @endforeach
        </div>
        <div class="pb-3">
            <a href="{{route('keywords.create')}}" target="_blank">Add keyword</a>
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" name="website" class="form-control" value="{{$speaker->website}}">
        </div>
        <div class="form-group">
            <label>Profile picture</label>
            <div class="row">
                <div class="col-1">
                    <img class="rounded d-inline" src="data:image/png;base64, {{$speaker->profilepic}}" style="width: 40px; height: 40px; object-fit: cover;">
                </div>
                <div class="col-11 custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="profilepic">
                    <label class="custom-file-label" for="customFile">{{$speaker->profilepicname}}</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Key images</label>
            <div class="row mb-2">
                <div class="col-1">
                    <img class="rounded" src="data:image/png;base64, {{$speaker->images[0]->src}}" style="width: 40px; height: 40px; object-fit: cover;">
                </div>
                <div class="col-11 custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image1">
                    <label class="custom-file-label" for="customFile">{{$speaker->images[0]->name}}</label>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-1">
                    <img class="rounded" src="data:image/png;base64, {{$speaker->images[1]->src}}" style="width: 40px; height: 40px; object-fit: cover;">
                </div>
                <div class="col-11 custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image2">
                    <label class="custom-file-label" for="customFile">{{$speaker->images[1]->name}}</label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-1">
                    <img class="rounded" src="data:image/png;base64, {{$speaker->images[2]->src}}" style="width: 40px; height: 40px; object-fit: cover;">
                </div>
                <div class="col-11 custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image3">
                    <label class="custom-file-label" for="customFile">{{$speaker->images[2]->name}}</label>
                </div>
            </div>
        </div>
        @csrf
        <input type="hidden" value="{{$speaker->id}}" name="id">
        <button class="btn btn-primary" type="submit">Update</button>
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
