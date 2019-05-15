@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top:2%;">
        <div class="col-lg-8">
            <h1>Detalles del Producto</h1>
            <div class="card" style="width:600px">
                @if (is_null($product->img_url))
                    <a href="#"><img class="card-img-top" style="width:600x;height:300px;" src="https://cdn5.vectorstock.com/i/1000x1000/86/24/nutrition-healthy-food-icon-vector-12208624.jpg" alt=""></a>
                @else
                    <a href="#"><img class="card-img-top" style="width:600x;height:300px;" src="{{$product->img_url}}" alt=""></a>
                @endif
                <div class="card-body">
                    <h4 class="card-title">Nombre: {{$product->name}}</h4>
                    <p class="card-text">Cantidad: {{$product->stock}}</p>
                    <p class="card-text">Precio: {{$product->price}}</p>
                    <form action="{{route('product.buy')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" id="product_id" name="product_id" value="{{$product->id}}" />
                        <input type="hidden" id="seller_id" name="seller_id" value="{{$product->owner_id}}"/>
                        <input type="hidden" class="form-control" id="productQty" name="productQty" value=1>
                        <button type="sumbit" class="btn btn-primary">Comprar Producto</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4" >
            <h2>Detalles del Vendedor</h2>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">{{$user->name}}</h4>
                    <p class="card-text">Ventas Realizadas:{{$user->n_sales}}</p>
                    <p class="card-text">Contacto: {{$user->email}}</p>
                </div>
            </div>
        </div>
    </div>



        
       
        
</div>
@endsection
