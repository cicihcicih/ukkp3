@extends('template.masterbaru')

@section('judul')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Outlet</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/member/{{ $member->id }}" method="POST">
         @csrf
         @method('PUT')
       <div class="card-body">
           <div class="form-group">
               <label for="harga_awal">Nama</label>
            <input type="text" name="nama" value="{{$member->nama}}" class="form-control" id="harga_awal" placeholder="Nama">
             </div>
             <div class="form-group">
               <label for="harga_awal">Alamat</label>
               <input type="text" name="alamat" value="{{$member->alamat}}" class="form-control" id="harga_awal" placeholder="Alamat">
             </div>
             <div class="form-group">
                <label for="harga_awal">No Telepon</label>
                <input type="text" name="tlp" value="{{$member->tlp}}" class="form-control" id="harga_awal" placeholder="No Telepon">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>-- Pilih Salah Satu --</option>
                  <option  value="L" {{ $member->jenis_kelamin == "L" ? "selected" : "" }}>Laki-laki</option>
                  <option  value="P"  {{ $member->jenis_kelamin == "P" ? "selected" : "" }}>Perempuan</option>
                </select>
              </div> 
       </div>
       <!-- /.card-body -->
       <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button> 
       </div>
     </form>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection