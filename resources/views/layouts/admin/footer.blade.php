@extends('layouts/admin/adminmain')
@section('content')
@section('title','Footer')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Footer</h2>
          <ol>
            <li>Admin</li>
            <li>Footer</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
      <div class="container">
        <div class="row">
        <div class="col-md-12 text-end mb-5">
                <a href="{{url('/auth/footer/tambah')}}"><button type="button" class="btn btn-primary me-2"><i class="bx bx-box"></i><span> Tambah Footer Item</span></button></a>
            </div>
            <div class="col-md-12">
                <table id="datauser" class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Mail me</td>
                            <td>mailto:owner@johndoe.com</td>
                            <td>disabled</td>
                            <td><a href="{{url('auth/footer/edit')}}"><i class="bx bx-edit-alt text-primary"></i></a> <i class="bx bx-eraser text-danger"></i></td>                    
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Privacy</td>
                            <td>/other/privacy</td>
                            <td>active</td>  
                            <td><a href="{{url('auth/footer/edit')}}"><i class="bx bx-edit-alt text-primary"></i></a> <i class="bx bx-eraser text-danger"></i></td>                     
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Terms</td>
                            <td>/other/terms</td>
                            <td>active</td>
                            <td><a href="{{url('auth/footer/edit')}}"><i class="bx bx-edit-alt text-primary"></i></a> <i class="bx bx-eraser text-danger"></i></td>                       
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Contact</td>
                            <td>/contact</td>
                            <td>active</td>
                            <td><a href="{{url('auth/footer/edit')}}"><i class="bx bx-edit-alt text-primary"></i></a> <i class="bx bx-eraser text-danger"></i></td>                       
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
      </div>
</section>
@endsection
