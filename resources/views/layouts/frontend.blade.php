<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RentKu</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('frontend/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css') }}" />
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="{{ route('homepage') }}">
      <img src="{{ asset('image/logogo.png') }}" alt="Logo RentKu" />
    </a>

    <!-- Home and Contact Links next to Logo -->
    <ul class="navbar-nav me-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('homepage')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact')}}">Contact</a>
      </li>
    </ul>

    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        @guest
        <li class="nav-item">
          <a class="nav-link text-dark" href="login">Login</a>
        </li>
        <li class="nav-item text-dark">
          <a class="nav-link" href="register">Register</a>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('profile.edit') }}">
              <i class="bi bi-person"></i> Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
            </a>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>


        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Header-->
@yield('content')
    <!-- Footer-->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">
          Copyright &copy; Rentku
        </p>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="{{asset("frontend/js/bootstrap.js")}}"></script>
    <!-- Core theme JS-->
    <script src="{{asset("frontend/js/scripts.js") }}"></script>

    <script src="{{asset("backend/vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("backend/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset("backend/vendor/jquery-easing/jquery.easing.min.js")}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset("backend/js/sb-admin-2.min.js")}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset("backend/vendor/chart.js/Chart.min.js")}}"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

  </body>
</html>
