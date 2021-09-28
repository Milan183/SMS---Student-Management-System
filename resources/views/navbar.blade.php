<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}"> Student Management System (SMS)</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li><a class="nav-link" href="{{ url('/') }}"> Home </a></li>
      <li><a class="nav-link" href="{{ url('/create') }}"> Create </a></li>
      <li><a class="nav-link" href="{{ url('/edit') }}"> Update </a></li>
      <li><a class="nav-link" href="{{ url('/show') }}"> Show </a></li>
      <li><a class="nav-link" href="{{ url('/delete') }}"> Delete </a></li>
    </ul>
  </div>
</nav>