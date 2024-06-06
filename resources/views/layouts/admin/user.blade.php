@extends('layouts/admin/adminmain')
@section('content')
@section('title','User')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>User</h2>
          <ol>
            <li>Admin</li>
            <li>User</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-end mb-5">
                <a href="{{url('/auth/user/tambah')}}"><button type="button" class="btn btn-primary me-2"><i class="bx bx-user-plus"></i><span> Tambah User</span></button></a>
            </div>
            <div class="col-md-12">
                <table id="datauser" class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>John Doe</td>
                            <td>owner@johndoe.com</td>
                            <td>Admin</td>
                            <td>Active</td>
                            <td><a href="{{url('auth/user/edit')}}"><i class="bx bx-edit-alt text-primary"></i></a> <i class="bx bx-eraser text-danger"></i></td>                           
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Jane Doe</td>
                            <td>jane@johndoe.com</td>
                            <td>Admin</td>
                            <td>Active</td>
                            <td><a href="{{url('auth/user/edit')}}"><i class="bx bx-edit-alt text-primary"></i></a> <i class="bx bx-eraser text-danger"></i></td>                           
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Tammy White</td>
                            <td>tammy@johndoe.com</td>
                            <td>Operator</td>
                            <td>Active</td>
                            <td><a href="{{url('auth/user/edit')}}"><i class="bx bx-edit-alt text-primary"></i></a> <i class="bx bx-eraser text-danger"></i></td>                           
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
      </div>
</section>
@endsection

@section('script')
$(document).ready(function() {
    $('#datauser').DataTable();
});
@endsection