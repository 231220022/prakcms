@extends('layouts/admin/adminmain')
@section('content')
@section('title','Profile')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profile</h2>
          <ol>
            <li>Admin</li>
            <li>Profile</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-end mb-5">
                <a href="{{url('/auth/profile/tambah')}}"><button type="button" class="btn btn-primary me-2"><i class="bx bx-user-plus"></i><span> Tambah Profile Item</span></button></a>
            </div>
            <div class="col-md-12">
                <table id="datauser" class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Masa Kerja</th>
                        <th>Jabatan</th>
                        <th>Jenis</th>
                        <th>Nama Perusahaan</th>
                        <th>Alamat Perusahaan</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($profiles as $profile)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$profile->awal}} - {{$profile->akhir}} </td>
                            <td>{{$profile->jabatan}}</td>
                            <td>{{$profile->jenis}}</td>
                            <td>{{$profile->nm_ins}}</td>
                            <td>{{$profile->almt_ins}}</td>
                            <td>{{$profile->deskripsi}}</td>
                            <td><a href="{{route('editprofile',['id'=> $profile->id])}}"><i class="bx bx-edit-alt text-primary"></i></a> 
                            
                            <a href="{{ route('deleteProfile', ['id' => $profile->id]) }}" onclick="event.preventDefault(); if(confirm('Anda yakin akan menghapus profile ini?')) { document.getElementById('delete-form-{{ $profile->id }}').submit(); }">
                                <i class="bx bx-eraser text-danger"></i> <!-- bx-eraser icon from BoxIcons -->
                            </a>

                            <form id="delete-form-{{ $profile->id }}" action="{{ route('deleteProfile', ['id' => $profile->id]) }}" method="POST" style="display: none;">
                                @csrf
                                @method('POST')
                            </form>
                          </td>                           
                        </tr>
                        @endforeach
                      
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