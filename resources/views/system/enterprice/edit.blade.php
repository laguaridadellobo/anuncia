@extends('home')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h3 class="title text-center">Editar Empresa {{$highuser->name}}</h3>
                        </div>
                        <div class="card-content">


                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-2">




                                    <form action="/lavado/system/enterprice/{{ $highuser->id}}"  method="post" >

                                      {{csrf_field()}}
                                      {{ method_field('PUT') }}
                                      <div class="row">


                                        <div class="col-sm-3">
                                               <div class="form-group ">
                                                   <label class="control-label">Nombre(s): *</label>
                                                   <input type="text" class="form-control" name="name"
                                                          value="{{$highuser->name}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                        </div>

                                        <div class="col-sm-3">
                                                <div class="form-group ">
                                                    <label class="control-label">RFC: *</label>
                                                    <input type="text" class="form-control" name="rfc"
                                                           value="{{$highuser->rfc}}" required>
                                                    <span class="material-input"></span></div>
                                        </div>



                                        <div class="col-sm-3">
                                               <div class="form-group ">
                                                   <label class="control-label">E-mail: *</label>
                                                   <input type="email" class="form-control" name="mail"
                                                          value="{{$highuser->mail}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>


                                      </div>
                                      <div class="row">
                                        <div class="col-sm-3">
                                               <div class="form-group ">
                                                   <label class="control-label">Descripción: *</label>
                                                   <input type="text" class="form-control" name="description"
                                                          value="{{$highuser->description}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>
                                        <div class="col-sm-3">
                                               <div class="form-group ">
                                                   <label class="control-label">Telefono: *</label>
                                                   <input type="text" class="form-control" name="phone"
                                                          value="{{$highuser->phone}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>


                                      <div class="col-sm-3">



											                </div>

                                      </div>
                                      <button type="submit" class="btn btn-success btn-lg pull-right">Actualizar Ahora</button>














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
