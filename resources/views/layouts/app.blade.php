<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>   
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>
<body>
    {{-- Header --}}
    <header class="py-3">
        <div class="container">
            <div
                class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <h1>
                        Movies
                    </h1>
                </div>
                <div class="col">
                    <nav class="nav justify-content-center  ">
                        <a class="nav-link active" href="#" aria-current="page">Active link</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link disabled" href="#">Disabled link</a>
                    </nav>                    
                </div>
                <div class="col">
                    <div class="text-center">
                        <div class="btn-group-vertical" role="group" aria-label="">                           
                                <button
                                    id="dropdownId"
                                    type="button"
                                    class="btn btn-primary dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    More
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">First Dropdown</a>
                                    <a class="dropdown-item" href="#">Second Dropdown</a>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
            
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- footer --}}
    <footer>
        <div class="container">
            <div
                class="row-cols-4 justify-content-center align-items-center g-2">
                <div class="col">About us</div>
                <div class="col">Contacts</div>
                <div class="col">Copyright</div>
            </div>
            
        </div>
    </footer>
</body>
</html>