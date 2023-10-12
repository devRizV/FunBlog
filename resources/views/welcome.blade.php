<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="">

        <!-- Styles $ scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 bg-gray-400" >
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <main class="container mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Blog Post -->
                        @foreach($posts as $post)
                        <div class="card mb-4">
                            <img class="card-img-top" src="https://via.placeholder.com/750x300" alt="Blog Post Image">
                            <div class="card-body">
                                <h2 class="card-title">{{ $post->title }}</h2>
                                <p class="card-text"> {{ $post->post_body }}</p>
                                <a href="#" class="btn btn-primary" >Read More &rarr;</a>
                            </div>
                            <div class="card-footer text-muted">
                                Posted on January 1, 2023 by <a href="#">Author Name</a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-4">
                        <div class="card my-4">
                            <h5 class="card-header">Search</h5>
                            <div class="card-body">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Categories Widget -->
                        <div class="card my-4">
                            <h5 id="dropdownButton" class="card-header">Categories <i class="fas fa-arrow-down"></i></h5>
                             <div class="p-4 relative inline-block text-left hidden" id="dropdownContent">
                                @foreach($categories as $category)
                                    <a href="#" class="block px-0 py-0 text-gray-700"> {{ $category->name }} </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Latest Posts Widget -->
                        <div class="card my-4">
                            <h5 class="card-header">Latest Posts</h5>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    @foreach($posts as $post)
                                        @php
                                            $postCreationDate = \Carbon\Carbon::parse($post->created_at);
                                            $currentDate = \Carbon\Carbon::now();
                                            $isLatest = $postCreationDate->diffInDays($currentDate) <= 7;
                                        @endphp
                                        @if($isLatest)
                                            <li><a href="#">{{ $post->title }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    </div>
    <footer class="text-center py-3">
        &copy; 2023 My Blog
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://kit.fontawesome.com/432c9c15bd.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

