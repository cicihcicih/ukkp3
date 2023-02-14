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
              <form action="{{route ('paket.update', [$paket->id])}}" method="POST">
                @csrf
                @method("PUT")
                <div class="card-body"> 
                <div class="form-group">
                  <div class="row mb-3">
                    <div class="col-sm-12">
                    
                      <!-- <label for="inputoutletid" class="col-sm-2 col-form-label">Outlet Id</label>
                      <input type="text" name="outlet_id" value="{{$paket->outlet_id}}"> -->
                      <!-- <div class="form-group">
                  <label for="exampleSelectBorder">Bottom Border only</code></label>
                  <select class="custom-select rounded-0" name="outlets_id" id="Jenis" value="{{ $paket->outlets_id}}"  id="exampleSelectBorder">
                  <option selected>{{ $paket->outlets_id }}</option>
                  <option value="kiloan">1</option>
                  <option value="selimut">2</option>
                  <option value="bed_cover">3</option>
                  </select>
                  </div> -->
                  <div class="form-group">
                  <label for="exampleSelectBorder">Bottom Border only</code></label>
                  <select class="custom-select rounded-0" name="jenis" id="Jenis" value="{{ $paket->nama_paket}}" id="exampleSelectBorder">
                  <option selected>{{ $paket->jenis }}</option>
                      <option value="kiloan">Kiloan</option>
                      <option value="selimut">Selimut</option>
                      <option value="bed_cover">Bed Cover</option>
                      <option value="kaos">Kaos</option>
                      <!-- <option value="jenis"> Jenis</option> -->
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="inputnama_paket">Nama paket</label>
                    <input type="text" name="nama_paket" class="form-control" id="inputnama_paket"
                     value="{{ $paket->nama_paket}}" placeholder="Enter nama paket">
                  </div>
                  <div class="form-group">
                    <label for="inputharga">Harga</label>
                    <input type="text" name="harga" class="form-control" id="inputharga" 
                    value="{{ $paket->harga}}" placeholder="Enter harga">
                  </div>                    
                </div>
                </div>
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