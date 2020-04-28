@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
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
                        <li class="breadcrumb-item active">Novo Emprego</li>
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
                            <h3 class="card-title">Novo Emprego</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputDesignacao">Designação</label>
                                    <input type="text" class="form-control" id="inputDesignacao"
                                        placeholder="Insira uma designação">
                                </div>
                                <div class="form-group">
                                    <label for="selectLocal">Localidade</label>
                                    <select class="form-control select2" id="selectLocal">
                                        <option value="DO" selected="selected" disabled>Selecione uma localidade
                                        </option>
                                        <option>Aveiro</option>
                                        <option>Leirira</option>
                                        <option>Lisboa</option>
                                        <option>Porto</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="selectEmpresa">Empresa</label>
                                    <select class="form-control select2" id="selectEmpresa">
                                        <option value="DO" selected="selected" disabled>Selecione uma empresa
                                        </option>
                                        <option>EuroFirms Leiria</option>
                                        <option>Leirira</option>
                                        <option>Lisboa</option>
                                        <option>Porto</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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
<!-- /.content-wrapper -->
@endsection

