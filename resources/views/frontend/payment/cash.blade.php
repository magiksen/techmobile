@extends('frontend.master_dashboard')
@section('main')

 @section('title')
   Cash Payment
@endsection

 <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('homepage') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Inicio</a>
                    <span></span> Pagar en la entrega
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h3 class="heading-2 mb-10">Pagar en la entrega</h3>
                    <div class="d-flex justify-content-between">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">


                    <div class="border p-40 cart-totals ml-30 mb-50">
    <div class="d-flex align-items-end justify-content-between mb-30">
        <h4>Detalles del pedido</h4>

    </div>
    <div class="divider-2 mb-30"></div>
    <div class="table-responsive order_table checkout">

 <table class="table no-border">
        <tbody>

        @if(Session::has('coupon'))

         <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Subtotal</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ $cartTotal }}</h4>
                </td>
            </tr>

            <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Cupón</h6>
                </td>
                <td class="cart_total_amount">
                    <h6 class="text-brand text-end">{{ session()->get('coupon')['coupon_name'] }} ( {{ session()->get('coupon')['coupon_discount'] }}% )</h6>
                </td>
            </tr>

              <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Descuento del cupón</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ session()->get('coupon')['discount_amount'] }}</h4>
                </td>
            </tr>

              <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Total</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ session()->get('coupon')['total_amount'] }}</h4>
                </td>
            </tr>

        @else



            <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Total</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ $cartTotal }}</h4>
                </td>
            </tr>
     @endif

        </tbody>
    </table>





    </div>
</div>


                </div> <!-- // end lg md 6 -->


<div class="col-lg-6">
<div class="border p-40 cart-totals ml-30 mb-50">
    <div class="d-flex align-items-end justify-content-between mb-30">
        <h4>Pagar en efectivo</h4>

    </div>
    <div class="divider-2 mb-30"></div>
    <div class="table-responsive order_table checkout">


  <form action="{{ route('cash.order') }}" method="post" >
        @csrf
    <div class="form-row">
        <label for="card-element">


  <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
  <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
  <input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
  <input type="hidden" name="post_code" value="{{ $data['post_code'] }}">
  <input type="hidden" name="division_id" value="{{ $data['division_id'] }}">
  <input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
  <input type="hidden" name="state_id" value="{{ $data['state_id'] }}">
  <input type="hidden" name="address" value="{{ $data['shipping_address'] }}">
  <input type="hidden" name="notes" value="{{ $data['notes'] }}">


        </label>

        <!-- Used to display form errors. -->

    </div>
    <br>
    <button class="btn btn-primary">Enviar pago</button>
    </form>


    </div>
</div>



                </div>
            </div>
        </div>





@endsection




