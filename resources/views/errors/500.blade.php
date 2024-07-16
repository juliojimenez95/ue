<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - IUE</title>
    <!--===============================================================================================  -->
    <link rel="icon" type="image/png" href="{{asset('images/logo.jpeg')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/error.css')}}">
</head>

<body>
    <div id="error">
        

<div class="error-page container">
    <div class="col-md-8 col-12 offset-md-2">
        <img class="img-error" src="{{asset('assets/images/samples/error-500.png')}}" alt="Not Found" style="height: 300px;">
        <div class="text-center">
            <h1 class="error-title">Error del sistema</h1>
            <p class="fs-5 text-gray-600">El sitio web no está disponible actualmente. Vuelva a intentarlo más tarde o póngase en contacto con el desarrollador.</p>
            <a href="{{ route('home') }}" class="btn btn-lg btn-outline-primary mt-3">Volver</a>
        </div>
    </div>
</div>


    </div>
</body>

</html>
