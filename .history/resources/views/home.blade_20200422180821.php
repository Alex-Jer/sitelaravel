@extends('layout.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h2>Empregos</h2>
                        <br>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <a href="#" class="small-box-footer">Listar <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h2>Formação</h2>
                        <br>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <a href="#" class="small-box-footer">Listar <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h2>Eventos</h2>
                        <br>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">Listar <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h2>Empresas</h2>
                        <br>
                    </div>
                    <div class="icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <a href="#" class="small-box-footer">Listar <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <section class="col-lg-12">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-primary"><b>Empregos em Destaque</b></h3>
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
                                <tr>
                                    <td>Microsoft Data Engineer (m/f)</td>
                                    <td>akapeople</td>
                                    <td>Porto</td>
                                    <td>Informática</td>
                                    <td>Full-time</td>
                                    <td>20-04-2020</td>
                                </tr>
                                <tr>
                                    <td>Web Developer (m/f)</td>
                                    <td>Closer</td>
                                    <td>Lisboa</td>
                                    <td>Informática</td>
                                    <td>Part-Time</td>
                                    <td>19-04-2020</td>
                                </tr>
                                <tr>
                                    <td>Engenheiro alimentar junior (M/F) - Alcobaça</td>
                                    <td>EuroFirms Leiria</td>
                                    <td>Leiria</td>
                                    <td>Engenharia(Química/Biologia)</td>
                                    <td>Full-time</td>
                                    <td>18-04-2020</td>
                                </tr>
                                <tr>
                                    <td>Motorista de Pesados (m/f) - Viseu</td>
                                    <td>Ferrovial Serviços SA</td>
                                    <td>Viseu</td>
                                    <td>Transportes / Logística</td>
                                    <td>Full-time</td>
                                    <td>20-04-2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </section>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endsection
