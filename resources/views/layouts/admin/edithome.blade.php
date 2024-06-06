@extends('layouts/admin/adminmain')
@section('content')
@section('title',' Edit Home')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Edit Home</h2>
          <ol>
            <li>Admin</li>
            <li>Home</li>
            <li>Edit Home</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <form action ="{{route('updateHome',['id'=> $home->id])}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="salam" class="mb-2">Salam</label>
                    <input type="text" class="form-control mb-2" id="salam" name="salam" value="{{$home->salam}}"placeholder="Masukkan salam">
                </div>
                <div class="form-group">
                    <label for="konten" class="mb-2">Konten</label><br>
                    <textarea name="konten" id="konten" cols="100" rows="10">{{$home->konten}}</textarea>
                </div>
                <div class="form-group">
                <label for="active" class="mb-2">Status</label><br>
                    <select class="mb-2" name="active" id="active">
                    @if ($home->active == 1)
                        <option value=1 selected>Active</option>
                        <option value=0>Disabled</option>
                    @else
                       <option value=1>Active</option>
                        <option value=0 selected>Disabled</option>
                    @endif 
                     
                    </select>
                </div>
                

                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
            </div>
        </div>
      </div>
</section>
@endsection
