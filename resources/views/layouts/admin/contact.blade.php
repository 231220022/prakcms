@extends('layouts/admin/adminmain')
@section('content')
@section('title','Contact')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li>Admin</li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table id="datauser" class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Pesan</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                      @foreach ($conts as $cont)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$cont->nama}}</td>
                            <td>{{$cont->email}}</td>
                            <td>{{$cont->phone}}</td>
                            <td>{{$cont->pesan}}</td>
                            <td> 
                            <a href="{{ route('deleteContact', ['id' => $cont->id]) }}" onclick="event.preventDefault(); if(confirm('Anda yakin akan menghapus contact ini?')) { document.getElementById('delete-form-{{ $cont->id }}').submit(); }">
                                <i class="bx bx-eraser text-danger"></i> <!-- bx-eraser icon from BoxIcons -->
                            </a>

                            <form id="delete-form-{{ $cont->id }}" action="{{ route('deleteContact', ['id' => $cont->id]) }}" method="POST" style="display: none;">
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