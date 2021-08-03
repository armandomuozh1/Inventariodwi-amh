@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Crear Producto</h1>
@stop

@section('content')
    
<form action="/productos" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio Costo</label>
    <input id="precio_Costo" name="precio_Costo" type="number" step="any" value="0.00" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio Venta</label>
    <input id="precio_Venta" name="precio_Venta" type="number"step="any" value="0.00" class="form-control" tabindex="5">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">codigoProveedor</label>
    <input id="codigoProveedor" name="codigoProveedor" type="text" class="form-control" tabindex="6">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">tipoProducto</label>
    <input id="tipoProducto" name="tipoProducto" type="number" class="form-control" tabindex="7">
  </div>
  <a href="/productos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop