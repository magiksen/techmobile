@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Devoluciones</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Solicitud de Devoluciones</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">

						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
			<tr>
				<th>#</th>
				<th>Fecha </th>
				<th>Factura </th>
				<th>Monto </th>
				<th>Tipo de pago </th>
				<th>Estatus </th>
				<th>Razón </th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
	@foreach($orders as $key => $item)
			<tr>
				<td> {{ $key+1 }} </td>
				<td>{{ $item->order_date }}</td>
				<td>{{ $item->invoice_no }}</td>
				<td>${{ $item->amount }}</td>
				<td>{{ $item->payment_method }}</td>
                <td>

                @if($item->return_order == 1)
      <span class="badge rounded-pill bg-danger"> Pendiente </span>
      			@elseif($item->return_order == 2)
      <span class="badge rounded-pill bg-success"> Completado </span>
               @endif
  	         </td>

  	         <td>{{ $item->return_reason }}</td>

				<td>
<a href="{{ route('admin.order.details',$item->id) }}" class="btn btn-info" title="Detalles"><i class="fa fa-eye"></i> </a>

<a href="{{ route('return.request.approved',$item->id) }}" class="btn btn-danger" title="Aprobar" id="approved"><i class="fa-solid fa-person-circle-check"></i> </a>


				</td>
			</tr>
			@endforeach


		</tbody>
		<tfoot>
			<tr>
                <th>#</th>
                <th>Fecha </th>
                <th>Factura </th>
                <th>Monto </th>
                <th>Tipo de pago </th>
                <th>Estatus </th>
                <th>Razón </th>
                <th>Acción</th>
			</tr>
		</tfoot>
	</table>
						</div>
					</div>
				</div>



			</div>




@endsection
