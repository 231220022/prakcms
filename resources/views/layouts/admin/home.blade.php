@extends('layouts/admin/adminmain')
@section('content')
@section('title','Home')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Home</h2>
          <ol>
            <li>Admin</li>
            <li>Home</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-end mb-5">
                <a href="{{route('tambahhome')}}"><button type="button" class="btn btn-primary me-2"><i class="bx bx-home"></i><span> Tambah Home item</span></button></a>
            </div>
            <div class="col-md-12">
                <table id="datauser" class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Salam</th>
                        <th>Konten</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                      @foreach ($homes as $home)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$home->salam}}</td>
                            <td>{{$home->konten}}</td>
                            <td>@if ($home->active == 1)
                                  active
                                  @else
                                      disabled
                                  @endif   
                            </td>
                           <td><a href="{{route('editHome',['id'=>$home->id])}}"><i class="bx bx-edit-alt text-primary"></i></a> 
                           <a href="{{ route('deleteHome', ['id' => $home->id]) }}" onclick="event.preventDefault(); if(confirm('Anda yakin akan menghapus home ini?')) { document.getElementById('delete-form-{{ $home->id }}').submit(); }">
                                <i class="bx bx-eraser text-danger"></i> <!-- bx-eraser icon from BoxIcons -->
                            </a>

                            <form id="delete-form-{{ $home->id }}" action="{{ route('deleteHome', ['id' => $home->id]) }}" method="POST" style="display: none;">
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
