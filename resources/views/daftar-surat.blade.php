@extends('layouts.app')
@section('addon-css')
    <!-- third party css -->
    <link href="{{url('/')}}/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Surat</a></li>
                        <li class="breadcrumb-item active">Daftar Surat</li>
                    </ol>
                </div>
                <h4 class="page-title">Daftar Surat</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Semua Data Surat Masuk</h4>
                    <p class="text-muted font-13 mb-4">
                        The following example shows how a callback function can be used to format a particular row at draw time. For each
                        row that is generated for display, the createdRow function is called once and once only. It is passed the create row
                        node which can then be modified.
                    </p>

                    <table id="row-callback-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>No. Urut</th>
                            <th>Tanggal Diterima</th>
                            <th>Nomor Surat</th>
                            <th>Pengirim Surat</th>
                            <th>Perihal</th>
                            <th>Nama Penerima</th>
                            <th>Disposis</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data_surat as $surat)
                        <tr>
                            <td>{{$surat->id}}</td>
                            <td>{{$surat->tanggal_diterima}}</td>
                            <td>{{$surat->nomor_surat}}</td>
                            <td>{{$surat->pengirim_surat}}</td>
                            <td style="max-width: 400px !important; "><p>{{$surat->perihal}}</p></td>
                            <td class="text-blue">{{$surat->nama_penerima}}</td>
                            <td>{{$surat->disposisi}}</td>
                            <td>
                                <a href="{{route('edit-surat', $surat->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                <a href="{{route('hapus-surat', $surat->id)}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection

@section('plugin-js')
    <!-- third party js -->
    <script src="{{url('/')}}/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/libs/datatables/dataTables.bootstrap4.js"></script>
    <script src="{{url('/')}}/libs/datatables/dataTables.buttons.min.js"></script>

    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{url('/')}}/js/pages/datatables.init.js"></script>
@endsection
