@extends('frontend.master_dashboard')
@section('main')

@section('title')
   Página 404
@endsection


<div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto text-center">
                        <p class="mb-20"><img src="{{ asset('frontend/assets/imgs/page/page-404.png') }}" alt="" class="hover-up" /></p>
                        <h1 class="display-2 mb-30">Página no encontrada</h1>
                        <p class="font-lg text-grey-700 mb-30">
                            El enlace que ha pulsado puede estar roto o la página puede haber sido eliminada.<br />
                            visita la <a href="{{ route('homepage') }}"> <span> página de inicio</span></a> o <a href="page-contact.html"><span>contactanos</span></a> sobre el problema
                        </p>
                        <div class="search-form">

                        </div>
                        <a class="btn btn-default submit-auto-width font-xs hover-up mt-30" href="{{ route('homepage') }}"><i class="fi-rs-home mr-5"></i> Regresar a la página de inicio</a>
                    </div>
                </div>
            </div>
        </div>





@endsection
