@extends('templates.master-admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Identifikasi
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
                    <th>No</th>
                    <th>penyakit</th>
                    <th>tips</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i=0;
                  @endphp
                  @foreach($data as $datas)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$datas->penyakit}}</td>
                    <td>{{$datas->tips}}</td>
                    <td>{{$datas->get_kategori->nama_kategori}}</td>
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
                          <h5 class="modal-title" id="exampleModalLabel">{{$datas->penyakit}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda Yakin ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <form action="{{route('dataIdentifikasi.destroy' , $datas->id_identifikasi)}}" method="post"
                            class="d-inline">
                            {{csrf_field()}}{{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Hapus</button>
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
                          <h3 class="modal-title" id="exampleModalLabel">{{$datas->penyakit}}</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('dataIdentifikasi.update' , $datas->id_identifikasi)}}" method="post">
                            {{csrf_field()}}{{method_field('PATCH')}}
                            <div class="form-group">
                              <label for="penyakit">Penyakit</label>
                              <input name="penyakit" type="text" class="form-control" id="penyakit"
                                value="{{$datas->penyakit}}">
                            </div>
                            <div class="form-group">
                              <label for="tips">tips</label>
                              <input name="tips" type="text" class="form-control" id="tips" value="{{$datas->tips}}">
                            </div>
                            <div class="form-group">
                              <label for="kategori">Kategori</label>
                              <select class="form-control" class="form-kategori" name="kategori">
                                <option value="">{{$datas->get_kategori->nama_kategori}}</option>
                                <option value=1>Kadar Air</option>
                                <option value=2>Bobot</option>
                                <option value=3>Tinggi</option>
                              </select>
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
              {{-- Tambah --}}
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
                      <form action="{{route('dataIdentifikasi.store')}}" method="post">
              {{csrf_field()}}
              <div class="form-group">
                <label for="penyakit">Penyakit</label>
                <input name="penyakit" type="text" class="form-control" id="penyakit">
              </div>
              <div class="form-group">
                <label for="tips">tips</label>
                <input name="tips" type="text" class="form-control" id="tips">
              </div>
              <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <select class="form-control" class="form-kategori" name="kategori">
                    <option value=""></option>
                    <option value="1">Kadar Air</option>
                    <option value="2">Bobot</option>
                    <option value="3">Tinggi</option>
                  </select>
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