<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>APIS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <style>
            @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
        </style>
    </head>
    <body>
        <div class="p-4">
            <div class="row">
                <div class="col-md-4">
                    <div style="background-color: #661bed" class="card text-white">
                        <div class="card-body">
                            <a style="font-size: 36px" class="nav-link" href="{{\App\Utils\Helper::API_URL()}}/docs/test-api">
                                <i class="bi bi-list-task me-2"></i>
                                Test API
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="background-color: #661bed" class="card text-white">
                        <div class="card-body">
                            <a style="font-size: 36px" class="nav-link" href="{{\App\Utils\Helper::API_URL()}}/docs/todo/get-all">
                                <i class="bi bi-list-task me-2"></i>
                                Todo API Docs
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
