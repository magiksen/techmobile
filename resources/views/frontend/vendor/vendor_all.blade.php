@extends('frontend.master_dashboard')
@section('main')
@section('title')
   Vendor All Page
@endsection
<div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('homepage') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Inicio</a>
                    <span></span> Proveedores
                </div>
            </div>
        </div>
        <div class="page-content pt-50">
            <div class="container">
                <div class="archive-header-2 text-center">
                    <h1 class="display-2 mb-50">Lista de proveedores</h1>
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="sidebar-widget-2 widget_search mb-50">
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Buscar proveedores por nombres..." />
                                        <button type="submit"><i class="fi-rs-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-50">
                    <div class="col-12 col-lg-8 mx-auto">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p>Tenemos <strong class="text-brand">{{ count($vendors) }}</strong> proveedores ahora</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row vendor-grid">


     @foreach($vendors as $vendor)
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
  <a href="{{ route('vendor.details',$vendor->id) }}">
     <img class="default-img" src="{{ (!empty($vendor->photo)) ? url('upload/vendor_images/'.$vendor->photo):url('upload/no_image.jpg') }}" style="width:120px;height: 120px;" alt="" />
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">{{ $vendor->name }}</span>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Desde {{ $vendor->vendor_join }}</span>
                                        </div>
   <h4 class="mb-5"><a href="{{ route('vendor.details',$vendor->id) }}">{{ $vendor->name }}</a></h4>
                                     </div>

    @php
 $products = App\Models\Product::where('vendor_id',$vendor->id)->get();
              @endphp
                        <div class="mb-10">
   <span class="font-small total-product">{{ count($products) }} productos</span>
                        </div>
                    </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Dirección: </strong> <span>{{ $vendor->address }}</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Llamanos:</strong><span>{{ $vendor->phone }}</span></li>
                                    </ul>
                                </div>
                                <a href="{{ route('vendor.details',$vendor->id) }}" class="btn btn-xs">Visitar proveedor <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    @endforeach


                </div>
            </div>
        </div>



@endsection
