@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style ="margin-top:2%;">
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
                                <a href="{{route('product.details', $product->id)}}">Nombre: {{$product->name}}</a>
                            </h4>
                            <h5>Precio: ${{$product->price}}</h5>
                            <h5>Stock: {{$product->stock}}</h5>
                        </div>
                        <div class="card-footer">
                            <button onclick="setData(this);" data-sid="{{$product->owner_id}}" data-pid="{{$product->id}}" data-max="{{$product->stock}}" type="button" data-toggle="modal" data-target="#comprarProductoModalCenter" class="btn btn-success">Comprar</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $productList->render() }}
        </div>
        <div class="col-lg-3">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#venderProductoModalCenter">Vender Producto</button>
                <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#eliminarProductoModalCenter">Eliminar Producto</button>
                <button type="button" class="list-group-item list-group-item-action"  data-toggle="modal" data-target="#buscarProductoModalCenter">Buscar Producto</button>
                <a href="{{route('user.vendedores')}}"><button type="button" class="list-group-item list-group-item-action">Vendedores</button></a>
            </div>

        </div>
    </div>

    <!-- Modal venderProductoModalCenter-->
    <div class="modal fade" id="venderProductoModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('product.create')}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="productName">Nombre del Producto:</label>
                            <input type="text" class="form-control" id="productName" name="productName" value="">
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Descripcion:</label>
                            <input type="text" class="form-control" id="productDescription" name="productDescription" value="">
                        </div>
                        <div class="form-group">
                            <label for="productUrlImg">Url Image:</label>
                            <input type="text" class="form-control" id="productUrlImg" name="productUrlImg" value="">
                        </div>
                        <div class="form-group">
                            <label for="productStock">Cantidad:</label>
                            <input type="number" class="form-control" id="productStock" name="productStock" min=1 value=1>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Precio:</label>
                            <input type="number" class="form-control" id="productPrice" name="productPrice" min=1 value=1>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary">Publicar Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal eliminarProductoModalCenter-->
    <div class="modal fade" id="eliminarProductoModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('product.delete')}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="productName">Nombre del Producto:</label>
                            <input type="text" class="form-control" id="productName" name="productName" value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary">Eliminar Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal buscarProductoModalCenter-->
    <div class="modal fade" id="buscarProductoModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Buscar Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('product.search')}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <input class="form-control" type="text" id="searchWord" name="searchWord" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary">Buscar Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal comprarProductoModalCenter-->
    <div class="modal fade" id="comprarProductoModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Comprar Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('product.buy')}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" id="product_id" name="product_id"/>
                            <input type="hidden" id="seller_id" name="seller_id"/>
                            <label for="productQty">Cantidad:</label>
                            <input type="number" class="form-control" id="productQty" name="productQty" min=1 value=1>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary">Comprar Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
<script>
    function setData(event) {
        $("#productQty").val(1);
        $("#product_id").val(event.dataset.pid);
        $("#seller_id").val(event.dataset.sid);
        $("#productQty").attr({ "max" : event.dataset.max });
    }

</script>
@endsection
