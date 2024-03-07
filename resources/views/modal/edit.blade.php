 <!--modal-->


 <div class="modal fade" id="exampleModal{{$equi->id}}" tabwelcome="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrar Equipo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form  method="POST" action="{{route('editar', $equi->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')


                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Laboratorio:</label>
                                  <input type="number" name="laboratorio" class="form-control" id="inputEmail4" value="{{$equi->laboratorio}}">
                                </div>

                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Mesa:</label>
                                  <input type="text" name="mesa" class="form-control" id="inputPassword4"  value="{{$equi->mesa}}">
                                </div>
                              </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" id="exampleInputPassword1"  value="{{$equi->nombre}}">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">modelo:</label>
                            <input type="text" name="modelo" class="form-control" id="exampleInputPassword1"  value="{{$equi->modelo}}">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Marca:</label>
                            <input type="text" name="marca" class="form-control" id="exampleInputPassword1"  value="{{$equi->marca}}">
                                </div>

                              </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Serial:</label>
                            <input type="text" name="serial" class="form-control" id="exampleInputPassword1"  value="{{$equi->serial}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Comentario:</label>
                            <textarea  name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$equi->comentario}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">Imagen:</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input   type="file" name="imagen" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">subir imagen</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">Cargar</span>
                              </div>
                            </div>
                          </div>
                          @if ($equi->imagen)
                          <img width="150" height="150" src="storage/{{$equi->imagen}}" alt="">

                          @endif

                     </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                     <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                   </form>
                </div>
              </div>
            </div>
          </div>

