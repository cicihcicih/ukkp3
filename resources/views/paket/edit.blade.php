@extends('template.masterbaru')

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/paket/{{ $paket->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputoutletid">Id Outlet</label>
                    <input type="integer" name="outlets_id" class="form-control" id="inputoutletid" placeholder="Enter Id Outlet" value="{{ $paket->outlets_id }}"> 
              <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis" id="Jenis" value="{{ $paket->jenis }}">
                    <option value="kiloan">Kiloan</option>
                    <option value="selimut">Selimut</option>
                    <option value="bed_cover">Bed Cover</option>
                    <option value="kaos">Kaos</option>
                    <option value="lain">lainnya</option>
                </select>
                </div>
                <div class="form-group">
             <label for="harga_awal">Nama Paket</label>
             <input type="text" name="nama_paket" class="form-control" id="harga_awal" placeholder="Enter Nama Paket" value="{{ $paket->nama_paket }}">
           </div>
           <div class="form-group">
             <label for="harga_awal">Harga </label>
             <input type="integer" name="harga" class="form-control" id="harga_awal" placeholder="Enter Harga" value="{{ $paket->harga }}">
           </div>
          </div>
       <!-- /.card-body -->
       <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button> 
       </div>
     </form>
 </div>
</div>
@endsection


<!-- <div class="form-group">
                  <label for="exampleSelectBorder">Bottom Border only</code></label>
                  <select class="custom-select rounded-0" name="jenis" id="Jenis" value="{{ $paket->nama_paket}}" id="exampleSelectBorder">
                  <option selected>{{ $paket->jenis }}</option>
                      <option value="kiloan">Kiloan</option>
                      <option value="selimut">Selimut</option>
                      <option value="bed_cover">Bed Cover</option>
                      <option value="kaos">Kaos</option> -->