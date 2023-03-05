@extends('template.masterbaru')

@section('content')
<div class="row">
<div class="col-md-12">
  <!-- Form Element sizes -->
  <div class="card card-success">
    <div class="card-body">
    <form action="{{ route('transaksi.detail.store', request()->segment(2)) }}" method="post">
        @csrf
        <div class="row">
          <div class="form-group col-md-8">
            <select name="id_paket" id="id_paket" class="form-control">
              <option selected disabled>--Pilih Data Paket--</option>
              @forelse ($pakets as $paket)
                <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>                  
              @empty
                <option selected disabled>Tidak Ada Paket Tersedia</option>
              @endforelse
            </select>
            @error('id_paket')
              <div class="text-danger small">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group  col-md-2">
            <input type="number" name="qty" id="qty" class="form-control" placeholder="Isi Qty">
            @error('qty')
              <div class="text-danger small">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group  col-md-2">
            <input type="submit" value="Tambah" class="btn btn-success form-control">
          </div>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>
<div class="row">
  <!-- left column -->
  <div class="col-md-8">
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
            <div class="form-select">
              <label>Outlet Id</label>
              <select class="form-select" size="3" aria-label="size 3 select example" name="outlet_id" >
                  <option selected>Open this select menu</option>
                  @foreach ($transaksis as $item)
                  <option value="{{ $item->id}}">{{ $item->id }}</option>
              @endforeach
            </select>
            </div>
            <div class="form-group">
              <label>Paket Id</label>
              <select class="form-select" aria-label="Default select example" name="member_id" >
                <option selected>Open this select menu</option>
                  @foreach ($pakets as $item)
                <option value="{{ $item->id}}">{{ $item->id }}</option>
                  @endforeach
              </select>
             </div>
             <div class="form-group">
              <label>Paket Id</label>
              <select class="form-select" aria-label="Default select example" name="member_id" >
                <option selected>Open this select menu</option>
                  @foreach ($transaksis as $item)
                <option value="{{ $item->kode_invoice}}">{{ $item->kode_invoice }}</option>
                  @endforeach
              </select>
             </div>
                  <div class="form-group">
                    <label for="harga_awal">SubTotal</label>
                    <input type="number" class="form-control" name="subTotal" id="SubTotal" placeholder="Rp.0" disabled>
                  </div>
                  <div class="form-group">
                    <label for="harga_awal">Diskon</label>
                    <input type="number" name="diskon" class="form-control" id="Diskon" placeholder="Rp.0" disabled>
                  </div>
                  <div class="form-group">
                    <label for="harga_awal">Total</label>
                    <input type="number" name="Total" class="form-control" id="Total" placeholder="Rp.0" disabled>
                  </div>
           </div>
        </div>
    </div>
    <!-- /.card -->

  </div>
  <!--/.col (left) -->
  <!-- right column -->
  <!--/.col (right) -->
</div>
<script src="script.js"></script>


@endsection