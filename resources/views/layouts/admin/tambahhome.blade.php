@extends('layouts/admin/adminmain')
@section('content')
@section('title',' Tambah Home')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah Home</h2>
          <ol>
            <li>Admin</li>
            <li>Home</li>
            <li>Tambah Home</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <form action="{{route('simpanhome')}}" method="POST">
              @csrf
                <div class="form-group">
                    <label for="salam" class="mb-2">Salam</label>
                    <input type="text" class="form-control mb-2" id="salam" name="salam" placeholder="Masukkan salam">
                </div>
                <div class="form-group">
                    <label for="konten" class="mb-2">Konten</label><br>
                    <textarea name="konten" id="" cols="100" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="jenis" class="mb-2">Status</label><br>
                    <select class="mb-2" name="active" id="active">
                        <option value=1>Active</option>
                        <option value=0 selected>Disabled</option>
                    </select>   
                </div>
                <div class="form-group">
                    <label for="image_path" class="mb-2">Photo</label>
                    <input type="file" class="form-control mb-2" id="image_path" name="image_path" placeholder="Masukkan salam">
                </div>              

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
            </div>
        </div>
      </div>
</section>
@endsection
