<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #text-wrapper {
            max-width: 50%;
        }
    </style>
</head>

<body>
    <section id="hero" class="d-flex gap-5 justify-content-center align-items-center py-4 my-5 mx-lg-5">
        <div id="text-wrapper">
            <p class="fs-4 fw-bold">Experience the Luxurious Taste of</p>
            <p class="fw-bold" style="font-size: 3.3rem">🌟 Red Velvet Latte! 🌟</p>
            <p class="text-body-tertiary fw-bold" style="font-size: 0.81rem">Indulge in our delightful Red Velvet Latte, a unique blend crafted to elevate your coffee experience.
                Immerse yourself in the rich flavors of creamy cocoa and velvety smoothness, perfectly combined with our
                finest espresso. Savor the moment. Savor the flavor. Discover Red Velvet Latte today! 🍫☕</p>
            <button class="btn btn-info fw-bold">Buy Now!</button>
        </div>
        <img src="{{ asset('images/cranberry-latte.jpg') }}" alt="Cranberry Latte" width="360" class="rounded">
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
