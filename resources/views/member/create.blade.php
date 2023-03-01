@extends('template.masterbaru')

@section('judul')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Laundry Jaya</h1>
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
                <h3 class="card-title">Member</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('member.store')}}" method="POST">
                @csrf
                <div class="card-body">                 
                  <div class="form-group">
                    <label for="inputname">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Enter Nama">
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Enter Alamat">
                  </div> 
                  <div class="form-group">
                    <label for="inputtlp">No Telepon</label>
                    <input type="text" name="tlp" class="form-control" id="inputtlp" placeholder="Enter tlp">
                  </div>                   
                <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>-- Pilih Salah Satu --</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              
            </div>
            <!-- /.card -->
            <!-- /.card -->
            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection