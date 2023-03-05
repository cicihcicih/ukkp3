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
      <h3 class="card-title">transaksi</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <!-- <a href="member/create" class="btn btn-primary">
          <i class="fas fa-plus"></i>
           Tambah
        </a> -->
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
        <th>No</th>
        <th>Nama Outlet</th>
        <th>Nama Member</th>
        <th>Status</th>
        <th>Nama User</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($transaksis as $trx)
            <th class="th1">{{ $loop->iteration}}</th>
            <td>{{$trx->outlet_id}}</td>
            <td>{{$trx->member_id}}</td>
            <td><label class="badge badge-info">{{$trx->status}}</label></td>
            <td>{{$trx->user_id}}</td>
            <td>
              <form action="{{route ('transaksi.destroy', [$trx->id])}}" method="POST">
                <a class="btn btn-info mr-3" href="transaksi/{{ $trx->id }}">DETAIL</a>
                <a class="btn btn-warning mr-3" href="transaksi/{{ $trx->id}}/edit">EDIT</a>
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="hapus azza">
            </td>
          </tr>
        </tbody>
        @endforelse
      </table>
    </div>
</div>
    <!-- /.card-body -->
@endsection




