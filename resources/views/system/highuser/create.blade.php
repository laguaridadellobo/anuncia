
@extends('home')




@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h3 class="title text-center">Crear cuenta de usuario</h3>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-2">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <br/><br/>
                                            <p>Bienvenido, el equipo de  <b>Lava tu auto</b> estamos muy contentos por que seas parte de nuestra red de contactos, en donde podrás de forma facíl y rapida
                                                publicar los servicios que ofreces y asi expandir tu negocio a más lugares y mucho más clientes.</p>
                                        </div>
                                    </div>

                                    @if(Session::has('flash_message'))
                                              <div class="alert alert-success">
                                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                  {{ Session::get('flash_message') }}
                                              </div>
                                          @endif


                                          @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif



                                    <form action="/lavado/system/highuser"  method="POST" enctype="multipart/form-data">

                                      {{csrf_field()}}


                                      <div class="row">
                                        <div class="col-sm-3">

                                               <div class="form-group ">

                                                   <label class="control-label">Nombre(s): *</label>
                                                   <input type="text" class="form-control" name="name"
                                                          value="{{old('name')}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                        </div>

                                        <div class="col-sm-3">
                                                <div class="form-group ">
                                                    <label class="control-label">Apellido(s): *</label>
                                                    <input type="text" class="form-control" name="last"
                                                        value="{{old('last')}}" required>
                                                    <span class="material-input"></span></div>
                                        </div>



                                        <div class="col-sm-3">
                                               <div class="form-group ">
                                                   <label class="control-label">E-mail: *</label>
                                                   <input type="email" class="form-control" name="mail"
                                                        value="{{old('mail')}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>


                                      </div>
                                      <div class="row">
                                        <div class="col-sm-3">
                                               <div class="form-group ">
                                                   <label class="control-label">Telefono: *</label>
                                                   <input type="number" class="form-control" name="phone"
                                                        value="{{old('phone')}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>
                                       <div class="col-sm-3">
                                              <div class="form-group ">
                                                  <label class="control-label">Contraseña: *</label>
                                                  <input type="password" class="form-control" name="pass"
                                                        value="{{old('pass')}}" required>
                                                  <span class="material-input"></span>
                                              </div>
                                      </div>

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                              <label class="control-label">Seleciona sexo: </label>

                                                  <div class="radio">
                                                      <label>
                                                          <input type="radio" name="sex" value="M"
                                                                 checked="true">
                                                          Masculino
                                                      </label>
                                                  </div>
                                                  <div class="radio">
                                                      <label>
                                                          <input type="radio" name="sex" value="F">
                                                          Femenino
                                                      </label>
                                                  </div>
                                          </div>

                                      </div>

                                      </div>
                                      <button type="submit" class="btn btn-success btn-lg pull-right">Registrarme Ahora</button>














                                    </form>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  @endsection
