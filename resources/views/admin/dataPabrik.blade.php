@extends('templates.master-admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Pabrik
      <small>preview of simple tables</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover bg-white mb-5">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kapasitas Gudang</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i=0;
                  @endphp
                  @foreach($data as $datas)
                  <tr>
                    <td>{{$datas->nama_pabrik}}</td>
                    <td>{{$datas->lokasi_pabrik}}</td>
                    <td>{{$datas->kapasitas_gudang}}</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal{{$i}}">Ubah</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#exampleModalDelete{{$i}}">Hapus</button>
                     
                    </td>
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalDelete{{$i}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{$datas->nama_pabrik}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         Apakah Anda Yakin ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <form action="{{route('dataPabrik.destroy' , $datas->id_pabrik)}}" method="post" class="d-inline">
                          {{csrf_field()}}{{method_field('DELETE')}}
                          <button type="submit" class="btn btn-danger" >Hapus</button>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{$datas->nama_pabrik}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('dataPabrik.update' , $datas->id_pabrik)}}" method="post">
                            {{csrf_field()}}{{method_field('PATCH')}}
                            <div class="form-group">
                              <label for="nama_pabrik">Nama</label>
                              <input name="nama_pabrik" type="text" class="form-control" id="nama_pabrik"
                                value="{{$datas->nama_pabrik}}">
                            </div>
                            <div class="form-group">
                              <label for="lokasi_pabrik">lokasi_pabrik</label>
                              <input name="lokasi_pabrik" type="text" class="form-control" id="lokasi_pabrik"
                                value="{{$datas->lokasi_pabrik}}">
                            </div>
                            <div class="form-group">
                              <label for="kapasitas_gudang">kapasitas_gudang</label>
                              <input name="kapasitas_gudang" type="number" class="form-control" id="kapasitas_gudang"
                                value="{{$datas->kapasitas_gudang}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  @php
                  $i++;
                  @endphp
                  @endforeach
                </tbody>
              </table>
              <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#exampleModal">Tambah</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Lahan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('dataPabrik.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="nama_pabrik">Nama</label>
                          <input name="nama_pabrik" type="text" class="form-control" id="nama_pabrik">
                        </div>
                        <div class="form-group">
                          <label for="lokasi_pabrik">lokasi_pabrik</label>
                          <input name="lokasi_pabrik" type="text" class="form-control" id="lokasi_pabrik">
                        </div>
                        <div class="form-group">
                          <label for="kapasitas_gudang">kapasitas_gudang</label>
                          <input name="kapasitas_gudang" type="number" class="form-control" id="kapasitas_gudang">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection