@extends('layouts.plantilla')

@section('title','Store')

@section('container_gral')


<div class="section-productos">
@if($productos_store)
<h1>hay productos, ahre</h1>
<div class="container_productos">

@forelse($productos_store as $producto)

<a href="{{route('store.show',$producto->id)}}">
    <div class="producto">
        {{$producto->nombre_producto }}
        <div class="img">
        <img src="{{$producto->img_producto}}" alt="">
        </div>
        <label for="">asd: {{$producto->id}}</label>
   
    </div>
</a>
@empty
<h3>no hay productos disponibles</h3>
@endforelse

@else
<h1>no hay productos  </h1>
@endif
</div>

{{$productos_store->links()}}

</div>
@endsection