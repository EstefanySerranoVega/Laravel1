@extends('layouts.plantilla')

@section('title','Producto')

@section('container_gral')

<div class="container">
    <div class="section-select_producto">
        <div class="img-producto_select">
            <img src="" alt="" class="img">
        </div>
        <div class="info-producto_select">
            <form action="" method="post">
            <div class="info-select">
            <input type="hidden" name="categoria-producto" id="categoria-producto" value ="" readonly>
            <input type="hidden" name="id-producto" id="id-producto" value="id">
            <input type="hidden" name="id-ap" id="id-ap" value="ad">
            <input type="hidden" name="nombre-producto" id="nombre-producto" class="name-select" value="name" readonly>
            
            <label for="producto" class="producto-name">producto</label>
           <div class="text">
           <label for="codigo" class="sub">Codigo:</label>
            <label for="codigo">codigo</label>
           </div>
            <input type="hidden" name="codigo-producto" id="codigo-producto" value="codigo" readonly> 
            <div class="text">
            <label for="desc" class="sub">Precio de venta: por unidad</label>
            <label for="precio">bs</label>
            </div>
            <div class="text">
            <label for="desc" class="sub">Marca</label>
            <label for="precio">marca</label>
            </div>    <div class="text">
            <label for="desc" class="sub">Industria</label>
            <label for="precio">industria</label>
            </div>
            <input type="hidden" name="precio-producto" id="precio-producto" value="bs" readonly>
            
            <input type="hidden" name="cantidad-producto" id="cantidad-producto" value="1">
                <p>asd</p>
            </div>
                <button type="submit"  class="btn-addCarrito" id="btn-addCarrito" name="btn-addCarrito">AGREGAR AL CARRITO</button>
              
            </form>
        </div>
    </div>
    <div class="similar-products">
        <div class="header-similar_products">
            <h1>Explora productos similares</h1>
        </div>
        <div class="section-productos">
            @if($producto)
            <h1>hay productos, ahre</h1>
            <div class="container_productos">
            
          
            
            <a href="">
                <div class="producto">
                    {{$producto->nombre_producto }}
                    <div class="img">
                        
                    <img src="{{$producto->img_producto}}" alt="">
                    </div>
                </div>
            </a>
      
            
            @else
            <h1>no hay productos  </h1>
            @endif
            </div>
            
            
            </div>
        </div>
    </div>
</div>
</div>
@endsection