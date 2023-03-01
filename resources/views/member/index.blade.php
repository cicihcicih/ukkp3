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
      <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="member/create" class="btn btn-primary">
          <i class="fas fa-plus"></i>
           Tambah
        </a>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
        <td class="td1">No</td>
        <td class="td5">Nama</td>
        <td class="td3">Alamat</td>
        <td class="td4">Jenis Kelamin</td>
        <td class="td2">telepon</td>
        <td class="td4">Action</td>
        </tr>
        </thead>
        <tbody>
          @forelse($member as $member)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $member->nama }}</td>
           <td>{{ $member->alamat }}</td>
          <td>{{ $member->jenis_kelamin }}</td>
          <td>{{ $member->tlp }}</td>
          <td>
          <form action="{{route ('member.destroy', [$member->id])}}" method="POST">
              <!-- <a class="btn btn-info mr-3" href="member/{{ $member->id }}">Detail</a> -->
              <a class="btn btn-warning mr-3" href="member/{{ $member->id }}/edit">Edit</a>
            @csrf
            @method('DELETE')
           <input type="submit" class="btn btn-danger" value="Delete">
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

<!-- @push('scripts')
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $(function () {
     $('#data-member').Datamember();
        
      $('#example2').Datamember({
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


