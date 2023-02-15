@extends('layouts.plantilla')

@section('title','ShopCart')

@section('container_gral')
<div class="container">
    <div class="shopping-cart">
     
     
        <div class="header-shopping_cart">
            <h1>Shopping cart</h1>
            <p class="num-items">Num Items</p>
        </div>   
        
        <form action="">
           
            <div class="item">
            <img src="" alt="" class="img-item">
            <label for="name-item">nombre del item</label>
            <input type="number" name="cant-item" id="cant-item" value="1">
            <label for="precio-item">precio.bs</label>
            <label for="total" name="total" id="total">Total:</label>
            <label for="total">total</label>
            <input type="hidden" name="total" id="total" value="00">
           
            <a href="">
           <div class="icon-delete">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg>
            </div>
            </a>
            </div>
           
        </form>
        
  <div class="footer-options">
  <div class="button-back">
            <a href="">  
            <div class="icon-back">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M109.3 288L480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288z"/>
            </svg>
            </div>
        </a>
        </div>
        <div class="button-delete">
            <a href="">  
            <div class="icon-delete">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
            </div>
        </a>
        </div>
  </div>

    </div>

    <div class="summary">
        <div class="header-summary">
            <h2>Summary</h2>
        </div>
        
        <form action="" method="post">
            <div class="header-form_summary">
                
            <label for="num-items">Total de productos seleccionados:</label>
            <label for="total-items"> items</label>
            </div>
            <div class="footer-form_summary">
            <label for="total-price" class="total-price">PRECIO TOTAL</label>
            <label for="total-shop" class="total-shop"> .bs</label>
            <input type="hidden" name="total" id="total" value="">
            

            </div>
            <input type="submit" value="COMPRAR AHORA!" class="btn-checkout">
        </form>

    </div>
  
  
</div>
@endsection