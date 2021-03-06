    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Resume Creator </title>
        <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('js/select.dataTables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    </head>

    <body>
        <div class="container-scroller">
            <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                    <div class="me-3">
                        <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                            data-bs-toggle="minimize">
                            <span class="icon-menu"></span>
                        </button>
                    </div>
                    <div>
                        <a class="navbar-brand brand-logo" href="index.html">
                            <img src="{{ asset('images/logo-laravel2.png') }}"
                                style="width: 600px; height: 50px; image-resolution: 100%;" alt="logo" />
                        </a>
                        <a class="navbar-brand brand-logo-mini" href="index.html">
                            <img src="{{ asset('images/logo-mini.svg') }}" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-top">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="img-xs rounded-circle" src="{{ asset('images/avatar.jpg') }}"
                                    alt="Profile image"> </a>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-bs-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            <div class="container-fluid page-body-wrapper">
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item active">
                            <a class="nav-link " href="{{ url('/') }}">
                                <i class="mdi mdi-grid-large menu-icon"></i>
                                <span class="menu-title">See Resume</span>
                            </a>
                        </li>
                        <li class="nav-item nav-category"><a class="nav-link" href="{{ url('admin') }}">Home</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                                aria-controls="ui-basic">
                                <i class="menu-icon mdi mdi-floor-plan"></i>
                                <span class="menu-title">Resume Parts</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link"
                                            href="{{ url('resume') }}">Create Resume</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="{{ url('skills') }}">Add
                                            Skill</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="{{ url('workexperience') }}">Add WorkExperience</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="{{ url('education') }}">Add Education</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="{{ url('socialnetwork') }}">Add SocialNetwork</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="{{ url('contacts') }}">Messages</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="main-panel">
                    <div class="content-wrapper">
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @elseif (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                        <div class="home-tab">
                            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                <div>
                                    @if (Route::has('login'))
                                        <div class="btn-wrapper">
                                            @auth
                                                <a href="{{ route('logout') }}" class="btn btn-otline-dark"
                                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                    Sign Out
                                                </a>
                                                <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            @else
                                                <a href="{{ route('login') }}"
                                                    class="btn btn-otline-dark align-items-center"><i
                                                        class="fas fa-sign-in-alt"></i> Sign in</a>

                                                @if (Route::has('register'))

                                                    <a href="{{ route('register') }}"
                                                        class="btn btn-primary text-white me-0"><i
                                                            class="far fa-registered"></i> Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
