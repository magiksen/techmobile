@extends('frontend.master_dashboard')
@section('main')

@section('title')
    TECHMOBILE
@endsection

     @include('frontend.home.home_slider')

        <!--End hero slider-->
     @include('frontend.home.home_features_category')

        <!--End category slider-->
     @include('frontend.home.home_banner')
        <!--End banners-->


	@include('frontend.home.home_new_product')

        <!--Products Tabs-->



    @include('frontend.home.home_features_product')


        <!--End Best Sales-->




        <!-- Fashion Category -->

    <section class="product-tabs section-padding position-relative">
            <div class="container">
                <div class="section-title style-2 wow animate__animated animate__fadeIn">
                    <h3>{{ $skip_category_0->category_name }}</h3>

                </div>
                <!--End nav-tabs-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">


    @foreach($skip_product_0 as $product)
    @include('frontend.master_product')

    <!--end product card-->
    @endforeach





                        </div>
                        <!--End product-grid-4-->
                    </div>


                </div>
                <!--End tab-content-->
            </div>


  </section>
        <!--End Fashion Category -->





        <!-- SweetHome Category -->

   <section class="product-tabs section-padding position-relative">
            <div class="container">
                <div class="section-title style-2 wow animate__animated animate__fadeIn">
                    <h3>{{ $skip_category_2->category_name }}</h3>

                </div>
                <!--End nav-tabs-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">


    @foreach($skip_product_2 as $product)
                                @include('frontend.master_product')
    <!--end product card-->
    @endforeach





                        </div>
                        <!--End product-grid-4-->
                    </div>


                </div>
                <!--End tab-content-->
            </div>


  </section>
        <!--End SweetHome Category -->









        <!-- Mobile Category -->

   <section class="product-tabs section-padding position-relative">
            <div class="container">
                <div class="section-title style-2 wow animate__animated animate__fadeIn">
                    <h3>{{ $skip_category_7->category_name }}</h3>

                </div>
                <!--End nav-tabs-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">


    @foreach($skip_product_7 as $product)
                                @include('frontend.master_product')
    <!--end product card-->
    @endforeach





                        </div>
                        <!--End product-grid-4-->
                    </div>


                </div>
                <!--End tab-content-->
            </div>


  </section>
        <!--End Mobile Category -->



@php

    $reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();

    $avarage = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
@endphp


        <section class="section-padding mb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <h4 class="section-title style-1 mb-30 animated animated"> Ofertas</h4>
                        <div class="product-list-small animated animated">

         @foreach($hot_deals as $item)
    <article class="row align-items-center hover-up">
        <figure class="col-md-4 mb-0">
            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug) }}"><img src="{{ asset( $item->product_thambnail ) }}" alt="" /></a>
        </figure>
        <div class="col-md-8 mb-0">
            <h6>
                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug) }}"> {{ $item->product_name }} </a>
            </h6>
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
             @if($item->discount_price == NULL)
                     <div class="product-price">
                        <span>${{ number_format($item->selling_price, 2, ',', '.') }}</span>

                    </div>

                    @else
                    <div class="product-price">
                        <span>${{ number_format($item->discount_price, 2, ',', '.') }}</span>
                        <span class="old-price">${{ number_format($item->selling_price, 2, ',', '.') }}</span>
                    </div>
                    @endif
        </div>
    </article>
    @endforeach



                        </div>
                    </div>




                    <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="section-title style-1 mb-30 animated animated">  Ofertas Especiales </h4>
                        <div class="product-list-small animated animated">


      @foreach($special_offer as $item)
    <article class="row align-items-center hover-up">
        <figure class="col-md-4 mb-0">
            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug) }}"><img src="{{ asset( $item->product_thambnail ) }}" alt="" /></a>
        </figure>
        <div class="col-md-8 mb-0">
            <h6>
                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug) }}"> {{ $item->product_name }} </a>
            </h6>
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
             @if($item->discount_price == NULL)
                     <div class="product-price">
                        <span>${{ number_format($item->selling_price, 2, ',', '.') }}</span>

                    </div>

                    @else
                    <div class="product-price">
                        <span>${{ number_format($item->discount_price, 2, ',', '.') }}</span>
                        <span class="old-price">${{ number_format($item->selling_price, 2, ',', '.') }}</span>
                    </div>
                    @endif
        </div>
    </article>
    @endforeach



                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="section-title style-1 mb-30 animated animated">Añadidos Recientemente</h4>
                        <div class="product-list-small animated animated">


  @foreach($new as $item)
    <article class="row align-items-center hover-up">
        <figure class="col-md-4 mb-0">
            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug) }}"><img src="{{ asset( $item->product_thambnail ) }}" alt="" /></a>
        </figure>
        <div class="col-md-8 mb-0">
            <h6>
                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug) }}"> {{ $item->product_name }} </a>
            </h6>
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
             @if($item->discount_price == NULL)
                     <div class="product-price">
                        <span>${{ number_format($item->selling_price, 2, ',', '.') }}</span>

                    </div>

                    @else
                    <div class="product-price">
                        <span>${{ number_format($item->discount_price, 2, ',', '.') }}</span>
                        <span class="old-price">${{ number_format($item->selling_price, 2, ',', '.') }}</span>
                    </div>
                    @endif
        </div>
    </article>
    @endforeach



                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <h4 class="section-title style-1 mb-30 animated animated"> Mas Ofertas </h4>
                        <div class="product-list-small animated animated">


  @foreach($special_deals as $item)
    <article class="row align-items-center hover-up">
        <figure class="col-md-4 mb-0">
            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug) }}"><img src="{{ asset( $item->product_thambnail ) }}" alt="" /></a>
        </figure>
        <div class="col-md-8 mb-0">
            <h6>
                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug) }}"> {{ $item->product_name }} </a>
            </h6>
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
             @if($item->discount_price == NULL)
                     <div class="product-price">
                        <span>${{ number_format($item->selling_price, 2, ',', '.') }}</span>

                    </div>

                    @else
                    <div class="product-price">
                        <span>${{ number_format($item->discount_price, 2, ',', '.') }}</span>
                        <span class="old-price">${{ number_format($item->selling_price, 2, ',', '.') }}</span>
                    </div>
                    @endif
        </div>
    </article>
    @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End 4 columns-->



  <!--Vendor List -->

@include('frontend.home.home_vendor_list')

 <!--End Vendor List -->

@endsection
