@extends('template.masterbaru')

@section('judul')
<h1>Manajemen member</h1>
@endsection

@section('content')
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/member" method="POST">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="inputnama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" 
                    placeholder="Enter nama" value="{{ $member->nama }}" disabled >
            </div>
            <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="Alamat" placeholder="Enter alamat" value="{{ $member->alamat }}" disabled >
            </div>
            <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                      <option disabled selected>-- Pilih Salah Satu --</option>
                      <option value="L" disabled {{ $member->jenis_kelamin == "L" ? "selected" : "" }}>Laki-laki</option>
                      <option value="P" disabled {{ $member->jenis_kelamin == "L" ? "selected" : "" }}>Perempuan</option>
                    </select>
                  </div>
            <div class="form-group">
                    <label for="inputtlp">Telepon</label>
                    <input type="text" name="tlp" class="form-control" id="inputTelepon" placeholder="Enter tlp" value="{{ $member->tlp }}" disabled >
            </div>
                  
            <!-- /.card-body -->

            <div class="card-footer">
                  <a class="btn btn-info"href="/member">Back</a>
                </div>
              </form>
            </div>
            
@endsection