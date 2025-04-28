<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Blog</title>
</head>
<body>
    <nav>
        <a href="/">Bookstore Blog</a>
        <ul>
            <li><a href="{{ route('posts.index') }}">All Posts</a></li>
        </ul>
    </nav>
    
    <main>
        @yield('content')
    </main>
    
    <footer>
        <p>© {{ date('Y') }} Bookstore Blog</p>
    </footer>
</body>
</html>