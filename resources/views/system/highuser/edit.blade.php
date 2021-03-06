
@extends('home')




@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h3 class="title text-center">Editar usuario {{$highuser->name}}</h3>
                        </div>
                        <div class="card-content">


                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-2">
                                  <div class="row">

                                    <div class="col-md-4">
                                      <div class="card card-profile">
                                        <div class="card-avatar">
                                          <a href="#pablo">
                                            <img class="img" src="/lavado/public/images/{{$highuser->photo}}" />
                                          </a>
                                        </div>

                                        <div class="content">
                                          <h4 class="card-title">{{$highuser->name}} {{$highuser->last}} </h4>

                                        </div>
                                      </div>
                                    </div>


                                        <div class="col-sm-3">
                                          <form action="{{ route('highuser.uploadimage') }}" class="dropzone" id="myDropzone" method="post" enctype="multipart/form-data">
                                          <input type="hidden" name="entity_id" value="{{$highuser->id}}">
                                          <input type="hidden" name="model" value="App\Highuser">
                                          <!-- <input type="hidden" name="gallery" value="true"> -->
                                        {{csrf_field()}}
                                          </form>
                                        </div>
                                  </div>



                                    <form action="/lavado/system/highuser/{{ $highuser->id}}"  method="post" >

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
                                                    <label class="control-label">Apellido(s): *</label>
                                                    <input type="text" class="form-control" name="last"
                                                           value="{{$highuser->last}}" required>
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
                                                   <label class="control-label">Telefono: *</label>
                                                   <input type="text" class="form-control" name="phone"
                                                          value="{{$highuser->phone}}" required>
                                                   <span class="material-input"></span>
                                               </div>
                                       </div>
                                       <div class="col-sm-3">
                                              <div class="form-group ">
                                                  <label class="control-label">Contraseña: *</label>
                                                  <input type="password" class="form-control" name="pass"
                                                         value="{{$highuser->pass}}" required>
                                                  <span class="material-input"></span>
                                              </div>
                                      </div>

                                      <div class="col-sm-3">

												<div class="form-group">
													<label class="control-label">Seleciona sexo: </label>

													@if( $highuser->sex  == "M"  )
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
													@elseif( $highuser->sex  == "F"  )
														<div class="radio">
															<label>
																<input type="radio" name="sex" value="M">
																Masculino
															</label>
														</div>
														<div class="radio">
															<label>
																<input type="radio" name="sex" value="F"
																	   checked="true">
																Femenino
															</label>
														</div>

														@else
															<div class="radio">
																<label>
																	<input type="radio" name="sex" value="M">
																	Masculino
																</label>
															</div>
															<div class="radio">
																<label>
																	<input type="radio" name="sex" value="F">
																	Femenino
																</label>
															</div>
													@endif
												</div>

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
