<html>

        <head>
                <title> @yield('title') - page</title>

                <link rel="stylesheet" href="/css/main.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
                <link href='https://css.gg/menu-round.css' rel='stylesheet'>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
                <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
                <link href='https://css.gg/dribbble.css' rel='stylesheet'>
                <link href='https://css.gg/list-tree.css' rel='stylesheet'>
                <link href='https://css.gg/toolbox.css' rel='stylesheet'>
                <link href='https://css.gg/browse.css' rel='stylesheet'>
        </head>
        <body>
                @section('header')
                @show
                        <div class="primary-nav">

                                <button href="#"  class="hamburger open-panel nav-toggle">
                                        <span class="screen-reader-text">Menu</span>
                                </button>

                                <nav role="navigation" class="menu">

                                        <a href="#" class="logotype">LOGO<span>TYPE</span></a>

                                        <div class="overflow-container">

                                                <ul class="menu-dropdown">

                                                        <li class="menu-hasdropdown">

                                                                <a href="#">Dashboard</a><span class="icon"><i class="gg-list-tree"></i></span>

                                                        <li><a href="#">Settings</a><span class="icon"><i class="gg-toolbox"></i></span></li>

                                                        <li><a href="#">Browse</a><span class="icon"><i class="gg-browse"></i></span></li>

                                                        <li><a href="#">Messages</a><span class="icon"><i class="gg-dribbble"></i></span></li>
                                                        <li><ion-icon name="file-tray-full-outline"></ion-icon></li>
                                                </ul>

                                        </div>

                                </nav>

                        </div>

                        <div class="new-wrapper">



                                <div id="main">

                                        <div id="main-contents">

                                                @section('content')
                                                @show
                                        </div>

                                </div>

                        </div>

                        <script>
                                $('.nav-toggle').click(function(e) {

                                        e.preventDefault();
                                        $("html").toggleClass("openNav");
                                        $(".nav-toggle").toggleClass("active");

                                });


                        </script>
        </body>
</html>