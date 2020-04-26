    @if (session('added'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            Added: <b>{{session('added')}}</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session('updated'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            Updated: <b>{{session('updated')}}</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session('deleted'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            Deleted: <b>{{session('deleted')}}</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session('timetable'))
        @foreach (session('timetable') as $updated)
            <div class="alert alert-success alert-dismissable fade show" role="alert">
                Updated: <b>{{$updated}}</b>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @elseif(session('error'))
        <div class="alert alert-danger alert-dismissable fade show" role="alert">
            Error: <b>{{session('error')}}</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
