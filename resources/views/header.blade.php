<nav class="navbar navbar-default navbar-expand-lg" role="navigation-demo">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{URL::to('/')}}"><img src="./assets/img/Hotpot.png" class="smms"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
          <li class="nav-item">
            <a href="{{URL::to('/price')}}"class="nav-link">
              Price
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/login')}}" class="nav-link">
              Login
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/about_us')}}" class="nav-link">
              About us
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/register')}}" class="btn  btn-raised btn-round ">
              Register
            </a>
          </li>
          
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-->
  </nav> 
  <!--                end default navbar -->

  
  {{-- cc --}}
