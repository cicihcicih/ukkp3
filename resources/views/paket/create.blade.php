@extends('template.masterbaru')

@section('judul')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>laundry</h1>
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
              <form action="/paket" method="POST">
                @csrf
                <div class="form-group" >
                <select class="form-select" aria-label="Default select example" name="outlet_id" >
                    <option selected>Open this select menu</option>
             @foreach ($outlet as $item)
                    <option value="{{ $item->id}}">{{ $item->id }}</option>
             @endforeach
                </select>
                 </div>
        <div class="form-group">
          <select name="jenis" id="Jenis">
            <option selected>Open this select menu</option>
            <option value="kiloan">Kiloan</option>
            <option value="selimut">Selimut</option>
            <option value="bed_cover">Bed Cover</option>
            <option value="kaos">Kaos</option>
            <option value="jenis">Jenis</option>
          </select>
        </div>
                <div class="card-body">                 
                  <div class="form-group">
                    <label for="inputnama_paket">Nama paket</label>
                    <input type="text" name="nama_paket" class="form-control" id="inputnama_paket" placeholder="Enter nama_paket">
                  </div>
                  <div class="form-group">
                    <label for="inputharga">Harga</label>
                    <input type="text" name="harga" class="form-control" id="inputharga" placeholder="Enter harga">
                  </div>                    
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