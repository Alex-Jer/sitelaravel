@extends('layout')

@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Detalhes</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<div class="job_details_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="job_details_header">
                    <div class="single_jobs white-bg d-flex justify-content-between">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                                <img src="/img/svg_icon/{{ $emprego->empresas_id }}.svg" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <a href="/empregos/{{ $emprego->empresas_id }}">
                                    <h4>{{ $emprego->designacao }}</h4>
                                </a>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p> <i class="nav-icon fas fa-building"></i>
                                            {{ $emprego->Empresas->designacao }}</p>
                                    </div>
                                    <div class="location">
                                        <p> <i class="fa fa-map-marker"></i> {{ $emprego->Localidades->designacao }}</p>
                                    </div>
                                    <div class="location">
                                        <p> <i class="fa fa-clock-o"></i> {{ $emprego->Tipos->designacao }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="descript_wrap white-bg">
                    <div class="single_wrap">
                        <h4>Descrição</h4>
                        <p>{{ $emprego->descricao }}</p>
                    </div>
                </div>
                {{-- <div class="apply_job_form white-bg">
                    <h4>Apply for the job</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input_field">
                                    <input type="text" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input_field">
                                    <input type="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input_field">
                                    <input type="text" placeholder="Website/Portfolio link">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" id="inputGroupFileAddon03"><i class="fa fa-cloud-upload"
                                                aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile03"
                                            aria-describedby="inputGroupFileAddon03">
                                        <label class="custom-file-label" for="inputGroupFile03">Upload CV</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input_field">
                                    <textarea name="#" id="" cols="30" rows="10" placeholder="Coverletter"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="submit_btn">
                                    <button class="boxed-btn3 w-100" type="submit">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
            <div class="col-lg-4">
                <div class="job_sumary">
                    <div class="summery_header">
                        <h3>Detalhes</h3>
                    </div>
                    <div class="job_content">
                        <ul>
                            <li>Publicado em: <span>{{ $emprego->created_at->format('d M Y') }}</span></li>
                            <li>Localidade: <span>{{ $emprego->Localidades->designacao }}</span></li>
                            <li>Tipo de Emprego: <span> {{ $emprego->Tipos->designacao }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="share_wrap d-flex">
                    <span>Partilhar:</span>
                    <ul>
                        <li><a href="#"> <i class="fab fa-facebook-f"></i></a> </li>
                        <li><a href="#"> <i class="fab fa-google-plus-g"></i></a> </li>
                        <li><a href="#"> <i class="fab fa-twitter"></i></a> </li>
                        <li><a href="#"> <i class="fa fa-envelope"></i></a> </li>
                    </ul>
                </div>
                {{-- <div class="job_location_wrap">
                    <div class="job_lok_inner">
                        <div id="map" style="height: 200px;"></div>
                        <script>
                            function initMap() {
                                var uluru = {lat: -25.363, lng: 131.044};
                                var grayStyles = [
                                  {
                                    featureType: "all",
                                    stylers: [
                                      { saturation: -90 },
                                      { lightness: 50 }
                                    ]
                                  },
                                  {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
                                ];
                                var map = new google.maps.Map(document.getElementById('map'), {
                                  center: {lat: -31.197, lng: 150.744},
                                  zoom: 9,
                                  styles: grayStyles,
                                  scrollwheel:  false
                                });
                              }

                        </script>
                        <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
                        </script>

                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>

@endsection