<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #line {
            border-top: 3px solid black;
            width: 65px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <section id="products" class="container bg-info p-3 rounded">
        <p class="fs-3 fw-bold text-center p-0">PRODUCTS</p>
        <div id="line" class="mb-4"></div>
        <div class="container text-center">
            <div class="row gap-3">
                @foreach ($products as $product)
                    <div class="card col p-0">
                        <img src="{{ $product['picture'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title fw-bold">{{ $product['name'] }}</h5>
                                <p class="card-title bg-info rounded py-2 px-2 fw-bold">{{ $product['price'] }}</p>
                            </div>
                            <p class="card-text text-start" style="font-size: 0.92rem">{{ $product['description'] }}</p>
                            <a href="#" class="btn btn-primary d-block">Pesan Sekarang</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
