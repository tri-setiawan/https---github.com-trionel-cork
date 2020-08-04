@extends('layouts.master')
@section('profile')
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link href="{{asset('admin/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
        <!--  END CUSTOM STYLE FILE  -->
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-spacing">

                <!-- Content -->
                <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                    <div class="user-profile layout-spacing">
                        <div class="widget-content widget-content-area">
                            <div class="d-flex justify-content-between">
                                <h3 class="">Profile</h3>
                            <a href="/siswa/{{$mentor->id}}/edit" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                            </div>
                            <div class="text-center user-info">
                                
                                <p class="">{{$mentor->nama}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                    <div class="skills layout-spacing ">
                        <div class="widget-content widget-content-area">
                            <h3 class="">Skills</h3>
                            <div id="chart">
                                
                            </div>
                        </div>
                    </div>

                    <div class="bio layout-spacing ">
                        <div class="widget-content widget-content-area">
                            @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{session('error')}}
                            </div>
                            @endif
                            @if(session('sukses'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{session('sukses')}}
                            </div>
                            @endif
                            <h3 class="">Data Skill Yang di Mentori oleh {{$mentor->nama}}</h3>
                            <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
                                {{-- <button type="button" class="btn btn-primary mb-2 mr-2 float-right" data-toggle="modal" data-target="#exampleModal">
                                    Tambah Nilai
                                  </button> --}}
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-striped mb-4">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Season</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($mentor->skill as $skill)
                                                        <tr>
                                                            <td>{{$skill->nama}}</td>
                                                            <td>{{$skill->season}}</td>                                                            
                                                        </tr>
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>                                
                    </div>
                </div>

                

            </div>
        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->  
<!-- Modal -->  
@endsection