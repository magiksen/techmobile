@extends('dashboard')
@section('user')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('homepage') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Inicio</a>
                    <span></span> Cambiar contraseña
                </div>
            </div>
        </div>
        <div class="page-content pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
<div class="row">

<!-- // Start Col md 3 menu -->

 @include('frontend.body.dashboard_sidebar_menu')
<!-- // End Col md 3 menu -->




<div class="col-md-9">
<div class="tab-content account dashboard-content pl-50">
<div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
   <div class="card">
        <div class="card-header">
            <h5>Cambiar Contraseña</h5>
        </div>
        <div class="card-body">



    <form method="post" action="{{ route('user.update.password') }}" >
            @csrf

         @if (session('status'))
         <div class="alert alert-success" role="alert">
                {{session('status')}}
         </div>
         @elseif(session('error'))
         <div class="alert alert-danger" role="alert">
            {{session('error')}}
         </div>
         @endif


<div class="row">

    <div class="form-group col-md-12">
        <label>Contraseña antigua <span class="required">*</span></label>
        <input  class="form-control @error('old_password') is-invalid @enderror"  name="old_password" type="password" id="current_password"    placeholder="Contraseña antigua"  />

        @error('old_password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

      <div class="form-group col-md-12">
        <label>Nueva contraseña <span class="required">*</span></label>
        <input  class="form-control @error('new_password') is-invalid @enderror"  name="new_password" type="password" id="new_password"   placeholder="Nueva contraseña"  />

        @error('new_password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


      <div class="form-group col-md-12">
        <label>Confirmar nueva contraseña <span class="required">*</span></label>
        <input  class="form-control"  name="new_password_confirmation" type="password" id="new_password_confirmation"  placeholder="Confirmar nueva contraseña"  />

    </div>



    <div class="col-md-12">
        <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit">Guardar cambios</button>
    </div>
</div>
            </form>
        </div>
    </div>
</div>

  </div>
   </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>





@endsection
