<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <nav class="navbar bg-dark navbar-expand-lg" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="#">Linkedin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        @if(!Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register.seeker') }}">Job Seeker</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register.employer') }}">Employer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        @endif

                        @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" id="logout-link" href="#">Logout</a>
                            </li>
                            <form action="{{ route('logout') }}" id="logout-form" method="post">@csrf</form>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    <script>
        let logoutLink = document.getElementById('logout-link');
        let logoutForm = document.getElementById('logout-form');
        if (logoutLink && logoutForm){
            logoutLink.addEventListener('click', () => {
                logoutForm.submit();
            });
        }
    </script>
    </body>
</html>
