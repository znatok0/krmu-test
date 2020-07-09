    <html>
        <head>
            <title>Дифференциально-диагностический опросник</title>
            <link rel="stylesheet" type="text/css" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}">
            <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
            {{-- <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script> --}}
            <script type="text/javascript" src="{{ url('/js/main.js') }}"></script>
        </head>
        <body>
            <header>
                <div class="container header">
                    <div class="row header-row">
                        <div class="image-holder">
                            <img class="header-image" src="{{ url('/images/krmu-logo.jpg') }}">
                        </div>
                    </div>
                </div>
            </header>
            <div class="container">
                @yield('content')
            </div>
            <footer>
                <div class="container footer">
                    <div class="row">
                        <div class="col-md-4">
                            {{-- <div class="footer-text-left">
                                <p>Казахстанско-Российский</p><br>
                                <p>Медицинский Университет</p><br>
                                <p>Все права защищены</p>
                            </div> --}}
                        </div>
                        <div class="col-md-4">
                            <div class="footer-image-holder">
                                <img class="footer-logo" src="{{ url('/images/Logo-podval.png') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
            </footer>
        </body>
    </html>