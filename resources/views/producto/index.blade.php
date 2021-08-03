@extends('adminlte::page')

@section('title', 'Sistema de inventarios')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
   <a href="productos/create" class="btn btn-outline-secondary mb-3">Añadir un nuevo producto</a>

<table id="productos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-success text-white">
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio Costo</th>
            <th scope="col">Precio Venta</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->codigo}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->cantidad}}</td>
            <td>{{$producto->precio_Costo}}</td>
            <td>{{$producto->precio_Venta}}</td>
            <td>{{$producto->codigoProveedor}}</td>
            <td>{{$producto->tipoProducto}}</td>
            <td>
                <form action="{{ route ('productos.destroy',$producto->id)}}" method="POST">
                <a href="/productos/{{ $producto->id}}/edit" class="btn btn-dark">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#productos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop