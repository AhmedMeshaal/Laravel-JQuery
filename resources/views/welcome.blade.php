<html>
<head>
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

    <title>LARAVEL JQUERY</title>
</head>

<body>

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

            <h1>IT IS WELCOME PAGE</h1>

            <p class="intro"><strong>This is a multi-level side navigation pattern with hover and push</strong>. Hovering over the menu will reveal its lables and clicking the hamburger icon pins the menu open.</p>

            <h2>Checkbox Hack</h2>

            <p>I started by using the checkbox hack but ran into its limitations when I tried to implement the 'push' behaviour. It works for the secondary menus but the input element and its corresponding label can really only affect the adjacent element (i.e. I
                couldn't target the page container to push it over). So, I added...</p>

            <h2>A Touch of jQuery</h2>
            <p>I'm sure this could be done with vanilla javascript, but that is not my strong suit. So here we are. You might be thinking, "Why not just use JQuery for all of the functionality?" Well, you can! Fork it and go nuts! Maybe drop me a line if you do.</p>

            <p class="small"><strong>This is small text</strong>. Lorem Ipsum is simply dummy text from the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                it to make a type specimen book. It has survived not only five centuries, but als the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

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