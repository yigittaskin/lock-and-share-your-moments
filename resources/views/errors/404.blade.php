<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">
</head>
<body>
    <div class="container">
        <div class="error-page">
            <h1>404</h1>
            <h2>Oops! Page not found.</h2>
            <p>Sorry, the page you are looking for does not exist. It might have been moved or deleted.</p>
            <a href="{{ url('/') }}">Go back to the homepage</a>
        </div>
    </div>
</body>
</html>
