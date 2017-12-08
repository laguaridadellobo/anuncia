
@extends('home')




@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h3 class="title text-center">Editar promocion {{$highuser->name}}</h3>
                        </div>
                        <div class="card-content">


                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-2">
                                  <div class="row">





                                    <form action="/lavado/system/promotions/{{ $highuser->id}}"  method="post" >

                                      {{csrf_field()}}
                                      {{ method_field('PUT') }}
                                      <div class="row">


                                        <div class="col-sm-3">
                                               <div class="form-group ">
                                                   <label class="control-label">Nombre(s): *</label>
                                                   <input type="text" class="form-control" name="nombre"
                                                          value="{{$highuser->nombre}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                        </div>

                                        <div class="col-sm-3">
                                                <div class="form-group ">
                                                    <label class="control-label">Precio(s): *</label>
                                                    <input type="text" class="form-control" name="precios"
                                                           value="{{$highuser->precios}}" required>
                                                    <span class="material-input"></span></div>
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
