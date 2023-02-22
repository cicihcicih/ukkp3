@extends('template.masterbaru')

@section('judul')
    <h1>Data table paket</h1>
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
      <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="/paket/create" class="btn btn-primary">
          <i class="fas fa-plus"></i>
           Tambah
        </a>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
        <td class="td1">No</td>
        <td class="td5">Outlet Id</td>
        <td class="td2">Jenis</td>
        <td class="td3">Nama Paket</td>
        <td class="td4">Harga</td>
        <td class="td4">Action</td>
        </tr>
        </thead>
        <tbody>
          @forelse($paket as $paket)
          <th class="th1">{{ $loop->iteration}}</th>
        <td class="th2">{{ $paket->outlets_id }}</td>
        <td class="th3">{{ $paket->jenis }}</td>
        <td class="th2">{{ $paket->nama_paket }}</td>
        <td class="th2">{{ $paket->harga }}</td>
        <td class="th4">
        <form action="{{route ('paket.destroy', [$paket->id])}}" method="POST">
        <a class="btn btn-info mr-3" href="paket/{{ $paket->id }}">DETAIL</a>
        <a class="btn btn-warning mr-3" href="paket/{{ $paket->id}}/edit">EDIT</a>
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="hapus azza">
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

<!-- @push('scripts')
<script src="{{ asset ('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset ('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $(function () {
     $('#data-table').DataTable();
        
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>
@endpush
  

 -->
