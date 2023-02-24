@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Municipios</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ url('/all/district') }}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Municipios</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
		<a href="{{ route('add.district') }}" class="btn btn-primary">Agregar municipios</a>
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
				<th>Estado</th>
				<th>Municipio</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
	@foreach($district as $key => $item)
			<tr>
				<td> {{ $key+1 }} </td>
                <td> {{ $item->division->division_name }}</td>
				<td> {{ $item->district_name }}</td>
				<td>
<a href="{{ route('edit.district',$item->id) }}" class="btn btn-info">Editar</a>
<a href="{{ route('delete.district',$item->id) }}" class="btn btn-danger" id="delete" >Borrar</a>

				</td>
			</tr>
			@endforeach


		</tbody>
		<tfoot>
			<tr>
                <th>#</th>
                <th>Estado</th>
                <th>Municipio</th>
                <th>Acción</th>
			</tr>
		</tfoot>
	</table>
						</div>
					</div>
				</div>



			</div>




@endsection
