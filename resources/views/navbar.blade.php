  <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color:#000000">
    <div class="container">
      <a class="navbar-brand" href="home">SPK - GAMING SMARTPHONE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link {{ ($title === "HOME") ? 'active' : '' }}" href="home">Beranda</a>
          <a class="nav-link {{ ($title === "ABOUT") ? 'active' : '' }}" href="about">Tentang</a>
          @auth
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, Admin
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              <li>
                  <form action="/logout" method="post">
                    @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                  </form>
            </li>
            </ul>
          </div>
          @else
            <a class="nav-link {{ ($title === "ADMIN") ? 'active' : '' }}" href="admin">Masuk</a>
          @endauth
        </div>
      </div>
    </div>
  </nav>
