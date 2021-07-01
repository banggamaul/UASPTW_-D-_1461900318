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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/images/login.png" alt="" width="37" height="28" class="d-inline-block align-text-top">                
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                            <a class="dropdown-item" href="{{('/login')}}">Login</a>
                        <p>Belum punya akun? <a href="{{ ('/register') }}">Daftar di sini</a></p>               
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{URL::to('/pria')}}">Pria<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/wanita')}}">Wanita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/anak')}}">anak-anak</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>