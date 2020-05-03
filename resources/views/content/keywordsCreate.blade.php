@extends('../layouts.master')
@section('content')
@include('../partials/erroralert')
    <h5>Creating keyword</h5>
    <hr>
    <form method="POST" action="{{route('keywords.postCreate')}}" class="mb-5">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group" id="speakers">
            <label for="speakers[]">Speakers (Not required)</label>
            <div class="form-row mb-2">
                <div class="col-11">
                    <select name="speakers[]" class="form-control">
                        <option value=""></option>
                        @foreach ($speakers as $speaker)
                        <option value="{{$speaker->id}}">{{$speaker->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-danger" onclick="removeSpeaker(this)">Remove</button>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-info mb-3" onclick="addSpeaker()">Add speaker</button>
        </div>
        @csrf
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="{{route('keywords')}}" class="btn btn-outline-primary">Cancel</a>
    </form>


    <script>
        function removeSpeaker(element){
            $(element).closest('.form-row').remove();
        }

        function addSpeaker(){
            $("#speakers").children().eq(1).clone().appendTo("#speakers");
            //$('.form-row').clone().appendTo("#speakers");
        }
    </script>
@endsection
