<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('adminbackend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Panel de Control</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">

					<li>
					<a href="{{ route('admin.dashobard') }}">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Panel de Control</div>
					</a>
				</li>

				@if(Auth::user()->can('brand.menu'))
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Marcas</div>
					</a>
					<ul>
						@if(Auth::user()->can('brand.list'))
						<li> <a href="{{ route('all.brand') }}"><i class="bx bx-right-arrow-alt"></i>Todas las marcas</a>
						</li>
						@endif
						@if(Auth::user()->can('brand.add'))
						<li> <a href="{{ route('add.brand') }}"><i class="bx bx-right-arrow-alt"></i>Agregar Marcas</a>
						</li>
						 @endif
					</ul>
				</li>
				@endif

                 @if(Auth::user()->can('cat.menu'))
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Categorías</div>
					</a>
					<ul>
						@if(Auth::user()->can('category.list'))
						<li> <a href="{{ route('all.category') }}"><i class="bx bx-right-arrow-alt"></i>Todas las categorías</a>
						</li>
						@endif
						@if(Auth::user()->can('category.add'))
						<li> <a href="{{ route('add.category') }}"><i class="bx bx-right-arrow-alt"></i>Agregar categorías</a>
						</li>
						@endif

					</ul>
				</li>
				@endif
  @if(Auth::user()->can('subcategory.menu'))
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-codepen"></i>
						</div>
						<div class="menu-title">Subcategorias</div>
					</a>
					<ul>
						@if(Auth::user()->can('subcategory.list'))
						<li> <a href="{{ route('all.subcategory') }}"><i class="bx bx-right-arrow-alt"></i>Todas las Subcategorias</a>
						</li>
						@endif
						@if(Auth::user()->can('subcategory.add'))
						<li> <a href="{{ route('add.subcategory') }}"><i class="bx bx-right-arrow-alt"></i>Agregar Subcategorias</a>
						</li>
						@endif

					</ul>
				</li>
	@endif
              @if(Auth::user()->can('product.menu'))
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-fresh-juice"></i>
						</div>
						<div class="menu-title">Productos</div>
					</a>
					<ul>
						@if(Auth::user()->can('product.list'))
						<li> <a href="{{ route('all.product') }}"><i class="bx bx-right-arrow-alt"></i>Todos los productos</a>
						</li>
						@endif
						@if(Auth::user()->can('product.add'))
						<li> <a href="{{ route('add.product') }}"><i class="bx bx-right-arrow-alt"></i>Agregar producto</a>
						</li>
						@endif

					</ul>
				</li>
				@endif

				@if(Auth::user()->can('slider.menu'))
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-gallery"></i>
						</div>
						<div class="menu-title">Sliders</div>
					</a>
					<ul>
						@if(Auth::user()->can('slider.list'))
						<li> <a href="{{ route('all.slider') }}"><i class="bx bx-right-arrow-alt"></i>Todos los Sliders</a>
						</li>
						@endif
						 @if(Auth::user()->can('slider.add'))
						<li> <a href="{{ route('add.slider') }}"><i class="bx bx-right-arrow-alt"></i>Agregar Slider</a>
						</li>
						@endif

					</ul>
				</li>
@endif
				@if(Auth::user()->can('ads.menu'))

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-image"></i>
						</div>
						<div class="menu-title">Banners</div>
					</a>
					<ul>
						@if(Auth::user()->can('ads.list'))
						<li> <a href="{{ route('all.banner') }}"><i class="bx bx-right-arrow-alt"></i>Todos los Banners</a>
						</li>
						@endif
						@if(Auth::user()->can('ads.add'))
						<li> <a href="{{ route('add.banner') }}"><i class="bx bx-right-arrow-alt"></i>Agregar Banner</a>
						</li>
						 @endif
					</ul>
				</li>
@endif
@if(Auth::user()->can('coupon.menu'))
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-invention"></i>
						</div>
						<div class="menu-title">Cupónes</div>
					</a>
					<ul>
						@if(Auth::user()->can('coupon.list'))
						<li> <a href="{{ route('all.coupon') }}"><i class="bx bx-right-arrow-alt"></i>Todos los cupónes</a>
						</li>
						@endif
						@if(Auth::user()->can('coupon.add'))
						<li> <a href="{{ route('add.coupon') }}"><i class="bx bx-right-arrow-alt"></i>Agregar Cupón</a>
						</li>
						@endif

					</ul>
				</li>
@endif
@if(Auth::user()->can('area.menu'))
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-map"></i>
						</div>
						<div class="menu-title">Envíos</div>
					</a>
					<ul>
						<li> <a href="{{ route('all.division') }}"><i class="bx bx-right-arrow-alt"></i>Parroquias</a>
						</li>
						<li> <a href="{{ route('all.district') }}"><i class="bx bx-right-arrow-alt"></i>Municipios</a>
						</li>

						<li> <a href="{{ route('all.state') }}"><i class="bx bx-right-arrow-alt"></i>Estados</a>
						</li>

					</ul>
				</li>
@endif

				<li class="menu-label">Tienda</li>
			@if(Auth::user()->can('vendor.menu'))
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='lni lni-network'></i>
						</div>
						<div class="menu-title">Proveedores</div>
					</a>
					<ul>
						<li> <a href="{{ route('inactive.vendor') }}"><i class="bx bx-right-arrow-alt"></i>Proveedores inactivos</a>
						</li>
						<li> <a href="{{ route('active.vendor') }}"><i class="bx bx-right-arrow-alt"></i>Proveedores activos</a>
						</li>

					</ul>
				</li>
				@endif

@if(Auth::user()->can('order.menu'))
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">Pedidos</div>
					</a>
					<ul>
						<li> <a href="{{ route('pending.order') }}"><i class="bx bx-right-arrow-alt"></i>Pedidos pendientes</a>
						</li>
						<li> <a href="{{ route('admin.confirmed.order') }}"><i class="bx bx-right-arrow-alt"></i>Pedidos confirmados</a>
						</li>
						<li> <a href="{{ route('admin.processing.order') }}"><i class="bx bx-right-arrow-alt"></i>Pedidos en proceso</a>
						</li>
						<li> <a href="{{ route('admin.delivered.order') }}"><i class="bx bx-right-arrow-alt"></i>Pedidos enviados</a>
						</li>



					</ul>
				</li>
@endif

@if(Auth::user()->can('return.order.menu'))
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='lni lni-paperclip'></i>
						</div>
						<div class="menu-title">Devoluciones</div>
					</a>
					<ul>
						<li> <a href="{{ route('return.request') }}"><i class="bx bx-right-arrow-alt"></i>Solicitudes de devolución</a>
						</li>
						<li> <a href="{{ route('complete.return.request') }}"><i class="bx bx-right-arrow-alt"></i>Solicitudes completadas</a>
						</li>
					</ul>
				</li>
@endif
@if(Auth::user()->can('report.menu'))
	<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-stats-up"></i>
						</div>
						<div class="menu-title">Reportes</div>
					</a>
					<ul>
						<li> <a href="{{ route('report.view') }}"><i class="bx bx-right-arrow-alt"></i>Ver reportes</a>
						</li>

							<li> <a href="{{ route('order.by.user') }}"><i class="bx bx-right-arrow-alt"></i>Pedidos por usuarios</a>
						</li>


					</ul>
				</li>
@endif

@if(Auth::user()->can('user.management.menu'))
	<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-slideshare"></i>
						</div>
						<div class="menu-title">Usuarios</div>
					</a>
					<ul>
						<li> <a href="{{ route('all-user') }}"><i class="bx bx-right-arrow-alt"></i>Usuarios</a>
						</li>

							<li> <a href="{{ route('all-vendor') }}"><i class="bx bx-right-arrow-alt"></i>Proveedores</a>
						</li>


					</ul>
				</li>
@endif

@if(Auth::user()->can('blog.menu'))
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-pyramids"></i>
						</div>
						<div class="menu-title">Blog</div>
					</a>
					<ul>
						<li> <a href="{{ route('admin.blog.category') }}"><i class="bx bx-right-arrow-alt"></i>Categorías del Blog</a>
						</li>

							<li> <a href="{{ route('admin.blog.post') }}"><i class="bx bx-right-arrow-alt"></i>Entradas del Blog</a>
						</li>


					</ul>
				</li>
@endif
@if(Auth::user()->can('review.menu'))
	<li>
		<a href="javascript:;" class="has-arrow">
			<div class="parent-icon"><i class="lni lni-indent-increase"></i>
			</div>
			<div class="menu-title">Reseñas</div>
		</a>
		<ul>
			<li> <a href="{{ route('pending.review') }}"><i class="bx bx-right-arrow-alt"></i>Reseñas pendientes</a>
			</li>

				<li> <a href="{{ route('publish.review') }}"><i class="bx bx-right-arrow-alt"></i>Reseñas publicadas</a>
			</li>


		</ul>
	</li>
 @endif
		@if(Auth::user()->can('site.menu'))
				<li>
		<a href="javascript:;" class="has-arrow">
			<div class="parent-icon"><i class="lni lni-cog"></i>
			</div>
			<div class="menu-title">Configuración</div>
		</a>
		<ul>
			<li> <a href="{{ route('site.setting') }}"><i class="bx bx-right-arrow-alt"></i>Opciones del Sitio</a>
			</li>

				<li> <a href="{{ route('seo.setting') }}"><i class="bx bx-right-arrow-alt"></i>SEO</a>
			</li>


		</ul>
	</li>

@endif
@if(Auth::user()->can('stock.menu'))
		<li>
		<a href="javascript:;" class="has-arrow">
			<div class="parent-icon"><i class="lni lni-cart-full"></i>
			</div>
			<div class="menu-title">Gestión de Stock</div>
		</a>
		<ul>
			<li> <a href="{{ route('product.stock') }}"><i class="bx bx-right-arrow-alt"></i>Stock de Productos</a>
			</li>




		</ul>
	</li>
		@endif


@if(Auth::user()->can('role.permission.menu'))
				<li class="menu-label">Roles Y Permisos</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="lni lni-users"></i>
						</div>
						<div class="menu-title">Roles Y Permisos</div>
					</a>
					<ul>
						<li> <a href="{{ route('all.permission') }}"><i class="bx bx-right-arrow-alt"></i>Permisos</a>
						</li>
						<li> <a href="{{ route('all.roles') }}"><i class="bx bx-right-arrow-alt"></i>Roles</a>
						</li>

						<li> <a href="{{ route('add.roles.permission') }}"><i class="bx bx-right-arrow-alt"></i>Agregar permisos de roles</a>
						</li>

						<li> <a href="{{ route('all.roles.permission') }}"><i class="bx bx-right-arrow-alt"></i>Permisos de roles</a>
						</li>

					</ul>
				</li>
	@endif
@if(Auth::user()->can('admin.user.menu'))

				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="lni lni-user"></i>
						</div>
						<div class="menu-title">Administradores </div>
					</a>
					<ul>
						<li> <a href="{{ route('all.admin') }}"><i class="bx bx-right-arrow-alt"></i>Administradores</a>
						</li>
						<li> <a href="{{ route('add.admin') }}"><i class="bx bx-right-arrow-alt"></i>Agregar Administrador</a>
						</li>


					</ul>
				</li>
			@endif


				<li>
					<a href=" " target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Soporte</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
