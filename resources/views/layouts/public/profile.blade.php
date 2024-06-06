@extends('layouts/public/app')
@section('content')
           
           <!-- Page Content-->
            <div class="container px-5 my-5">
              
                    <div class="text-left mb-5">
                        <h2 class="display-5 fw-bolder mb-0"><span class="text-info">Profile</span></h2>
                    </div>
             
                
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-info fw-bolder mb-0">Pengalaman</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <a class="btn btn-info px-4 py-3" href="#!">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download Resume
                                </a>
                            </div>
                            <!-- Experience Card 1-->
                            @foreach ($datas[0] as $exp)
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-info fw-bolder mb-2">{{$exp->awal}} - 
                                                @if($exp->akhir > intval(date('Y')))
                                                Sekarang
                                                @else
                                                    {{$exp->akhir}}
                                                @endif

                                              
                                                </div>
                                                <div class="small fw-bolder">{{$exp->jabatan}}</div>
                                                <div class="small text-muted">{{$exp->nm_ins}}</div>
                                                <div class="small text-muted">{{$exp->almt_inst}}</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div>
                                                {{$exp->deskripsi}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Experience Card 2-->
                            
                        </section>

                        <!-- Education Section-->
                        <section>
                            <h2 class="text-info fw-bolder mb-4">Pendidikan</h2>
                            <!-- Education Card 1-->
                            @foreach($datas[1] as $edu)
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-info fw-bolder mb-2">{{$edu->awal}} - {{$edu->akhir}}</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">{{$edu->nm_ins}}</div>
                                                    <div class="small text-muted">{{$edu->almt_ins}}</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">{{$edu->jabatan}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div>
                                                {{$edu->deskripsi}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-info text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-info d-inline">Professional Skills</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SEO/SEM Marketing</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Statistical Analysis</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Development</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Network Security</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe Software Suite</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User Interface Design</div></div>
                                        </div>
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-info text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-info d-inline">Languages</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Ruby</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Node.js</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
@endsection
