<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home')}}">Dots&Pix</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link {{ Request::is('sessions') ? 'active' : '' }}" href="{{route('sessions')}}">Sessions</a>
        <a class="nav-item nav-link {{ Request::is('speakers') ? 'active' : '' }}" href="{{route('speakers')}}">Speakers</span></a>
        <a class="nav-item nav-link" href="#">Timetable</a>
        <a class="nav-item nav-link {{ Request::is('partners') ? 'active' : '' }}" href="{{route('partners')}}">Sponsors and Partners</a>
        <a class="nav-item nav-link" href="#">Tickets</a>
      </div>
    </div>
  </nav>
