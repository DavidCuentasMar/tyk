@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Vendedores</h1>
    <div class="card">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Numero de Ventas</th>
                        <th scope="col">Productos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $seller)
                        <tr>
                            <th scope="row"></th>
                            <td>{{$seller->name}}</td>
                            <td>{{$seller->n_sales}}</td>
                            <td>
                                <form action="{{route('user.products')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" id="seller_id" name="seller_id" value="{{$seller->id}}"/>
                                    <button type="submit" class="btn btn-info">Ver Productos</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection
