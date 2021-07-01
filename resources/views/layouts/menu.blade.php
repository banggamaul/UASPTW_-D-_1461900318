<nav class="navbar navbar-expand-lg navbar-light"style="background-color: #FF165D">
    <div class="container-fluid" >
      <a class="navbar-brand" href="{{URL::to('/')}}" >
        <img src="/images/basket.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Belanja nih
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{URL::to('/pria')}}">Pria<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/wanita')}}">Wanita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/anak')}}">anak-anak</a>
                </li>
                <li class="form-inline my-2 my-lg-0">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="position:absolute; right: 30px;">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>