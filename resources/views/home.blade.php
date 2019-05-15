@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="row">
                @foreach($productList as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
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
        <div class="col-lg-2">
            Buscar Producto
            <!-- Search form -->
            <form action="{{route('product.search')}}" method="post">
                {{csrf_field()}}
                <input class="form-control" type="text" id="searchWord" name="searchWord" placeholder="Search" aria-label="Search">
                <button type="submit" class="btn btn-primary">Buscar</button>

            </form>
        </div>
    </div>
</div>
@endsection
