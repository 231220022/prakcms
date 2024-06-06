@extends('layouts/admin/adminmain')
@section('content')
@section('title',' Tambah Footer')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah Footer</h2>
          <ol>
            <li>Admin</li>
            <li>Footer</li>
            <li>Tambah Footer</li>
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
                    <label for="judul" class="mb-2">Judul</label>
                    <input type="text" class="form-control mb-2" id="judul" placeholder="Masukkan judul">
                </div>
                <div class="form-group">
                    <label for="link" class="mb-2">Link</label>
                    <input type="text" class="form-control mb-2" id="nama" placeholder="Masukkan link">
                </div>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="status">
                    <label class="form-check-label" for="status">Active</label>
                </div>
                

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
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