@extends('layouts.app')

@section('content')
<div class="jumbotron">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://www.bilkulonline.com/wp-content/uploads/2019/04/farming-696x261.jpg" style="width:100px;height:300px;" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://continentalseeds.com/wp-content/uploads/2017/05/celery.jpg" style="width:100px;height:300px;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://www.oceanvodka.com/wp-content/uploads/2014/04/1899383_840038659344564_232442261_o-1024x576.jpg" style="width:100px;height:300px;" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://www.uccs.mx/images/library/image/argentina/2018/campesinos.jpg" style="width:286px;height:190px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Compromiso</h5>
                    <p class="card-text">En Tuyuka estamos comprometidos con el campesino a proporcionar conexion y que venda todos sus productos</p>
                    <a href="#" class="btn btn-primary">Conocenos</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://farm5.static.flickr.com/4016/4639061927_0363a38865.jpg" style="width:286px;height:190px"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Facilidad</h5>
                    <p class="card-text">Montar los productos que deseas vender es super facil y rapido.</p>
                    <a href="#" class="btn btn-primary">Registrate</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://www.movemosalmundo.com/wp-content/uploads/2018/03/alianza-campesinos-750x356.jpg" style="width:286px;height:190px"  class="card-img-top" alt="...">
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