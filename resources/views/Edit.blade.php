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
            <div class="row mb-2">

            </div>
          </div><!-- /.container-fluid -->
        </section>
        @if(session('success'))

        <div class="alert alert-success"  id="success">
            {{ session('success') }}
        </div>
    @endif
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Administracion de tabla del laboratorio</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Laboratorio</th>
                        <th>Mesa</th>
                        <th>Nombre</th>
                        <th>modelo</th>
                        <th>Marca</th>
                        <th>Serial</th>
                        <th>images</th>
                        <th>Accion</th>
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
                        <td>  <a  href="storage/{{$equi->imagen}}" data-toggle="lightbox" data-title="imagenes de los equipos">
                              <img  src="storage/{{$equi->imagen}}" style="width: 194px; height:194px" class="img-fluid mb-2" alt="white sample" loading="lazy"/>
                            </a></td>
                        <td> <button class="bg-green btn" data-toggle="modal" data-target="#exampleModal{{$equi->id}}"  ><i class="fa-solid fa-pen-to-square"></i></button>
                        <button data-id="{{ $equi->id }}" class="bg-red btn btn-delete"><i class="fa-solid fa-trash"></i></button>

                        </tr>
                        @include('modal.edit')
                        @endforeach

                      </tbody>

                    </table>

                         <!--modal-->

          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2023 UNEFA Todos los derechos reservados</strong>
      </footer>



        <script>

        </script>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
@endsection
