<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/now-ui-dashboard-pro"/>


    <!--  Social tags      -->
    <meta name="keywords"
          content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, now ui dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, now ui design, now ui dashboard bootstrap 4 dashboard">
    <meta name="description"
          content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Now Ui Dashboard PRO by Creative Tim">
    <meta itemprop="description"
          content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg">


    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="[Now Ui Dashboard PRO] by Creative Tim">

    <meta name="twitter:description"
          content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg">


    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Now Ui Dashboard PRO by Creative Tim"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="http://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html"/>
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg"/>
    <meta property="og:description"
          content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you."/>
    <meta property="og:site_name" content="Creative Tim"/>
    <title>
        Now UI Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets') }}/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets') }}/demo/demo.css" rel="stylesheet"/>
    <!-- Google Tag Manager -->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <!-- End Google Tag Manager -->
    <script>
        // Facebook Pixel Code Don't Delete
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');
        try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");
        } catch (err) {
            console.log('Facebook Track Error:', err);
        }
    </script>


</head>
<body class="sidebar-mini clickup-chrome-ext_installed">
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1"/>
</noscript>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">

    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
        @csrf</form>
    <div class="sidebar" data-color="orange">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                {{ __('CT') }}
            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                {{ __('Creative Tim') }}
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active">
                <a href="/admin/home">
                        <i class="now-ui-icons design_app"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                <a href="/admin/users">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Users</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/categories">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/staticpage">
                        <i class="now-ui-icons files_single-copy-04"></i>
                        <p>Static Pages</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/products">
                        <i class="now-ui-icons design_app"></i>
                        <p>Products</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/posts">
                        <i class="now-ui-icons education_agenda-bookmark"></i>
                        <p>Posts</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/slider">
                        <i class="now-ui-icons media-1_album"></i>
                        <p>Slider</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/settings">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                        <p>Settings</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">{{ __("Stats") }}</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons location_world"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">{{ __("Some Actions") }}</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">{{ __("Action") }}</a>
                                <a class="dropdown-item" href="#">{{ __("Another action") }}</a>
                                <a class="dropdown-item" href="#">{{ __("Something else here") }}</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">{{ __("Account") }}</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">{{ __("My profile") }}</a>
                                <a class="dropdown-item" href="#">{{ __("Edit profile") }}</a>
                                <a class="dropdown-item" href="#"
                                   onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel-header">
        </div>

        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>


        <footer class="footer">
            <div class=" container-fluid ">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com" target="_blank">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com" target="_blank">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com" target="_blank">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.updivision.com" target="_blank">
                                Updivision</a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    ©
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>
                    2020, Designed by
                    <a href="https://www.invisionapp.com" target="_blank"> Invision</a> . Coded by
                    <a href="https://www.creative-tim.com" target="_blank"> Creative Tim </a>&amp;
                    <a href="https://www.updivision.com" target="_blank"> Updivision</a>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->

<script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
<script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>

<script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets') }}/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets') }}/demo/demo.js"></script>
@stack('js')
@yield('scripts')
</body>

</html>
