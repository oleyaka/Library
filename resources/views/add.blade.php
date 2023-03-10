<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add</title>
</head>
<body>
    <div class="container mt-5">
        <form action="{{url('/addbook')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Title of the book</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="bookName">
            </div>
            <br>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Author</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="authorName">
            </div>
            <br>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Short description</label>
                <textarea type="text" class="form-control" id="formGroupExampleInput" name="description"></textarea>
            </div>
            <br>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Page count</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="pageCount">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <br>
        <a class="btn btn-primary mb-5" href="/book">All book</a>
    </div>
</body>
</html>
