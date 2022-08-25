<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- meta tags  --}}
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- Bootstrap CSS  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/c101a12428.js" crossorigin="anonymous"></script>
    
    {{-- my style --}}
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/button.css">
    <link href="/css/profile/profile.css" rel="stylesheet" />
    <link href="/css/profile/edit.css" rel="stylesheet" />
    <link href="/css/post/index.css" rel="stylesheet" />
    
    {{-- script --}}
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
    
    <title>{{ $pageTitle }}</title>
  </head>
  <body style="background-attachment: fixed">
    <div class="container-fluid p-0">
      <!-- Navbar -->
      <div class="bg-light">
        <nav class="navbar navbar-expand-md navbar-light mx-3 px-5 py-3 bg-light">
          <a class="navbar-brand" href="/">Game Station</a>
          <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-list"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
              />
            </svg>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="#"
                  >Library <span class="visually-hidden">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $active == 'store' ? 'active' : '' }}" href="/games">Store</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $active == 'profile' ? 'active' : '' }}" href="/profile/{{ auth()->user()->username }}">Profile</a>
              </li>
              <li class="nav-item dropdown disabled">
                <a
                  class="nav-link dropdown-toggle disabled"
                  href="#"
                  id="dropdownId"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Comunity</a
                >
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="#">Home</a>
                  <a class="dropdown-item" href="#">Market</a>
                  <a class="dropdown-item" href="#">Workshop</a>
                  <a class="dropdown-item" href="#">Artwork</a>
                </div>
              </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
              <input
                class="form-control form-control-sm me-sm-2"
                type="text"
                placeholder="Search"
              />
              <button
                class="btn btn-outline-success btn-sm my-2 my-sm-0"
                type="submit"
              >
                Search
              </button>
            </form>
          </div>
        </nav>
      </div>

      <!-- line -->
      <div class="line line-color"></div>

      @yield('content')

    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
        type="text/javascript"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"
    ></script>
    
    <!-- my JavaScript -->
    <script src="/js/home.js"></script>
    <script type="text/javascript" src="/js/profile/profile.js"></script>
  </body>
</html>
