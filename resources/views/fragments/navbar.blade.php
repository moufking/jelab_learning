<nav class="navbar navbar-expand-lg navbar-light bg-light " style="z-index: 10">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Jelab') }}
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName()=== 'app_home')  active @endif " aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName()=== '')  active @endif " aria-current="page" href="/formation">{{__('formation')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">{{__('')}}</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarLang" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                {{ Config::get('languages')[App::getLocale()] }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarLang">
            @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                      <li> <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a></li>
                @endif
            @endforeach
            </ul>
        </li>
          
        </ul>
         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @auth
            <li class="nav-item">
                <a class="nav-link" href="">{{__('')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">{{__('')}}</a>
              </li>
            @endauth

            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Str::upper( Auth::user()->nom) }} {{ Str::ucfirst( Auth::user()->prenom) }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>

