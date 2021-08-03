@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Productos</h1>
@stop

@section('content')
   <form action="/productos/{{$producto->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$producto->codigo}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$producto->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$producto->cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio Costo</label>
    <input id="precio_Costo" name="precio_Costo" type="number" step="any" class="form-control" value="{{$producto->precio_Costo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio Venta</label>
    <input id="precio_Venta" name="precio_Venta" type="number" step="any" class="form-control" value="{{$producto->precio_Venta}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">codigoProveedor</label>
    <input id="codigoProveedor" name="codigoProveedor" type="text" class="form-control" value="{{$producto->codigoProveedor}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">tipoProducto</label>
    <input id="tipoProducto" name="tipoProducto" type="number" class="form-control" value="{{$producto->tipoProducto}}">
  </div>
  <a href="/productos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop