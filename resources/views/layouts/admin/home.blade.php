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
        <tr>
            <th>No</th>
            <th>Salam</th>
            <th>Konten</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($homes as $home)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $home->salam }}</td>
                <td>{{ $home->konten }}</td>
                <td>
                    @if ($home->image_path)
                        <img class="profile-img" src="{{ asset('storage/images/' . $home->image_path) }}" width="150" height="200" alt="Image" />
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    @if ($home->active == 1)
                        Active
                    @else
                        Disabled
                    @endif
                </td>
                <td>
                    <a href="{{ route('editHome', ['id' => $home->id]) }}">
                        <i class="bx bx-edit-alt text-primary"></i>
                    </a>
                    <a href="{{ route('deleteHome', ['id' => $home->id]) }}" onclick="event.preventDefault(); if(confirm('Anda yakin akan menghapus home ini?')) { document.getElementById('delete-form-{{ $home->id }}').submit(); }">
                        <i class="bx bx-eraser text-danger"></i>
                    </a>
                    <form id="delete-form-{{ $home->id }}" action="{{ route('deleteHome', ['id' => $home->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
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
