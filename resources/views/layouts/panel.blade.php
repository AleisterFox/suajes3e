
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <title>
    {{config('app.name')}} | @yield('title')
  </title>
  <!-- Favicon -->
  <link href="{{asset('img/brand/favicon.ico')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset ('js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset ('js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- CSS Files -->
  <link href="{{asset ('/css/argon-dashboard.css?v=1.1.2')}}" rel="stylesheet" />
  <link href="{{asset ('/css/items.css')}}" rel="stylesheet"/>
  <link href="{{asset ('/css/form.css')}}" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
  @livewireStyles
  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="/home">
        <img src="{{asset ('img/brand/logo.png')}}" class="navbar-logo" alt="logo suajes y montajes 3e">
      </a>
      <!-- User -->
      <!-- <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{asset ('img/theme/team-1-800x800.jpg')}}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul> -->
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="{{asset ('img/brand/logo.png')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <!-- <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form> -->
        <!-- Navigation -->
         @include('includes.panel.menu')
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        @yield('brand')
        <!-- Form -->
        <!-- <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form> -->

        <!-- User -->

        <!-- <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{asset ('img/theme/team-4-800x800.jpg')}}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Profile Name</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
            </div>
          </li>
        </ul> -->
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-4 pt-md-6">
      
    </div>
    <div class="container-fluid">
        @yield('content')
      <!-- Footer -->
      <!-- @include('includes.panel.footer') -->
    </div>
  </div>
  <!--   Core   -->
  <script src="{{asset ('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset ('js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset ('js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset ('js/argon-dashboard.min.js?v=1.1.2')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <livewire:scripts />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

</body>

<script>

    function calcular() {
        try{
            var a = parseFloat(document.getElementById("Qty1").value)||0,
            b = parseFloat(document.getElementById("S1").value)||0;

            document.getElementById("Subtotal1").value = a * b;

            c = parseFloat(document.getElementById("Subtotal1").value)||0,
            d = parseFloat(document.getElementById("Subtotal2").value)||0,
            f = parseFloat(document.getElementById("Subtotal3").value)||0,
            g = parseFloat(document.getElementById("Subtotal4").value)||0,
            h = parseFloat(document.getElementById("Subtotal5").value)||0;
            document.getElementById("Total").value = c + d + f + g + h;
        } catch (e){}

        try{
            var a = parseFloat(document.getElementById("Qty2").value)||0,
            b = parseFloat(document.getElementById("S2").value)||0;

            document.getElementById("Subtotal2").value = a * b;

            c = parseFloat(document.getElementById("Subtotal1").value)||0,
            d = parseFloat(document.getElementById("Subtotal2").value)||0,
            f = parseFloat(document.getElementById("Subtotal3").value)||0,
            g = parseFloat(document.getElementById("Subtotal4").value)||0,
            h = parseFloat(document.getElementById("Subtotal5").value)||0;
            document.getElementById("Total").value = c + d + f + g + h;
        } catch (e){}

        try{
            var a = parseFloat(document.getElementById("Qty3").value)||0,
            b = parseFloat(document.getElementById("S3").value)||0;

            document.getElementById("Subtotal3").value = a * b;

            c = parseFloat(document.getElementById("Subtotal1").value)||0,
            d = parseFloat(document.getElementById("Subtotal2").value)||0,
            f = parseFloat(document.getElementById("Subtotal3").value)||0,
            g = parseFloat(document.getElementById("Subtotal4").value)||0,
            h = parseFloat(document.getElementById("Subtotal5").value)||0;
            document.getElementById("Total").value = c + d + f + g + h;
        } catch (e){}

        try{
            var a = parseFloat(document.getElementById("Qty4").value)||0,
            b = parseFloat(document.getElementById("S4").value)||0;

            document.getElementById("Subtotal4").value = a * b;

            c = parseFloat(document.getElementById("Subtotal1").value)||0,
            d = parseFloat(document.getElementById("Subtotal2").value)||0,
            f = parseFloat(document.getElementById("Subtotal3").value)||0,
            g = parseFloat(document.getElementById("Subtotal4").value)||0,
            h = parseFloat(document.getElementById("Subtotal5").value)||0;
            document.getElementById("Total").value = c + d + f + g + h;
        } catch (e){}

        try{
            var a = parseFloat(document.getElementById("Qty5").value)||0,
            b = parseFloat(document.getElementById("S5").value)||0;

            document.getElementById("Subtotal5").value = a * b;

            c = parseFloat(document.getElementById("Subtotal1").value)||0,
            d = parseFloat(document.getElementById("Subtotal2").value)||0,
            f = parseFloat(document.getElementById("Subtotal3").value)||0,
            g = parseFloat(document.getElementById("Subtotal4").value)||0,
            h = parseFloat(document.getElementById("Subtotal5").value)||0;
            document.getElementById("Total").value = c + d + f + g + h;
        } catch (e){}
        
    }

    function sumaTotal() {
      try{
        var a = parseFloat(document.getElementById("Subtotal1").value)||0,
        b = parseFloat(document.getElementById("Subtotal2").value)||0,
        c = parseFloat(document.getElementById("Subtotal3").value)||0,
        d = parseFloat(document.getElementById("Subtotal4").value)||0,
        f = parseFloat(document.getElementById("Subtotal5").value)||0;

        document.getElemntById("Total").value = a+b+c+d+f;
      } catch (e){}
    }

    var textarea = document.querySelector('textarea');
    textarea.addEventListener('keydown', autosize);
    var estimate = document.getElementById("estimate");
    function autosize(){
        var el = this;
        setTimeout(function(){
            el.style.cssText = 'height:auto; padding:0';
            el.style.cssText = 'height:' + el.scrollHeight + 'px';
            estimate.scrollTop = estimate.scrollHeight;
        },0);
    }


// second

$(function(){
  var $sections=$('.form-section');
  function navigateTo(index){
      $sections.removeClass('current').eq(index).addClass('current');
      $('.form-navigation .previous').toggle(index>0);
      var atTheEnd = index >= $sections.length - 1;
      $('.form-navigation .next').toggle(!atTheEnd);
      $('.form-navigation [Type=submit]').toggle(atTheEnd);

      const step = document.querySelector('.step'+index);
      step.style.backgroundColor="#17a2b8";
      step.style.color="white";
  }

  function curIndex(){
      return $sections.index($sections.filter('.current'));
  }
  $('.form-navigation .previous').click(function(){
      navigateTo(curIndex() - 1);
  });
  $('.form-navigation .next').click(function(){
      $('.employee-form').parsley().whenValidate({
          group:'block-'+curIndex()
      }).done(function(){
          navigateTo(curIndex()+1);
      });
  });
  $sections.each(function(index,section){
      $(section).find(':input').attr('data-parsley-group','block-'+index);
  });
  navigateTo(0);
});

</script>
</html>