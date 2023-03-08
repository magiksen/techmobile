@extends('frontend.master_dashboard')
@section('main')

@section('title')
   Comparar
@endsection
 <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('homepage') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Inicio</a>
                     <span></span> Comparar
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <h1 class="heading-2 mb-10">Productos a Comparar</h1>
                    <div class="table-responsive">
                        <table class="table text-center table-compare">

                            <tbody id="compare">


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
