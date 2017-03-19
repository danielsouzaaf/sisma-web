<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ $htmlTitle or 'Default'}}</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="css/AdminLTE.min.css">
        <link rel="stylesheet" href="css/skin-green.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/app.css">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('styles')
    </head>
    <body class="hold-transition skin-green sidebar-mini fixed">
      <div id="app">
        <div class="wrapper">
            <header class="main-header">
                <a href="#" class="logo">
                    <span class="logo-mini"><b>S</b>W</span>
                    <span class="logo-lg"><b>SISMA</b>WEB</span>
                </a>
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </nav>
            </header>
            @include('layouts.partials.main-sidebar')
            <div class="content-wrapper">
                @include('layouts.partials.system-alerts')
                @include('layouts.partials.content-header')
                <section class="content">
                    @yield('content')
                </section>
            </div>
            @include('layouts.partials.footer')
        </div>

      </div>
      <script src="{{ asset('js/app.js') }}"></script>
      @yield('modals')

      @yield('scripts')
    </body>
</html>
