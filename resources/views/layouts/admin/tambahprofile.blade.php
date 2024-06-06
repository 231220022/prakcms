@extends('layouts/admin/adminmain')
@section('content')
@section('title',' Tambah Profile')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah Profile</h2>
          <ol>
            <li>Admin</li>
            <li>Profile</li>
            <li>Tambah Profile</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <form action = "{{route('simpanprofile')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="masakerjaawal" class="mb-2">Tahun Awal</label>
                    <input type="text" class="form-control mb-2" id="awal" name="awal" placeholder="Masukkan tahun awal">
                </div>
                <div class="form-group">
                    <label for="masakerjaakhir" class="mb-2">Tahun Akhir</label>
                    <input type="text" class="form-control mb-2" id="akhir" name="akhir" placeholder="Masukkan tahun akhir">
                </div>
                <div class="form-group">
                    <label for="jabatan" class="mb-2">Jabatan</label>
                    <input type="text" class="form-control mb-2" id="jabatan" name="jabatan" placeholder="Masukkan jabatan">
                </div>
                <div class="form-group">
                    <label for="jenis" class="mb-2">Jenis</label><br>
                    <select class="mb-2" name="jenis" id="jenis">
                        <option value="Pengalaman">Pengalaman</option>
                        <option value="Pendidikan">Pendidikan</option>
                    </select>
                    
                </div>
                <div class="form-group">
                    <label for="perusahaan" class="mb-2">Nama Perusahaan/Pendidikan</label>
                    <input type="text" class="form-control mb-2" id="nm_ins" name="nm_ins" placeholder="Masukkan perusahaan/lembaga pendidikan">
                </div>

                <div class="form-group">
                    <label for="alamat" class="mb-2">Alamat Perusahaan/Pendidikan</label>
                    <input type="text" class="form-control mb-2" id="almt_ins" name = "almt_ins" placeholder="Masukkan alamat perusahaan/lembaga pendidikan">
                </div>

                <div class="form-group">
                    <label for="deskripsi" class="mb-2">Deskripsi</label><br>
                    <textarea name="deskripsi" id="deskripsi" cols="100" rows="10"></textarea>
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