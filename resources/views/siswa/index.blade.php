@extends('layouts.master')
@section('content')
<div id="content" class="main-content">
<div class="container">
    <div class="container">
        @if(session('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('sukses')}}
            </div>
            @endif
         <div class="row layout-top-spacing">
             <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
                 <div class="statbox widget box box-shadow">
                     <div class="widget-header">
                         <div class="row">
                             <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                 <h4>Data Member</h4>
                                 <a href="/siswa/excel" class="btn btn-primary btn-sm">Excel</a>
                                 {{-- <a href="/siswa/pdf" class="btn btn-primary btn-sm">PDF</a> --}}
                                 <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                                    Tambah Member
                                  </button>
                             </div>
                         </div>
                         <div class="widget-content widget-content-area">
                             <div class="table-responsive">
                                 <table class="table table-bordered table-hover mb-4">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Depan</th>
                                            <th>Nama Belakang</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Nilai</th>
                                            <th>Aksi</th>
                                        </tr>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data_siswa as $siswa)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_depan}}</a></td>
                                            <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_belakang}}</a></td>
                                            <td>{{ date('d M Y',strtotime($siswa->tanggal_lahir)) }}</td>
                                            <td>{{$siswa->jenis_kelamin}}</td>
                                            <td>{{$siswa->agama}}</td>
                                            <td>{{$siswa->alamat}}</td>
                                            <td>{{$siswa->nilai()}}</td>
                                            <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                                <a href="#" class="btn btn-danger btn-sm delete" siswa-id="{{$siswa->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                                {{-- <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                 </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
            
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{url ('/siswa/create')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{$errors->has('nama_depan') ? '.has-error':''}}">
                          <label for="exampleInputEmail1">Nama Depan</label>
                          <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{old('nama_depan')}}">
                          @if ($errors->has('nama_depan'))
                              <span><div class="help-block">{{$errors->first('nama_depan')}}</div></span>
                          @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{old('nama_belakang')}}">
                          </div>
                        <div class="form-group{{$errors->has('email') ? '.has-error':''}}">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
                            @if ($errors->has('email'))
                              <span><div class="help-block">{{$errors->first('email')}}</div></span>
                              @endif
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group{{$errors->has('jenis_kelamin') ? '.has-error':''}}">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                              <option value="L" {{(old('jenis_kelamin') == 'L') ? '.selected' : ''}}>Laki-laki</option>
                              <option value="P" {{(old('jenis_kelamin') == 'P') ? '.selected' : ''}}>Perempuan</option>
                            </select>
                            @if ($errors->has('jenis_kelamin'))
                              <span><div class="help-block">{{$errors->first('jenis_kelamin')}}</div></span>
                          @endif
                          </div>
                          <div class="form-group{{$errors->has('agama') ? '.has-error':''}}">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{old('agama')}}">
                            @if ($errors->has('agama'))
                              <span><div class="help-block">{{$errors->first('agama')}}</div></span>
                          @endif
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
                          </div>
                          <div class="form-group mb-4 mt-3 {{$errors->has('avatar') ? '.has-error':''}}">
                            <label for="exampleFormControlFile1">Avatar</label>
                            <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
                            @if ($errors->has('avatar'))
                              <span><div class="help-block">{{$errors->first('avatar')}}</div></span>
                          @endif
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            @endsection
            @section('script')
            <script>
                $('.delete').on('click', function () {
                    var siswa_id = $(this).attr('siswa-id');
                    swal({
                        title: "Yakin Hapus?",
                        text: "Hapus siswa dengan id "+siswa_id +"!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {
                            window.location = "/siswa/"+siswa_id+"/delete";
                            // swal("Poof! Your imaginary file has been deleted!", {
                            // icon: "success",
                            // });
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                        });
                    });
            </script>
            @endsection
        