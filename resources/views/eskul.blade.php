<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
</head>
<body>
    <x-navbar></x-navbar>
    <!-- Hero -->
    <div class="hero min-h-150 relative">
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('storage/V4Tas.JPG') }}" alt="">
        <div class="hero-overlay bg-black/50 z-9"></div>
        <div class="hero-content text-neutral-content text-center relative z-10">
            <div class="max-w-lg">
            <h1 class="mb-5 text-5xl font-bold">Ekstrakulikuler</h1>
            <p class="mb-5">
                Generasi unggul dan berprestasi
            </p>
            </div>
        </div>
    </div>
    <!-- Tutup Hero -->

    <div class="container mx-auto">
    <!-- Eskul -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-7 mt-10">
        <div class="card card-border bg-white shadow-sm w-full">
            <figure>
                <img src="{{ asset('storage/V4Tas.JPG') }}" alt="">
            </figure>
            <div class="card-body">
                <h1 class="card-title font-semibold">
                    Futsal
                </h1>
            </div>
        </div>
        <div class="card card-border bg-white shadow-sm w-full">
            <figure>
                <img src="{{ asset('storage/V4Tas.JPG') }}" alt="">
            </figure>
            <div class="card-body">
                <h1 class="card-title font-semibold">
                    Futsal
                </h1>
            </div>
        </div>
        <div class="card card-border bg-white shadow-sm w-full">
            <figure>
                <img src="{{ asset('storage/V4Tas.JPG') }}" alt="">
            </figure>
            <div class="card-body">
                <h1 class="card-title font-semibold">
                    Futsal
                </h1>
            </div>
        </div>
        <div class="card card-border bg-white shadow-sm w-full">
            <figure>
                <img src="{{ asset('storage/V4Tas.JPG') }}" alt="">
            </figure>
            <div class="card-body">
                <h1 class="card-title font-semibold">
                    Futsal
                </h1>
            </div>
        </div>
        <div class="card card-border bg-white shadow-sm w-full">
            <figure>
                <img src="{{ asset('storage/V4Tas.JPG') }}" alt="">
            </figure>
            <div class="card-body">
                <h1 class="card-title font-semibold">
                    Futsal
                </h1>
            </div>
        </div>
        <div class="card card-border bg-white shadow-sm w-full">
            <figure>
                <img src="{{ asset('storage/V4Tas.JPG') }}" alt="">
            </figure>
            <div class="card-body">
                <h1 class="card-title font-semibold">
                    Futsal
                </h1>
            </div>
        </div>
        <div class="card card-border bg-white shadow-sm w-full">
            <figure>
                <img src="{{ asset('storage/V4Tas.JPG') }}" alt="">
            </figure>
            <div class="card-body">
                <h1 class="card-title font-semibold">
                    Futsal
                </h1>
            </div>
        </div>
        <div class="card card-border bg-white shadow-sm w-full">
            <figure>
                <img src="{{ asset('storage/V4Tas.JPG') }}" alt="">
            </figure>
            <div class="card-body">
                <h1 class="card-title font-semibold">
                    Futsal
                </h1>
            </div>
        </div>
    </div>
    <!-- Tutup Eskul -->
    </div>


    <x-footer></x-footer>
</body>
</html>