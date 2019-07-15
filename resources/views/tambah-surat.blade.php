@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Surat</a></li>
                        <li class="breadcrumb-item active">Tambah Surat</li>
                    </ol>
                </div>
                <h4 class="page-title">Tambah Surat</h4>
            </div>
        </div>
    </div>

    @section('addon-css')
        <link href="{{url('/')}}/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/libs/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        @endsection

    <div class="row">
        <div class="col-9">
            <div class="card">

                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success bg-success text-white border-0" role="alert">
                            Data <strong>Berhasil </strong> Ditambahkan <small><a href="{{route('daftar-surat')}}">lihat semua surat</a></small>
                        </div>
                    @endif
                        <form action="{{route('tambah-surat')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tanggal Diterima</label>
                                <input autocomplete="off" type="text" name="tanggal_diterima" class="form-control" data-provide="datepicker" data-date-autoclose="true">
                            </div>

                            <div class="form-group mb-3">
                                <label for="nomor_surat">Nomor Surat</label>
                                <input type="text" id="nomor_surat" name="nomor_surat" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Surat</label>
                                <input autocomplete="off" type="text" name="tanggal_surat" class="form-control" data-provide="datepicker" data-date-autoclose="true">
                            </div>

                            <div class="form-group mb-3">
                                <label for="pengirim_surat">Pengirim Surat</label>
                                <input type="text" id="pengirim_surat" name="pengirim_surat" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="mengenai">Mengenai/Perihal</label>
                                <input type="text" id="mengenai" name="perihal" class="form-control">
                            </div>

                            <label for="">Keterangan</label>
                            <fieldset>
                                <div class="form-group mb-3">
                                    <label for="nama_penerima">Penerima Disposisi</label>
                                    <input type="text" id="nama_penerima" name="nama_penerima" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Diterima</label>
                                    <input autocomplete="off" type="text" name="disposisi" class="form-control" data-provide="datepicker" data-date-autoclose="true">
                                </div>
                            </fieldset>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Catat Surat</button>
                            </div>


                        </form>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
@endsection()


@section('plugin-js')
    <!-- Plugins js-->
    <script src="{{url('/')}}/libs/flatpickr/flatpickr.min.js"></script>
    <script src="{{url('/')}}/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="{{url('/')}}/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
    <script src="{{url('/')}}/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <!-- Init js-->
    <script src="{{url('/')}}/js/pages/form-pickers.init.js"></script>
    @endsection
