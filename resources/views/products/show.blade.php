<x-layouts>


    <x-slot:title>
        Mahsulot
    </x-slot>



  <!-- ***** Main Banner Area Start ***** -->
  <div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2> {{ $product->name }} Futbolkasi </h2>
                    <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->


<!-- ***** Product Area Starts ***** -->
<section class="section" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                
            <div class="left-images">
                <img src="{{ asset("storage/".$product->image) }}" alt="">
                {{-- <img src="{{ asset("storage/".$product->image) }}" alt=""> --}}
            </div>
        </div>
        <div class="col-lg-4">
            <div class="right-content">
                <h4> {{ $product->name }} </h4>
                <span class="price"> {{ $product->price }} </span>
                <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>

                @auth
                
                <div>
                    <a href="{{ route("products.edit", $product->id) }}" class="mt-5 btn btn-primary" type="submit">O'zgartirish</a>
                    <form action="{{ route("products.destroy", $product->id) }}" method="POST"
                        onsubmit="return confirm('Rostdan ham mahsulotni o\'chirmoqchimisiz?');">
                        @csrf
                        @method("DELETE")
                    <button class="mt-5 btn btn-danger" type="submit">O'chirish</button>
                    </form>
                </div>
                @endauth
                
                <div class="quote">
                    <i class="fa fa-quote-left"></i><p>{{ $product->short_description }}</p>
                </div>
                <div class="quantity-content">
                    <div class="left-content">
                        <h6>No. of Orders</h6>
                    </div>
                    <div class="right-content">
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                        </div>
                    </div>
                </div>
                <div class="total">
                    <h4>Jami $210.00</h4>
                    <div class="main-border-button"><a href="#">Savatga qo'shish</a></div>
                    
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- ***** Product Area Ends ***** -->





</x-layouts>