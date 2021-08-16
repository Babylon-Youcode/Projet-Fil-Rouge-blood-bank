<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <title> Dashboard</title>
</head>

<body>
    
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <div class="site-logo">
                    <a href="{{url ('/') }}"><img src="/assets/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="/dash" class="list-group-item list-group-item-action bg-transparent second-text "><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>

                        {{-- <a href="{{route('profile')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-user me-2"></i>
                            {{ __('Profile') }}
                        </a> --}}
                <a href="{{url ('/Users/User') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-hand-holding-medical me-2" ></i>User</a>
            
            
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="list-group-item list-group-item-action bg-transparent text-danger fw-bold" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <i class="fas fa-power-off me-2"> </i> 
                            {{ __('Logout') }}
                    </a>
                    </form> 
                    
                   
            </div>
        </div>
     


        @yield('sidebar')
    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            var el = document.getElementById("wrapper");
            var toggleButton = document.getElementById("menu-toggle");
    
            toggleButton.onclick = function () {
                el.classList.toggle("toggled");
            };
        </script>
    </body>
    
    </html>