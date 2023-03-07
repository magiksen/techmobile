<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
        <div class="product-img-action-wrap">
            <div class="product-img product-img-zoom">
                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug) }}">
                    <img class="default-img" src="{{ asset( $product->product_thambnail ) }}" alt="" />

                </a>
            </div>
            <div class="product-action-1">
                <a aria-label="Lista de deseos" class="action-btn" id="{{ $product->id }}" onclick="addToWishList(this.id)"  ><i class="fi-rs-heart"></i></a>

                <a aria-label="Comparar" class="action-btn"  id="{{ $product->id }}" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                <a aria-label="Vita rápida" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="{{ $product->id }}" onclick="productView(this.id)" ><i class="fi-rs-eye"></i></a>
            </div>

            @php
                $amount = $product->selling_price - $product->discount_price;
                $discount = ($amount/$product->selling_price) * 100;

            @endphp


            <div class="product-badges product-badges-position product-badges-mrg">

                @if($product->discount_price == NULL)
                    <span class="new">Nuevo</span>
                @else
                    <span class="hot"> {{ round($discount) }} %</span>
                @endif


            </div>
        </div>
        <div class="product-content-wrap">
            <div class="product-category">
                <a href="{{ url('product/category/'.$product->category_id.'/'.$product['category']['category_slug']) }}">{{ $product['category']['category_name'] }}</a>
            </div>
            <h2><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug) }}"> {{ $product->product_name }} </a></h2>
            @php

                $reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();

                $avarage = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
            @endphp

            <div class="product-rate-cover">
                <div class="product-rate d-inline-block">
                    @if($avarage == 0)

                    @elseif($avarage == 1 || $avarage < 2)
                        <div class="product-rating" style="width: 20%"></div>
                    @elseif($avarage == 2 || $avarage < 3)
                        <div class="product-rating" style="width: 40%"></div>
                    @elseif($avarage == 3 || $avarage < 4)
                        <div class="product-rating" style="width: 60%"></div>
                    @elseif($avarage == 4 || $avarage < 5)
                        <div class="product-rating" style="width: 80%"></div>
                    @elseif($avarage == 5 || $avarage < 5)
                        <div class="product-rating" style="width: 100%"></div>
                    @endif
                </div>
                <span class="font-small ml-5 text-muted"> ({{count($reviewcount)}})</span>
            </div>



            <div>
                @if($product->vendor_id == NULL)
                    <span class="font-small text-muted"><a href="#">Propio</a></span>
                @else
                    <span class="font-small text-muted"><a href="{{ route('vendor.details',$product->vendor_id) }}">{{ $product['vendor']['name'] }}</a></span>

                @endif



            </div>
            <div class="product-card-bottom">

                @if($product->discount_price == NULL)
                    <div class="product-price">
                        <span>${{ number_format($product->selling_price, 2, ',', '.') }}</span>

                    </div>

                @else
                    <div class="product-price">
                        <span>${{ number_format($product->discount_price, 2, ',', '.') }}</span>
                        <span class="old-price">${{ number_format($product->selling_price, 2, ',', '.') }}</span>
                    </div>
                @endif



                <div class="add-cart">
                    <a class="add" aria-label="Quick view" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="{{ $product->id }}" onclick="productView(this.id)"><i class="fi-rs-shopping-cart mr-5"></i>Agregar</a>
                </div>
            </div>
        </div>
    </div>
</div>
