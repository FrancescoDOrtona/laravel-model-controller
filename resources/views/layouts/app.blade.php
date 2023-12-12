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
            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <h1>Movies</h1>
                </div>
                <div class="col">
                    <nav class="nav justify-content-center fw-bold ">
                        <a class="nav-link active" href="#" aria-current="page">Home</a>
                        <a class="nav-link" href="#">Bestseller</a>
                        <a class="nav-link" href="#">Top 10 Movies</a>
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

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- footer --}}
    <footer>
        <div class="container">
            <div
                class="row align-items-center g-2">
                <div class="col-2">About us</div>
                <div class="col-2">Contacts</div>
                <div class="col-2">Copyright</div>
            </div>            
        </div>
    </footer>
</body>
</html>