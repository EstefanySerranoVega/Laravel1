@extends('layouts.plantilla')

@section('title','Home')

@section('container_gral')
<div class="section_hero">
           aquí va el hero 
</div>

<div class="section-productos">
@if($productos)
<h1>hay productos, ahre</h1>
<div class="container_productos">

@forelse($productos as $producto)

<a href="{{route('store.show',$producto->id)}}" class="card_producto">
    <div class="producto">
        <form action="{{route('store.shopcart', $producto->id)}}" method="get">
            <label for="">{{$producto->nombre_producto }}</label>
            <div class="img">
            <img src="{{$producto->img_producto}}" alt="">
            </div>
            <label for="">asd: {{$producto->id}}</label>
   <button type="submit">Agregar</button>    
        </form>
        
    </div>
</a>
@empty
<h3>no hay productos disponibles</h3>
@endforelse

@else
<h1>no hay productos  </h1>
@endif
</div>

{{$productos->links()}}

</div>
@endsection