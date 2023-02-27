@extends('frontend.master_dashboard')
@section('main')
@section('title')
    Carrito
@endsection

 <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('homepage') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Inicio</a>
                    <span></span> Carrito
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h4 class="heading-2 mb-10">Tu carrito</h4>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body">Hay productos en tu carrito</h6>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive shopping-summery">
                        <table class="table table-wishlist">
                            <thead>
                                <tr class="main-heading">
                                    <th class="custome-checkbox start pl-30">

                                    </th>
                                    <th scope="col" colspan="2">Producto</th>
                                    <th scope="col">Precio unitario</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Talla</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col" class="end">Quitar</th>
                                </tr>
                            </thead>
                            <tbody id="cartPage">


                            </tbody>
                        </table>
                    </div>


                    <div class="row mt-50">
  <div class="col-lg-5">
   @if(Session::has('coupon'))

   @else


        <div class="p-40" id="couponField">
            <h4 class="mb-10">Aplicar cupón</h4>
            <p class="mb-30"><span class="font-lg text-muted">Tienes un cupón?</p>
            <form action="#">
                <div class="d-flex justify-content-between">

    <input class="font-medium mr-15 coupon" id="coupon_name" placeholder="Ingresa tu cupón">

  <a type="submit" onclick="applyCoupon()" class="btn btn-success"><i class="fi-rs-label mr-10"></i>Aplicar</a>
                </div>
            </form>
        </div>

   @endif
   </div>




                        <div class="col-lg-7">
                             <div class="divider-2 mb-30"></div>



        <div class="border p-md-4 cart-totals ml-30">
    <div class="table-responsive">
        <table class="table no-border">
            <tbody id="couponCalField">



            </tbody>
        </table>
                        </div>
    <a href="{{ route('checkout') }}" class="btn mb-20 w-100">Proceder a pagar<i class="fi-rs-sign-out ml-15"></i></a>
                    </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>




@endsection
