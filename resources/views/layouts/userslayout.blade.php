<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- @vite(['resources/js/app.js']) -->
</head>
<body>
    <div>
        <header>

        </header>
        <div class="container row">
            <aside class="col-4">
                @include("left")
            </aside>
            <aside class="col-8">
                @yield("main")
            </aside>
        </div>
        <div>
            @include("footer")
        </div>
    </div>
</body>
</html>