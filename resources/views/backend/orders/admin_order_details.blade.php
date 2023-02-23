@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Pedidos</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Detalles del pedido</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->

				<hr/>


<div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col">
					<div class="card">
               <div class="card-header"><h4>Detalles del envío</h4> </div>
               <hr>
               <div class="card-body">
                 <table class="table" style="background:#F4F6FA;font-weight: 600;">
                    <tr>
                        <th>Nombre:</th>
                        <th>{{ $order->name }}</th>
                    </tr>

                    <tr>
                        <th>Teléfono:</th>
                        <th>{{ $order->phone }}</th>
                    </tr>

                    <tr>
                        <th>Email:</th>
                        <th>{{ $order->email }}</th>
                    </tr>

                     <tr>
                        <th>Dirección:</th>
                        <th>{{ $order->adress }}</th>
                    </tr>


                    <tr>
                        <th>Parroquia:</th>
                       <th>{{ $order->division->division_name }}</th>
                    </tr>

                    <tr>
                        <th>Municipio:</th>
                       <th>{{ $order->district->district_name }}</th>
                    </tr>

                    <tr>
                        <th>Estado:</th>
                         <th>{{ $order->state->state_name }}</th>
                    </tr>

                     <tr>
                        <th>Código postal:</th>
                         <th>{{ $order->post_code }}</th>
                    </tr>

                     <tr>
                        <th>Fecha del pedido:</th>
                        <th>{{ $order->order_date }}</th>
                    </tr>

                </table>

               </div>

            </div>
					</div>


					<div class="col">
					 <div class="card">
               <div class="card-header"><h4>Detalles del pedido
<span class="text-danger"> Factura : {{ $order->invoice_no }} </span></h4>
                </div>
               <hr>
               <div class="card-body">
                <table class="table" style="background:#F4F6FA;font-weight: 600;">
                    <tr>
                        <th> Nombre :</th>
                        <th>{{ $order->user->name }}</th>
                    </tr>

                    <tr>
                        <th>Teléfono :</th>
                      <th>{{ $order->user->phone }}</th>
                    </tr>

                    <tr>
                        <th>Tipo de pago:</th>
                       <th>{{ $order->payment_method }}</th>
                    </tr>


                    <tr>
                        <th>Transx ID:</th>
                       <th>{{ $order->transaction_id }}</th>
                    </tr>

                    <tr>
                        <th>Factura:</th>
                       <th class="text-danger">{{ $order->invoice_no }}</th>
                    </tr>

                    <tr>
                        <th>Monto:</th>
                         <th>${{ $order->amount }}</th>
                    </tr>

                     <tr>
                        <th>Estado:</th>
      <th><span class="badge bg-danger" style="font-size: 15px;">{{ $order->status }}</span></th>
                    </tr>


     <tr>
                        <th> </th>
      <th>
      	@if($order->status == 'pending')
      	<a href="{{ route('pending-confirm',$order->id) }}" class="btn btn-block btn-success" id="confirm" >Confirmar Pedido</a>

      	@elseif($order->status == 'confirm')
		<a href="{{ route('confirm-processing',$order->id) }}" class="btn btn-block btn-success" id="processing" >Procesando pedido</a>

		@elseif($order->status == 'processing')
		<a href="{{ route('processing-delivered',$order->id) }}" class="btn btn-block btn-success" id="delivered" >Pedido enviado</a>
      	@endif



      	 </th>
       </tr>

                </table>

               </div>

            </div>
					</div>
				</div>






<div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-1">
					<div class="col">
						<div class="card">


<div class="table-responsive">
<table class="table" style="font-weight: 600;"  >
    <tbody>
        <tr>
            <td class="col-md-1">
                <label>Imagen </label>
            </td>
            <td class="col-md-2">
                <label>Nombre del prodcuto </label>
            </td>
            <td class="col-md-2">
                <label>Proveedor </label>
            </td>
            <td class="col-md-2">
                <label>Código del producto </label>
            </td>
            <td class="col-md-1">
                <label>Color </label>
            </td>
            <td class="col-md-1">
                <label>Talla </label>
            </td>
            <td class="col-md-1">
                <label>Cantidad </label>
            </td>

            <td class="col-md-3">
                <label>Precio  </label>
            </td>

        </tr>


        @foreach($orderItem as $item)
         <tr>
            <td class="col-md-1">
                <label><img src="{{ asset($item->product->product_thambnail) }}" style="width:50px; height:50px;" > </label>
            </td>
            <td class="col-md-2">
                <label>{{ $item->product->product_name }}</label>
            </td>
            @if($item->vendor_id == NULL)
             <td class="col-md-2">
                <label>Owner </label>
            </td>
            @else
                <td class="col-md-2">
                <label>{{ $item->product->vendor->name }} </label>
            </td>
            @endif

            <td class="col-md-2">
                <label>{{ $item->product->product_code }} </label>
            </td>
            @if($item->color == NULL)
             <td class="col-md-1">
                <label>.... </label>
            </td>
            @else
            <td class="col-md-1">
                <label>{{ $item->color }} </label>
            </td>
            @endif

            @if($item->size == NULL)
             <td class="col-md-1">
                <label>.... </label>
            </td>
            @else
            <td class="col-md-1">
                <label>{{ $item->size }} </label>
            </td>
            @endif
            <td class="col-md-1">
                <label>{{ $item->qty }} </label>
            </td>

            <td class="col-md-3">
                <label>${{ $item->price }} <br> Total = ${{ $item->price * $item->qty }}   </label>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>

                    </div>



						</div>
					</div>

				</div>






			</div>

@endsection
