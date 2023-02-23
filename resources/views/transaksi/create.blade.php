@extends('master')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Member</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Pilih Data Member</label>
            <select name="id_member" id="id_member">
              @forelse ($members as $member)
                <option value="{{ $member->id }}">{{ $member->nama }}</option>                  
              @empty
                <option value="" disabled>Tidak Ada Member</option>
              @endforelse
            </select>
          </div>
        </div>
    </div>
    <!-- /.card -->

  </div>
  <!--/.col (left) -->
  <!-- right column -->
  <div class="col-md-6">
    <!-- Form Element sizes -->
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Pilih Paket</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="id_paket">Pilih Data Paket</label>
          <select name="id_paket" id="id_paket">
            @forelse ($pakets as $paket)
              <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>                  
            @empty
              <option value="" disabled>Tidak Ada Paket Tersedia</option>
            @endforelse
          </select>
        </div>
        <div class="form-group">
          <label for="qty">Jumlah</label>
          <input type="number" name="qty" id="qty">
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!--/.col (right) -->
</div>

@endsection