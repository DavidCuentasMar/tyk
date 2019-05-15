@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Bienvenido a Tuyuka!</h1>
    <p class="lead">Tuyuka es la web de comercio para conectar campesinos con grandes compradores </p>
    <hr class="my-4">
    <p>¿ Quieres empezar ya ? registrate y empieza a vender o a comprar a través de nuestra web.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Registrate!</a>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://www.uccs.mx/images/library/image/argentina/2018/campesinos.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Compromiso</h5>
                    <p class="card-text">En Tuyuka estamos comprometidos con el campesino a proporcionar conexion y que venda todos sus productos</p>
                    <a href="#" class="btn btn-primary">Conocenos</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://farm5.static.flickr.com/4016/4639061927_0363a38865.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Facilidad</h5>
                    <p class="card-text">Montar los productos que deseas vender es super facil y rapido.</p>
                    <a href="#" class="btn btn-primary">Registrate</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://www.movemosalmundo.com/wp-content/uploads/2018/03/alianza-campesinos-750x356.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maxima visibilidad</h5>
                    <p class="card-text">Tus productos son igual de visibles que cualquiera en la plataforma, tan solo cobramos pequeñas comisiones por el monto de la venta realizada</p>
                    <a href="#" class="btn btn-primary">Conoce nuestros terminos</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->


@endsection('content')