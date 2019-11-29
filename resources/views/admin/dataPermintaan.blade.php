@extends('templates.master-admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Permintaan
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
                    <th>Pabrik</th>
                    <th>Alamat</th>
                    <th>Bobot</th>
                    <th>Kadar_brix</th>
                    <th>Sukrosa</th>
                    <th>Glukosa</th>
                    <th>Kualitas</th>
                    <th>Dikirim</th>
                    <th>Perkiraan Tiba</th>
                    <th>Umur</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i=0;
                  @endphp
                  @foreach($data as $permintaan)
                  <tr>
                    <td>Jaya</td>
                    <td>Bandung</td>
                    <td>{{$permintaan->bobot_stok}}</td>
                    <td>{{$permintaan->kadar_brix}}</td>
                    <td>{{$permintaan->sukrosa}}</td>
                    <td>{{$permintaan->glukosa}}</td>
                    <td>
                    @if($permintaan->kualitas > 85 )
                       <span class="label label-success">Baik</span>
                    @elseif($permintaan->kualitas > 60 &&  $permintaan->kualitas < 86)
                        <span class="label label-warning">Sedang</span>
                    @else($permintaan->kualitas < 61)
                        <span class="label label-danger">Buruk</span>
                    @endif 
                    </td>
                    <td>{{$permintaan->dikirim}}</td>
                    <td>{{$permintaan->perkiraan_tiba}}</td>
                    <td>{{$permintaan->umur}}</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal{{$i}}">Ubah</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#exampleModalDelete{{$i}}">Hapus</button>
                     
                    </td>
                  </tr>
                  <div class="modal fade" id="exampleModalDelete{{$i}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{$permintaan->bobot_stok}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda Yakin ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <form action="{{route('dataPermintaan.destroy' , $permintaan->id_permintaan)}}" method="post"
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
                          <h4 class="modal-title">Ubah Data</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('dataPermintaan.update' , $permintaan->id_permintaan)}}" method="post">
                            {{csrf_field()}}{{method_field('PATCH')}}
                            <div class="form-group">
                              <label for="bobot_stok">Bobot</label>
                              <input name="bobot_stok" type="text" class="form-control" id="bobot_stok"
                                value="{{$permintaan->bobot_stok}}">
                            </div>
                            <div class="form-group">
                              <label for="kadar_brix">Kadar Brix</label>
                              <input name="kadar_brix" type="text" class="form-control" id="kadar_brix"
                                value="{{$permintaan->kadar_brix}}">
                            </div>
                            <div class="form-group">
                              <label for="sukrosa">sukrosa</label>
                              <input name="sukrosa" type="number" class="form-control" id="sukrosa"
                                value="{{$permintaan->sukrosa}}">
                            </div>
                            <div class="form-group">
                              <label for="glukosa">glukosa</label>
                              <input name="glukosa" type="number" class="form-control" id="glukosa"
                                value="{{$permintaan->glukosa}}">
                            </div>
                            <div class="form-group">
                              <label for="umur">umur</label>
                              <input name="umur" type="number" class="form-control" id="umur"
                                value="{{$permintaan->umur}}">
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  </section>
  <!-- /.content -->
</div>
@endsection