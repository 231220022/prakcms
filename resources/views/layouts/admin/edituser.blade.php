@extends('layouts/admin/adminmain')
@section('content')
@section('title',' Edit User')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Edit User</h2>
          <ol>
            <li>Admin</li>
            <li>User</li>
            <li>Edit User</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="mb-2">Nama</label>
                    <input type="text" class="form-control mb-2" id="nama" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="mb-2">Email</label>
                    <input type="email" class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="mb-2">Password</label>
                    <input type="password" class="form-control mb-2" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2" class="mb-2">Password</label>
                    <input type="password" class="form-control mb-2" id="exampleInputPassword2" placeholder="Ulangi Password">
                </div>

                <div class="form-group">
                    <label for="role" class="mb-2">Role</label><br>
                    <select class="mb-2" name="role" id="role">
                        <option value="admin">Admin</option>
                        <option value="operator">Operator</option>
                    </select>

                </div>

                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="status">
                    <label class="form-check-label" for="exampleCheck1">Active</label>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
            </div>
        </div>
      </div>
</section>
@endsection
