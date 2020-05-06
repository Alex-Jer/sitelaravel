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
                        <form id="myForm" role="form" method="POST" action="/empregos">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="designacao">Designação</label>
                                    <input type="text" class="form-control" name="designacao" id="designacao"
                                        placeholder="Insira uma designação" value="{{ old('designacao') }}" required>
                                    @error('designacao')
                                    <p class="text-danger">
                                        {{ $errors->first('designacao') }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="localidade">Localidade</label>
                                    <select class="form-control select2" name="localidade" id="localidade">
                                        <option value="DO" selected="selected" disabled>Selecione uma localidade
                                        </option>
                                        @foreach ($localidades as $localidade)

                                        @if (old('localidade') == $localidade->id)
                                        <option value="{{ $localidade->id }}" selected>{{ $localidade->designacao }}
                                        </option>
                                        @else
                                        <option value="{{ $localidade->id }}">{{ $localidade->designacao }}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                    @error('localidade')
                                    <p class="text-danger">
                                        {{ $errors->first('localidade') }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="empresa">Empresa</label>
                                    <select class="form-control select2" name="empresa" id="empresa">
                                        <option value="DO" selected="selected" disabled>Selecione uma empresa
                                        </option>
                                        @foreach ($empresas as $empresa)

                                        @if (old('empresa') == $empresa->id)
                                        <option value="{{ $empresa->id }}" selected>{{ $empresa->designacao }}</option>
                                        @else
                                        <option value="{{ $empresa->id }}">{{ $empresa->designacao }}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                    @error('empresa')
                                    <p class="text-danger">
                                        {{ $errors->first('empresa') }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="categoria">Categoria</label>
                                    <select class="form-control select2" name="categoria" id="categoria">
                                        <option value="DO" selected="selected" disabled>Selecione uma categoria
                                        </option>
                                        @foreach ($categorias as $categoria)

                                        @if (old('categoria') == $categoria->id)
                                        <option value="{{ $categoria->id }}" selected>{{ $categoria->designacao }}
                                        </option>
                                        @else
                                        <option value="{{ $categoria->id }}">{{ $categoria->designacao }}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                    @error('categoria')
                                    <p class="text-danger">
                                        {{ $errors->first('categoria') }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="tipo">Tipo de Emprego</label>
                                    <select class="form-control select2" name="tipo" id="tipo">
                                        <option value="DO" selected="selected" disabled>Selecione um tipo
                                        </option>
                                        @foreach ($tipos as $tipo)

                                        @if (old('tipo') == $tipo->id)
                                        <option value="{{ $tipo->id }}" selected>{{ $tipo->designacao }}</option>
                                        @else
                                        <option value="{{ $tipo->id }}">{{ $tipo->designacao }}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                    @error('tipo')
                                    <p class="text-danger">
                                        {{ $errors->first('tipo') }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <textarea name="descricao" id="descricao" class="form-control" rows="3"
                                        placeholder="Insira uma descrição" required>{{ old('designacao') }}</textarea>
                                    @error('descricao')
                                    <p class="text-danger">
                                        {{ $errors->first('descricao') }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="gravar" id="gravar" value="Gravar">
                                <input type="button" class="btn btn-warning" name="gravar" id="limpar" value="Limpar">
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
@endsection