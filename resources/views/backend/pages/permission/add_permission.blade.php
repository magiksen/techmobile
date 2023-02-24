@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Permisos</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ url('/all/permission') }}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Agregar Permiso</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">

					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">

<div class="col-lg-10">
	<div class="card">
		<div class="card-body">

		<form id="myForm" method="post" action="{{ route('store.permission') }}"  >
			@csrf

			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Nombre del permiso</h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">
					<input type="text" name="name" class="form-control"   />
				</div>
			</div>


			<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Grupo</h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">
					<select name="group_name" class="form-select mb-3" aria-label="Default select example">
					<option selected="">Seleccionar grupo</option>
					<option value="brand">Marca</option>
					<option value="category">Categoría</option>
					<option value="subcategory">Subcategoria</option>
					<option value="product">Producto</option>
					<option value="slider">Slider</option>
					<option value="ads">Publicidad</option>
					<option value="coupon">Cupón</option>
					<option value="area">Envíos</option>
					<option value="vendor">Proveedores</option>
					<option value="order">Pedidos</option>
					<option value="return">Devoluciones</option>
					<option value="report">Reportes</option>
					<option value="user">Usuarios</option>
					<option value="review">Reseñas</option>
					<option value="setting">Opciones</option>
					<option value="blog">Blog</option>
					<option value="role">Roles</option>
					<option value="admin">Administradores</option>
					<option value="stock">Stock</option>
				</select>
				</div>
			</div>




			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 text-secondary">
					<input type="submit" class="btn btn-primary px-4" value="Guardar cambios" />
				</div>
			</div>
		</div>

		</form>



	</div>




							</div>
						</div>
					</div>
				</div>
			</div>




<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Ingresa un nombre de permiso',
                },
            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>






@endsection
