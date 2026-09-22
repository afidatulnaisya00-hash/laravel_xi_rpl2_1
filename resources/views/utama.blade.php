<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Landing Page</title>

    @vite('resources/css/app.css')
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="logo">
            Naisya
        </div>

        <div class="nav-menu">

            <a href="/" class="active">
                Home
            </a>

            <a href="/halamandua">
                Halaman Kedua
            </a>

            <a href="#contact">
                Contact
            </a>

        </div>

    </nav>


    <!-- LANDING PAGE -->
    <div
        class="landing-page"
        style="background-image: url('{{ asset('images/landing.jpg') }}');"
    >

        <div class="content">

            <h1>
                Explore<br>
                Beautiful Places
            </h1>

            <p>
                Temukan keindahan tempat dan pengalaman
                yang menarik untuk dijelajahi.
            </p>

            <a href="/halamandua" class="button">
                Halaman Kedua
            </a>

        </div>

    </div>


    <!-- CONTACT -->
    <div id="contact"></div>

</body>
</html>