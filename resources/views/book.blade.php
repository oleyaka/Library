<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <title>Books</title>
</head>
<body>
    <div class="container mt-5">
        @foreach ($books as $book)
            <div class="list-group">
                <div class="list-group-item">
                    <h5 class="mb-1">{{ $book -> book_name }}</h5>
                    <p class="mb-1">{{ $book -> author_name }}</p>
                    <small class="mb-1 text-muted">{{ $book -> description }}</small>
                </div>
            </div>
        @endforeach
            <br>
            <a class="btn btn-primary" href="/add">Add</a>
    </div>
</body>
</html>
