@extends('layouts/public/app')
@section('title','Contact')
@section('content')
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class=" rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-info text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Hubungi saya</h1>
                            <p class="lead fw-normal text-muted mb-0">Mari bekerja bersama!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">

                                <form action="{{route('simpancontact')}}" method="POST">
                                    <!-- Name input-->
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" name = "nama" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Nama lengkap</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Isikan nama.</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name ="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">Isikan e-mail.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid.</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Telepon</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">Isikan nomor telepon.</div>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" name="pesan" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Pesan</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                    </div>

                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-info" id="submitButton" type="submit">Kirim</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection