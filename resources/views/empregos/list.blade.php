@extends('layout')
<?php setlocale(LC_TIME, 'PT_pt') ?>

@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Empregos</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- job_listing_area_start  -->
<div class="job_listing_area plus_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="job_filter white-bg">
                    <div class="form_inner white-bg">
                        <h3>Filtros</h3>
                        <form id="myForm" role="form" method="POST" action="/empregos/list">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <input id="designacao" name="designacao" type="text" placeholder="Procurar">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide" id="localidade" name="localidade">
                                            <option data-display="Localidade">Localidade</option>
                                            @foreach ($localidades as $localidade)

                                            @if (old('localidade') == $localidade->id)
                                            <option value="{{ $localidade->id }}" selected>{{ $localidade->designacao }}
                                            </option>
                                            @else
                                            <option value="{{ $localidade->id }}">{{ $localidade->designacao }}</option>
                                            @endif

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide" id="categoria" name="categoria">
                                            <option data-display="Categoria">Categoria</option>
                                            @foreach ($categorias as $categoria)

                                            @if (old('categoria') == $categoria->id)
                                            <option value="{{ $categoria->id }}" selected>{{ $categoria->designacao }}
                                            </option>
                                            @else
                                            <option value="{{ $categoria->id }}">{{ $categoria->designacao }}</option>
                                            @endif

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide" id="tipo" name="tipo">
                                            <option data-display="Tipo">Tipo</option>
                                            @foreach ($tipos as $tipo)

                                            @if (old('tipo') == $tipo->id)
                                            <option value="{{ $tipo->id }}" selected>{{ $tipo->designacao }}</option>
                                            @else
                                            <option value="{{ $tipo->id }}">{{ $tipo->designacao }}</option>
                                            @endif

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="reset_btn">
                                <button class="boxed-btn3 w-100" type="submit" id="submeter"
                                    name="submeter">Submeter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="recent_joblist_wrap">
                    <div class="recent_joblist white-bg ">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4>Lista de empregos</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="serch_cat d-flex justify-content-end">
                                    <select>
                                        <option data-display="Mais Recentes">Mais Recentes</option>
                                        <option value="1">Mais Antigos</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="job_lists m-0">
                    <div class="row">
                        @foreach ($empregos as $emprego)
                        <div class="col-lg-12 col-md-12">
                            <div class="single_jobs white-bg d-flex justify-content-between">
                                <div class="jobs_left d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="/img/svg_icon/{{ $emprego->Empresas->id }}.svg" alt="">
                                    </div>
                                    <div class="jobs_conetent">
                                        <a href="/empregos/{{ $emprego->id }}">
                                            <h4>{{ $emprego->designacao }}</h4>
                                        </a>
                                        <div class="links_locat d-flex align-items-center">
                                            <div class="location">
                                                <p> <i class="nav-icon fas fa-building"></i>
                                                    {{ $emprego->Empresas->designacao }}</p>
                                            </div>
                                            <div class="location">
                                                <p> <i class="fa fa-map-marker"></i>
                                                    {{ $emprego->Localidades->designacao }}</p>
                                            </div>
                                            <div class="location">
                                                <p> <i class="fa fa-clock-o"></i> {{ $emprego->Tipos->designacao }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs_right">
                                    <div class="apply_now">
                                        <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                        <a href="/empregos/{{ $emprego->id }}" class="boxed-btn3">Mais Info</a>
                                    </div>
                                    <div class="date">
                                        <p>Data: {{ $emprego->created_at->formatLocalized('%d %b %Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job_listing_area_end  -->

@endsection