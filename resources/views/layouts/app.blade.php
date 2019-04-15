<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
     <!-- font awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
     
     <!-- main style -->
    <link rel="stylesheet" href="/css/main.css" >
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li> <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-registered"></i> {{ __('Register') }}</a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-tasks"></i>   My account<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('companies.index')}}">
                                    <i class="fas fa-warehouse"></i>  Companies
                                </a>
                                <a class="dropdown-item" href="{{route('projects.index')}}">
                                    <i class="fas fa-briefcase"></i>   Projects
                              </a>
                              <a class="dropdown-item" href="{{route('tasks.index')}}">
                                <i class="fas fa-tasks"></i>  Tasks
                            </a>

        
                            </div>
                        </li>
                     @if(Auth::user()->role_id == 1)
                        
                         <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user"></i> Admin <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('companies.index')}}">
                                    <i class="fas fa-building"></i> All Companies
                                </a>
                                <a class="dropdown-item" href="{{route('projects.index')}}">
                                    <i class="fas fa-briefcase"></i> All  Projects
                              </a>
                              <a class="dropdown-item" href="{{route('tasks.index')}}">
                                <i class="fas fa-tasks"></i> All  Tasks
                            </a>
                            <a class="dropdown-item" href="{{route('roles.index')}}">
                                <i class="fas fa-tasks"></i> Roles permissions
                            </a>
        
                            </div>
                        </li>

                    @endif



                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fas fa-sign-out-alt"></i>   {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="container">
        
           
            @include('partials.message')

            @yield('content')
            </div>
        </main>
    </div>
      
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
     
    //  $(document).ready(){
    //       $("#comment-content").click(function(){
              
    //           console.log('gfgf');
    //         $('#comment').fadeIn();
    //       });
    //  }
    $(document).ready(function(){
        $('#comment-content').click(function(){
               $('#comment').fadeToggle(5000);
            });
    });
       

    </script>
  
</body>
</html>
