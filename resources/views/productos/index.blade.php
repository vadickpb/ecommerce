@extends('layouts.app')

@section('botones')
    <a href="" class="btn btn-primary mr-2 text-light">Crear Producto</a>
@endsection

@section('content')

@section('botones')
    <a href="" class="btn btn-primary text-white font-weight-bold text-uppercase">Crear Producto</a>
@endsection

<h2 class="mb-5 text-center">Administra tus productos</h2>

<div class="col-md-10 mx-auto p-3 bg-white">

    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Polera adidas</td>
                <td>S/. 50.00</td>
                <td>20</td>
                <td><a href="" class="btn btn-success btn-block">Editar</a></td>
            </tr>

        </tbody>
    </table>
</div>
@endsection
