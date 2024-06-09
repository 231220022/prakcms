@extends('layouts/public/app')
@section('title','Home')
@section('content')
<div class="homebg fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                 <div class="d-flex justify-content-left mt-5 mt-xxl-0">
                    <div class="profile">
                        <img class="profile-img" src="{{ asset('storage/images/'. $homes[0]->image_path) }}" alt="..." />
                    </div>
                </div>

            </div>
            <div class="col-md-5 justify-content-right">
                <div class="textinfo">
                    <h1>{{$homes[0]->salam}}</h1>
                    <h5>{{$homes[0]->konten}}</h5>
                 
                    <button class="btn btn-info">Hire me</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection