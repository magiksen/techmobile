@extends('frontend.master_dashboard')
@section('main')
@section('title')
   Wishlist
@endsection
<div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('homepage') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Inicio</a>
                    <span></span> Lista de deseos
                </div>
            </div>
        </div>
        <div class="container mb-30 mt-50">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <div class="mb-50">
                        <h1 class="heading-2 mb-10">Tu lista de deseos</h1>
                        <h6 class="text-body">Hay productos en tu lista</h6>
                    </div>
                    <div class="table-responsive shopping-summery">
                        <table class="table table-wishlist">
                            <thead>
                                <tr class="main-heading">
                                    <th class="custome-checkbox start pl-30">

                                    </th>
                                    <th scope="col" colspan="2">Productos</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Stock</th>

                                    <th scope="col" class="end">Remover</th>
                                </tr>
                            </thead>
                            <tbody id="wishlist">




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



@endsection
