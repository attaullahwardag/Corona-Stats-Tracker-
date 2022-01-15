<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Page Metas -->
     @yield('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src="{{URL::asset('images/logo.png')}}" alt="w3corona" >
                    <span class="text-success" >w3</span><span class="text-danger">Corona</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            <li class="nav-item">
                                <a class="nav-link" href="/covid"> What is Covid-19 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/blog"> Blog </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/privacy"> Privacy </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about"> About Us </a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
            @yield('content')
        </main>
        <!-- Footer -->
        <footer class="page-footer font-small indigo">
            <!-- Footer Links -->
            <div class="container">
            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a class="mlink" href="about">About us</a>
                </h6>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a class="mlink" href="/covid">What is Covid-19</a>
                </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a class="mlink" href="#!">Prevetion</a>
                </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a class="mlink" href="/privacy">Privacy Policy</a>
                </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a class="mlink" href="/blog">Blog</a>
                </h6>
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Grid row-->
            <hr class="rgba-white-light" style="margin: 0 15%;">
        
            <!-- Grid row-->
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
        
                <!-- Grid column -->
                <div class="col-md-8 col-12 mt-5">
                    <h5 class="footerheading"> w3corona.com is Live Coronavirus Covid-19 Statistics Tracker</h5>
                    <p> At w3corona.com you will get total infected cases, news cases, total death and recoveries from corona virus. infact you will get full statistics of covid-19 pandamic. We get data from an authentic real-time service that tracks the coronavirus worldwide and provides updated news and statistics worldwide. Though w3corona.com is a Live Corona virus Tracker but still some countries are realeasing their statistics after 3PM </p>
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Grid row-->
            <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">
        
            <!-- Grid row-->
            <div class="row pb-3">
                <!-- Grid column -->
                <div class="col-md-12">
                <div class="mb-5 text-center flex-center">
                    <!-- Facebook -->
                    <a class="fb-ic">
                    <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                    <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                    <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                    <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                    <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                    </a>
                    <!--Pinterest-->
                    <a class="pin-ic">
                    <i class="fab fa-pinterest fa-lg white-text"> </i>
                    </a>
                </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row-->
            </div>
            <!-- Footer Links -->
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">Designed with <span class="text-dred"><i class="fas fa-heart"></i></span>  By
            <a class="mlink" href="https://akexplains.com/">Attaullah Wardag</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>

 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
</body>
</html>
