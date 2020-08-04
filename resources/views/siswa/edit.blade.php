@extends('layouts.master')
@section('content')
            @if(session('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('sukses')}}
            </div>
            @endif
            <div id="content" class="main-content">
              <div class="layout-px-spacing">                
                      
                  <div class="account-settings-container layout-top-spacing">
  
                      <div class="account-content">
                          <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                              <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                      <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data" id="general-info" class="section general-info">
                                        {{ csrf_field() }}
                                          <div class="info">
                                              <h6 class="">General Information</h6>
                                              <div class="row">
                                                  <div class="col-lg-11 mx-auto">
                                                      <div class="row">
                                                          {{-- <div class="col-xl-2 col-lg-12 col-md-4">
                                                              <div class="upload mt-4 pr-md-4">
                                                                  <input type="file" name="avatar" id="input-file-max-fs" class="dropify" data-default-file="assets/img/user-profile.jpeg" data-max-file-size="2M" />
                                                                  <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Avatar</p>
                                                              </div>
                                                          </div> --}}
                                                          <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                              <div class="form">
                                                                  <div class="row">
                                                                      <div class="col-sm-6">
                                                                          <div class="form-group">
                                                                              <label for="nama_depan">Nama Depan</label>
                                                                          <input type="text" class="form-control mb-4" id="nama_depan" value="{{$siswa->nama_depan}}">
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="nama_belakang">Nama Belakang</label>
                                                                            <input type="text" class="form-control mb-4" id="nama_belakang" value="{{$siswa->nama_belakang}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                      <label class="dob-input">Tanggal Lahir</label>
                                                                      <div class="d-sm-flex d-block">
                                                                          <div class="form-group mr-1">
                                                                          <input name="tanggal_lahir" type="date" class="form-control" id="exampleFormControlSelect1" value="{{$siswa->tanggal_lahir}}">
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                      <div class="col-sm-6">
                                                                          <label class="dob-input">Jenis Kelamin</label>
                                                                          <div class="d-sm-flex d-block">
                                                                              <div class="form-group mr-1">
                                                                                  <select class="form-control" id="exampleFormControlSelect1">
                                                                                    <option value="L" @if ($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                                                                                    <option value="P" @if ($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                                                                  </select>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="agama">Agama</label>
                                                                        <input type="text" class="form-control mb-4" id="agama" value="{{$siswa->agama}}">
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <label for="alamat">Alamat</label>
                                                                      <textarea name="alamat" class="form-control mb-4" id="alamat">{{$siswa->alamat}}</textarea>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="avatar">Input Avatar</label>
                                                                    <input type="file" name="avatar" class="form-control">
                                                                </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <button type="submit" class="btn btn-warning">Update</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
        @endsection