<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>API Movie</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
    Testing iframe
    <iframe width="640" height="360" src="https://javclubs.com/?v=c_ybnfEIZ" frameborder="0" scrolling="0" allowfullscreen></iframe>
        <div class="container mt-3">
            <div class="row justify-content-md-center">
                <div class="mb-3">
                    <form action="{{ route('extract') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <label for="formFile" class="form-label">Import Movie</label>
                        <input class="form-control" type="file" id="formFile" name="movie_file">
                        <button type="submit" class="btn btn-primary mb-3 mt-2">Import</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
