@extends('layouts/admin/adminmain')
@section('content')
@section('title',' Edit Profile')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Edit Profile</h2>
          <ol>
            <li>Admin</li>
            <li>Profile</li>
            <li>Edit Profile</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <form action ="{{route('updateProfile',['id'=> $profile->id])}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="masakerjaawal" class="mb-2">Tahun Awal</label>
                    <input type="text" class="form-control mb-2" id="awal" name="awal" value ="{{$profile->awal}}" placeholder="Masukkan tahun awal">
                </div>
                <div class="form-group">
                    <label for="masakerjaakhir" class="mb-2">Tahun Akhir</label>
                    <input type="text" class="form-control mb-2" id="akhir" name="akhir" value ="{{$profile->akhir}}" placeholder="Masukkan tahun akhir">
                </div>
                <div class="form-group">
                    <label for="jabatan" class="mb-2">Jabatan</label>
                    <input type="text" class="form-control mb-2" id="jabatan" name="jabatan" value ="{{$profile->jabatan}}" placeholder="Masukkan jabatan">
                </div>
                <div class="form-group">
                    <label for="jenis" class="mb-2">Jenis</label><br>
                    <select class="mb-2" name="jenis" id="jenis">
                    @if ($profile->jenis == 'Pengalaman')
                        <option value="Pengalaman" selected>Pengalaman</option>
                        <option value="Pendidikan">Pendidikan</option>
                                  @else
                                  <option value="Pengalaman" >Pengalaman</option>
                                    <option value="Pendidikan" selected>Pendidikan</option>
                                  @endif 
                     
                    </select>
                    
                </div>
                <div class="form-group">
                    <label for="perusahaan" class="mb-2">Nama Perusahaan/Pendidikan</label>
                    <input type="text" class="form-control mb-2" id="nm_ins" name="nm_ins"  value = "{{$profile->nm_ins}}" placeholder="Masukkan perusahaan/lembaga pendidikan">
                </div>

                <div class="form-group">
                    <label for="alamat" class="mb-2">Alamat Perusahaan/Pendidikan</label>
                    <input type="text" class="form-control mb-2" id="almt_ins" name = "almt_ins" value = "{{$profile->almt_ins}}" placeholder="Masukkan alamat perusahaan/lembaga pendidikan">
                </div>

                <div class="form-group">
                    <label for="deskripsi" class="mb-2">Deskripsi</label><br>
                    <textarea name="deskripsi" id="deskripsi" cols="100" rows="10">{{$profile->deskripsi}}</textarea>
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
            </div>
        </div>
      </div>
</section>
@endsection
