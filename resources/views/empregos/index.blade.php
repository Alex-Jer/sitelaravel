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
              @if (session()->has('message'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session()->get('message') }}
              </div>
              @endif
              <table id="empregos" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Designação</th>
                    <th>Empresa</th>
                    <th>Localidade</th>
                    <th>Categoria</th>
                    <th>Tipo</th>
                    <th>Data</th>
                    <th>Atualizado em</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($empregos as $emprego)
                  <tr>
                    <td><a href="/empregos/{{ $emprego->id }}/edit">{{ $emprego->designacao }}</a></td>
                    <td>{{ $emprego->Empresas->designacao}}</td>
                    <td>{{ $emprego->Localidades->designacao}}</td>
                    <td>{{ $emprego->Categorias->designacao}}</td>
                    <td>{{ $emprego->Tipos->designacao }}</td>
                    <td>{{ $emprego->created_at->format('yy-m-d') }}</td>
                    <td>{{ $emprego->updated_at }}</td>
                    <td class="text-center">
                      <form id="test" role="form" method="POST" action="/empregos/{{ $emprego->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="remove" class="link"
                          style="background-color: transparent; border: none;"><i
                            class="fas fa-trash text-danger"></i></button>
                      </form>
                    </td>
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