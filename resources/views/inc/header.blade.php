<div class="header d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a class="p-2 text-light" href="#">Golden Bank</a></h5>
  <div class="mx-auto order-0">
    <a class="p-2 text-light" href="{{route('index')}}">Home</a>
    <a class="p-2 text-light" href="{{route('shop')}}">Shop</a>
    <a class="p-2 text-light" href="#">Платежи</a>
    <a class="p-2 text-light" href="{{route('mybank')}}">My Bank</a>
    <a class="p-2 text-light" href="#">Переводы</a>
    <a class="p-2 text-light" href="{{route('services')}}">Services</a>
  </div>
  <div class="ml-auto">
      @if (Route::has('login'))
        @auth
        @if(Auth::user()->isUser())
          <!--<a class="p-2 text-light" href="{{url('mybank')}}">Cabinet</a>
          <a class="p-2 text-light" href="{{url('index')}}">Home</a>-->
        @elseif(Auth::user()->isAdmin())
          <a class="p-2 text-light" href="{{route('admin.index')}}">Admin Panel</a>
          <a class="p-2 text-light" href="{{url('/')}}">Home</a>
        @endif
          <strong>
            <a id="navbarDropdown" class="p-2 text-light dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} {{ Auth::user()->surname}} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <p class="dropdown-item">IIN: {{ Auth::user()->user_iin }}</p>
              <a class="dropdown-item" href="#">
                Change password
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
        </strong>

      @else
      @if (Route::has('register'))
        <a class="nav-link" href="{{ route('login') }}"><img id="img" src="{{asset('img/login_30px.png')}}"></a>
      @endif
      @endauth

    @endif

  </div>
</div>
