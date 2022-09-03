<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('icon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('icon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('icon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    {{-- ANIMATE --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    {{-- DATATABLE --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/datatables.min.css"/>
    
    {{-- SELECT2 CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    
    {{-- DATE PICKER CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    
    {{-- BOOTSTRAP ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    {{-- JQUERY --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    {{-- SELECT 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    {{-- SWEET ALERT --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    {{-- DATATABLE --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/r-2.3.0/datatables.min.js"></script>
    
    {{-- DATE PICKER --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    
    <style type="text/css">
        .sweet_loader {
            width: 140px;
            height: 140px;
            margin: 0 auto;
            animation-duration: 0.5s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-name: ro;
            transform-origin: 50% 50%;
            transform: rotate(0) translate(0,0);
        }
        @keyframes ro {
            100% {
                transform: rotate(-360deg) translate(0,0);
            }
        }
        main {
            height: 100%;
        }
        body {
            min-height: 100%;
        }
        .nav-link{
            color: #fff !important;
            font-size: 20px !important;
        }
        /* NavBar Color */
        .navbar-light .navbar-toggler-icon {
            background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e);
            background-color: white;
            border-radius: 5px;
        }

        /* Datatable Print Button */
        button.btn.btn-secondary.buttons-excel.buttons-html5 {
            margin-left: 10px;
        }   
    </style>
    
    <script type="text/javascript">
        var sweet_loader = '<div class="sweet_loader"><svg viewBox="0 0 140 140" width="140" height="140"><g class="outline"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="rgba(0,0,0,0.1)" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></g><g class="circle"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="#71BBFF" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-dashoffset="200" stroke-dasharray="300"></path></g></svg></div>';
    </script>
</head>

<body>
    <form class="inline" method="POST" action="/logout" id="logoutForm">
        @csrf
    </form>
    <div class="container-fluid min-vh-100 d-flex flex-column">
        <div class="row">
            <div class="col px-0">
                <nav class="navbar navbar-expand-md navbar-light shadow-sm bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand text-white" href="{{ url('/') }}" style="font-weight: 600;">
                            {{-- <img src="{{ asset('images/logo.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top"> --}}
                            KING'S MANPOWER SERVICES
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                @foreach ($menus as $item)
                                <li class="nav-item d-block d-sm-none">
                                    <a class="nav-link" aria-current="page" href="{{ url($item->link) }}" data-bs-toggle="tooltip" data-bs-placement="right" title="{{$item->description}}"><i class="bi bi-{{$item->icon}}"></i> {{$item->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                            <form class="d-flex text-end justify-content-between">
                                @if(Auth::user()->user_image != "")         
                                    <img class="rounded-circle me-lg-2" src="{{ asset('storage/'.Auth::user()->user_image.'')}}" alt="" style="width: 40px; height: 40px;">         
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="color:white">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                @endif
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{Auth::user()->name}}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">My profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:$('#logoutForm').submit();" >Log Out</a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row flex-grow-1">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color:#212e3a">
                <div class="position-sticky pt-3">
                    {{-- <div class="text-center">
                        <img src="{{ asset('images/logo.png') }}" class="rounded" alt="logo">
                    </div>
                    <hr class="p-2"> --}}
                    <ul class="nav flex-column">
                        @foreach ($menus as $item)
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url($item->link) }}" data-bs-toggle="tooltip" data-bs-placement="right" title="{{$item->description}}"><i class="bi bi-{{$item->icon}}"></i> {{$item->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2">
                <div class="justify-content-center m-2">
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div class="modal fade" id="modal-view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-2 d-none d-md-block">
                                <img src="{{ asset('images/logo.png')}}" class="img-fluid img-thumbnail rounded float-start" alt="...">
                            </div>
                            <div class="col-sm-10">
                                <h3 class="modal-title" id="registerLabel">Register User</h3>
                                <h5>Envision and achieve an optimum goal</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row" id="modal-display">
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="modalclose">Close</button>
                    <button type="button" class="btn btn-primary" id="saveModal">Save</button>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    
    // Bootstrap tooltip Everywhere
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    
    function bootstrapForm(form) {
        
        $(form).find('select.validate').each(function(idx) {
            $(this).parent().find('input').addClass("is-invalid");
            if ($(this).val().length == 0) {
                throw new Error("Something went badly wrong!");
            } else {
                $(this).parent().find('input').removeClass("is-invalid");
                $(this).parent().find('input').addClass("is-valid");
            }
        });
        
        $(form).find('input.validate').each(function(idx) {
            if ($(this).val().length == 0) {
                $(this).addClass("is-invalid");
                throw new Error("Something went badly wrong!");
            } else {
                $(this).removeClass("is-invalid").addClass("is-valid");
            }
        });
        
        
        $(form).find('textarea.validate').each(function(idx) {
            if ($(this).val().length == 0) {
                $(this).addClass("is-invalid");
                throw new Error("Something went badly wrong!");
            } else {
                $(this).removeClass("is-invalid").addClass("is-valid");
            }
        });
        return true;
    }

    function openWindowWithPost(url, data) {
        var form = document.createElement("form");
        form.target = "_blank";
        form.method = "POST";
        form.action = url;
        form.style.display = "none";

        for (var key in data) {
            var input = document.createElement("input");
            input.type = "hidden";
            input.name = key;
            input.value = data[key];
            form.appendChild(input);
        }

        // Add CSRF
        // var csrf = document.createElement("input");
        //     csrf.type = "hidden";
        //     csrf.name = "_token";
        //     csrf.value = "{{ csrf_token() }}";
        //     form.appendChild(input);
        // form.appendChild(@csrf)

        document.body.appendChild(form);
        form.submit();
        document.body.removeChild(form);
    }


</script>
</html>
