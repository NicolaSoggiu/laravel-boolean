<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('about') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('travels.index') }}">Your Travels</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Contacts
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">+800 123-45-6789</a></li>
              <li><a class="dropdown-item" href="#">example@example.com</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary text-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>





{{-- <a href="{{ route('home') }}" class="btn btn-light">HOME</a>
<a href="{{ route('about') }}" class="btn btn-light">ABOUT US</a>
<a href="{{ route('travels.index') }}" class="btn btn-light">YOUR TRAVELS</a> --}}