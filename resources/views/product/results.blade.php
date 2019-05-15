@extends('layouts.app')

@section('content')
<div class="container">
<h1>Resultados</h1>
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                @foreach($productList as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        @if (is_null($product->img_url))
                            <a href="#"><img class="card-img-top" style="width:250px;height:162px;" src="https://cdn5.vectorstock.com/i/1000x1000/86/24/nutrition-healthy-food-icon-vector-12208624.jpg" alt=""></a>
                        @else
                            <a href="#"><img class="card-img-top" style="width:250x;height:162px;" src="{{$product->img_url}}" alt=""></a>
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">{{$product->name}}</a>
                            </h4>
                            <h5>${{$product->price}}</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-success">Comprar</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $productList->render() }}
        </div>
        <div class="col-lg-3">

        </div>
    </div>
</div>
@endsection
