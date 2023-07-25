<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('companies') }}">DNLC&#8482;</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            @foreach ($usernav as $navbarItem)
            <li class="nav-item">
                <a class="nav-link" href="{{ route($navbarItem->route)}}">
                    {{ $navbarItem->name }}</a>
            </li>
        @endforeach
    @auth
        <li class="nav-item"><a class="nav-link" href="#username">Username</a></li>
        <li class="nav-item"><a class="nav-link" href="#logout">Logout</a></li>
    @endauth
    @guest()
    <li class="nav-item"><a class="nav-link" href="#register">Register</a></li>
    <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
    @endguest
        </ul>
      </div>
    </div>
</nav>
