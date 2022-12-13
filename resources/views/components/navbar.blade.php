<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="navbar-brand" href="{{route('welcome')}}">
                        <img src="https://isipulsa.web.id/assets/logo.png">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MORE</a>
                </li>
            </ul>
            @auth
            <div class="d-flex user-logged nav-item dropdown no-arrow">
                    <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Halo, {{Auth::user()->name}}!
                        @if (Auth::user()->avatar)
                        <img src="{{Auth::user()->avatar}}" class="user-photo" alt="" style="border-radius: 50%">
                        @else
                        <img src="https://ui-avatars.com/api/?name=Admin" class="user-photo" alt="" style="border-radius: 50%">
                        @endif
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto">
                            <li>
                                <a href="{{route('dashboard')}}" class="dropdown-item">My Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                                <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </li>
                        </ul>
                    </a>
                </div>
            @else
                <div class="d-flex">
                    <a href="{{route('login')}}" class="btn btn-primary" style="padding-right: 30px;">
                        LOGIN
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>
<div class="hero">
<div class="p-5 text-center bg-image" style="
background-image: url('https://isipulsa.web.id/assets/main-banner6.png');
height: 350px; width: 1000px; margin-left: 450px">
<div class="mask">
<div class="d-flex justify-content-center align-items-center h-100">
  {{-- <div class="text-hero" style="padding-top: 50px">
    <h1 class="mb-3">Heading</h1>
    <h4 class="mb-3">Subheading</h4>
    <a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
  </div> --}}
</div>
</div>
</div>
</div>