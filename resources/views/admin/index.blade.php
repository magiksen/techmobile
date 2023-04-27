@extends('admin.admin_dashboard')
@section('admin')

@php
	$date = date('d-m-y');
	$today = App\Models\Order::where('order_date',$date)->sum('amount');

	$month = date('F');
	$month = App\Models\Order::where('order_month',$month)->sum('amount');


	$year = date('Y');
	$year = App\Models\Order::where('order_year',$year)->sum('amount');

	$pending = App\Models\Order::where('status','pending')->get();

	$vendor = App\Models\User::where('status','active')->where('role','vendor')->get();

	$customer = App\Models\User::where('status','active')->where('role','user')->get();

@endphp





<div class="page-content">

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
						<div class="col">
							<div class="card radius-10 bg-gradient-deepblue">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">${{ $today }} USD</h5>
									<div class="ms-auto">
                                        <i class='bx bx-cart fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Ventas diarias</p>

								</div>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-orange">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">${{ $month }} USD</h5>
									<div class="ms-auto">
                                        <i class='bx bx-dollar fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Ventas mensuales</p>

								</div>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ohhappiness">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">${{ $year }} USD</h5>
									<div class="ms-auto">
                                        <i class='bx bx-group fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Ventas anuales</p>

								</div>
							</div>
						</div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ibiza">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">{{ count($pending) }}</h5>
									<div class="ms-auto">
                                        <i class='bx bx-envelope fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Pedidos pendientes</p>

								</div>
							</div>
						 </div>
						</div>

							<div class="col">
							<div class="card radius-10 bg-gradient-ibiza">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">{{ count($customer) }}</h5>
									<div class="ms-auto">
                                        <i class='bx bx-envelope fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Total Usuarios </p>
								</div>
							</div>
						 </div>
						</div>




					</div><!--end row-->





@php

$orders = App\Models\Order::where('status','pending')->orderBy('id','DESC')->limit(10)->get();
@endphp

					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">Resumen de pedidos</h5>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<hr>
							<div class="table-responsive">
								<table class="table align-middle mb-0">
									<thead class="table-light">
										<tr>
											<th>Sl</th>
											<th>Fecha</th>
											<th># Factura</th>
											<th>Monto</th>
											<th>Tipo de pago</th>
											<th>Estado</th>
										</tr>
									</thead>


							<tbody>

	@foreach($orders as $key => $order)
	<tr>
		<td>{{ $key+1 }}</td>

		<td>{{ $order->order_date }}</td>
		<td>{{ $order->invoice_no }}</td>
		<td>${{ $order->amount }}</td>
		<td>{{ $order->payment_method }}</td>
		<td>
			<div class="badge rounded-pill bg-light-info text-info w-100">
				{{ $order->status  }}</div>
		</td>

	</tr>
	@endforeach

									</tbody>
								</table>
							</div>
						</div>
					</div>

			</div>

@endsection
