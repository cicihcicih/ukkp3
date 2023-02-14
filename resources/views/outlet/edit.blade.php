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
              <form action="/outlet/{{$outlet->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">                 
                <div class="form-group">
                    <label for="inputname">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Enter Nama" value="{{ $outlet->nama}}">
                  </div>
                  @error('nama')
                <div class="alert alert-danger">
                    ({ $message })
                </div>
                @enderror
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Enter Alamat" value="{{ $outlet->alamat}}">
                  </div> 
                  @error('alamat')
                <div class="alert alert-danger">
                    ({ $message })
                </div>
                @enderror 
                <div class="form-group">
                    <label for="inputtlp">No Telepon</label>
                    <input type="text" name="tlp" class="form-control" id="inputtlp" placeholder="Enter tlg" value="{{ $outlet->tlp}}">
                  </div>  
                  @error('tlp')
                <div class="alert alert-danger">
                    ({ $message })
                </div>
                @enderror                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
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