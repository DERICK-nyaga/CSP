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
    <div class="f-right">
        <li class="nav-item"><a class="nav-link" href="#username">{{ auth()->user()->username }}</a></li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
                @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </li>
    </div>
    @endauth
    @guest()
    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
    @endguest
        </ul>
      </div>
    </div>
</nav>
