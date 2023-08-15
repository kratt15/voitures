<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    @if (session('success'))
    <div class="alert alert-success">{{session('success')  }}</div>

    @endif
    <h1>Aperçu de la Voiture</h1>
    @yield('content')
    <a href="{{ route('cars.index') }}" class="btn btn-primary mt-3">Retour à la Liste</a>
</div>

</body>
</html>
