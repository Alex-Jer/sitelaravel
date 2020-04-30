@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Empregos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Listar Emprego</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Listagem de Empregos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="destaques" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Designação</th>
                    <th>Empresa</th>
                    <th>Localidade</th>
                    <th>Categoria</th>
                    <th>Tipo</th>
                    <th>Data</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($empregos as $emprego)
                  <tr>
                    <td>{{ $emprego->designacao }}</td>
                    <td>{{ $emprego->Empresas->designacao}}</td>
                    <td>{{ $emprego->Localidades->designacao}}</td>
                    <td>{{ $emprego->Categorias->designacao}}</td>
                    <td>{{ $emprego->Tipos->designacao }}</td>
                    <td>{{ $emprego->created_at->format('d-m-yy') }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection