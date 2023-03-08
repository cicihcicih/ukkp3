@extends('template.masterbaru')

@section('judul')
<h1>Manajemen Outlet</h1>
@endsection

@section('content')
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New class</h3>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/paket" method="POST">
                @csrf
            <div class="card-body">                 
                <div class="form-group">
                    <label for="inputoutlet_id">Outlet Id</label>
                    <input type="text" name="outlet_id" class="form-control" id="outletid" placeholder="Enter outlet id" value="{{ $paket->outlets_id }}" disabled >
                </div>
            <div class="form-group">
                  <label>Jenis</label>
                <select class="form-control" name="jenis">
                  <option value="L" disabled {{ $paket->jenis == "kiloan" ? "selected" : "" }}>Kiloan</option>
                  <option value="P" disabled {{ $paket->jenis == "selimut" ? "selected" : "" }}>Selimut</option>
                  <option value="L" disabled {{ $paket->jenis == "bed_cover" ? "selected" : "" }}>bed_cover</option>
                  <option value="L" disabled {{ $paket->jenis == "kaos"  ? "selected" : "" }}>kaos</option>
                </select>
                </select>
              </div>
              <div class="form-group">
                      <label for="inputNamapaket">Nama Paket</label>
                      <input type="text" name="nama_paket" class="form-control" id="inputPaket" placeholder="Enter Nama Paket"value="{{ $paket->nama_paket }}" disabled >
              </div>
              <div class="form-group">
                      <label for="inputHarga">Harga</label>
                      <input type="text" name="harga" class="form-control" id="inputHarga" placeholder="Enter harga" value="{{ $paket->harga }}" disabled >
              </div>
            </div> 
                  
            <!-- /.card-body -->

            <div class="card-footer">
                  <a class="btn btn-info"href="/paket">Back</a>
                </div>
              </form>
            </div>
            
@endsection