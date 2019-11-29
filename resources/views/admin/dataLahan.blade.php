@extends('templates.master-admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Lahan
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
                    <th>Lahan</th>
                    <th>Kadar Air Nira</th>
                    <th>Umur</th>
                    <th>Bobot</th>
                    <th>Tinggi</th>
                    <th>Luas</th>
                    <th>Stok</th>
                    <th>Kualitas</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i=0;
                  @endphp
                  @foreach($data as $datas)
                  <tr>
                    <td>{{$datas->get_lahan->lahan}}</td>
                    <td>{{$datas->kadar_brick}}</td>
                    <td>{{$datas->umur}}</td>
                    <td>{{$datas->bobot_tebu}}</td>
                    <td>{{$datas->tinggi}}</td>
                    <td>{{$datas->get_lahan->luas_lahan}} m</td>
                    <td>{{$datas->get_lahan->stok}} kg</td>
                    <td>
                    @if($datas->kualitas > 85 )
                       <span class="label label-success">Baik</span>
                    @elseif($datas->kualitas > 60 &&  $datas->kualitas < 86)
                        <span class="label label-warning">Sedang</span>
                    @elseif($datas->kualitas < 61)
                        <span class="label label-danger">Buruk</span>
                    @endif  
                    </td>
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
                          <h5 class="modal-title" id="exampleModalLabel">{{$datas->get_lahan->lahan}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda Yakin Menghapus Data Ini ?
                        </div>
                        <div class="modal-footer d-inline">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <form action="{{route('dataLahan.destroy' , $datas->id_tebu)}}" method="post">
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
                          <h5 class="modal-title" id="exampleModalLabel">{{$datas->get_lahan->lahan}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('dataLahan.update' , $datas->id_tebu)}}" method="post">
                            {{csrf_field()}}{{method_field('PATCH')}}
                            <div class="form-group">
                              <label for="kadar_brick">Kadar Brick</label>
                              <input name="kadar_brick"  class="form-control" id="kadar_brick"
                                value="{{$datas->kadar_brick}}" required>
                            </div>
                            <div class="form-group">
                              <label for="umur">Umur</label>
                              <input name="umur" type="number" class="form-control" id="umur" value="{{$datas->umur}}" required>
                            </div>
                            <div class="form-group">
                              <label for="bobot_tebu">bobot Tebu</label>
                              <input name="bobot_tebu" type="number" class="form-control" id="bobot_tebu"
                                value="{{$datas->bobot_tebu}}" required>
                            </div>
                            <div class="form-group">
                              <label for="tinggi">tinggi</label>
                              <input name="tinggi" type="number" class="form-control" id="tinggi"
                                value="{{$datas->tinggi}}" required>
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
                      <form action="{{route('dataLahan.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="id_lahan">Lahan</label>
                          <select class="form-control" id="lahan" name="id_lahan" required>
                            <option>-- Pilih Lahan --</option>
                            <option value="1">Lahan 1</option>
                            <option value="2">Lahan 2</option>
                            <option value="3">Lahan 3</option>
                            <option value="4">Lahan 4</option>
                            <option value="5">Lahan 5</option>
                            <option value="6">Lahan 6</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="kadar_brick">Kadar Brick</label>
                          <input name="kadar_brick" type="number" class="form-control" id="kadar_brick" required>
                        </div>
                        <div class="form-group">
                          <label for="umur">Umur</label>
                          <input name="umur" type="number" class="form-control" id="umur" required>
                        </div>
                        <div class="form-group">
                          <label for="bobot_tebu">bobot_tebu</label>
                          <input name="bobot_tebu" type="number" class="form-control" id="bobot_tebu" required>
                        </div>
                        <div class="form-group">
                          <label for="tinggi">tinggi</label>
                          <input name="tinggi" type="number" class="form-control" id="tinggi" required>
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