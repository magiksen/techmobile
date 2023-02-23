@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Categorías de Blog</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Todas las Categorías</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
		<a href="{{ route('add.blog.categroy') }}" class="btn btn-primary">Agregar categoría</a>
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
				<th>Nombre de la categoría </th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
	@foreach($blogcategoryies as $key => $item)
			<tr>
				<td> {{ $key+1 }} </td>
				<td>{{ $item->blog_category_name }}</td>

				<td>
<a href="{{ route('edit.blog.category',$item->id) }}" class="btn btn-info">Editar</a>
<a href="{{ route('delete.blog.category',$item->id) }}" class="btn btn-danger" id="delete" >Borrar</a>

				</td>
			</tr>
			@endforeach


		</tbody>
		<tfoot>
			<tr>
                <th>#</th>
                <th>Nombre de la categoría </th>
                <th>Acción</th>
            </tr>
		</tfoot>
	</table>
						</div>
					</div>
				</div>



			</div>




@endsection
