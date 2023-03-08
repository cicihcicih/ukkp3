@extends('template.masterbaru')

@section('judul')
    <h1>Data Outlet</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
    </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
      <h3 class="card-title">Data Transaksi</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="transaksi/create" class="btn btn-primary">
    <i class="fas fa-plus-square"></i>
           Tambah
        </a>
        <br>
        </tr>
        <br>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Outlet</th>
          <th>Nama Member</th>
          <th>Status</th>
          <th>Dibayar</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @forelse($transaksis as $transaksi)
         <tr>
         <td>{{ $loop->iteration }}</td>
          <td>{{ $transaksi->outlet->nama }}</td>
          <td>{{ $transaksi->member->nama }}</td>
          <td>{{ $transaksi->status }}</td>
          <td>{{ $transaksi->dibayar }}</td>
          <td>
          <form action="{{ route ('transaksi.destroy', [$transaksi->id])}}" method="POST">
              <a class="btn btn-info mr-3" href="transaksi/{{$transaksi->id}}">
              <i class=""></i> Detail</a>
              <a class="btn btn-warning mr-3" href="transaksi/{{$transaksi->id}}/edit">
              <i class=""></i> Edit</a>
              <form action="/transaksi/{{$transaksi->id}}" method="POST">
            @csrf
            @method('DELETE')
           <button type="submit" class="btn btn-danger" value="Delete"> 
            Delete
          </button>
          </form>
            </td>
         </tr>
         @empty
         <tr>
          <td>Data Masih Kosong</td>
        </tr>

        @endforelse
      </table>
    </div>
    </div>  
    <!-- /.card-body -->
@endsection




