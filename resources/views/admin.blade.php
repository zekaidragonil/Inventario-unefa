@extends('layouts.app')


@section('content')
<div class="wrapper">
      <!-- Navbar -->
      @include('panel')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2" style="flex-direction: row-reverse;">
                <button style="margin-right: 30px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Registro de Equipos
                  </button>


            </div>
          </div><!-- /.container-fluid -->
          @if(session('success'))

          <div class="alert alert-success"  id="success">
              {{ session('success') }}
          </div>
      @endif
           @include('modal.registro')
        </section>
          <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Registro de Equipos de los Laboratorio</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Laboratorio</th>
                        <th>Mesa</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>modelo</th>
                        <th>Serial</th>
                        <th>images</th>
                        <th>Comentario</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($equipos as $equi)
                      <tr>
                        <td>{{$equi->laboratorio}}</td>
                        <td>{{$equi->mesa}}</td>
                        <td>{{$equi->nombre}}</td>
                        <td> {{$equi->modelo}}</td>
                        <td> {{$equi->marca}}</td>
                        <td>{{$equi->serial}}</td>
                        <td>
                            <a  href="storage/{{$equi->imagen}}" data-toggle="lightbox" data-title="imagenes de los equipos">
                              <img  src="storage/{{$equi->imagen}}" style="width: 194px; height:194px" class="img-fluid mb-2" alt="white sample" loading="lazy"/>
                            </a>
                        </td>

                        <td>{{$equi->comentario}}</td>
                      </tr>
                     @endforeach
                      </tbody>

                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

    </div>


@endsection
