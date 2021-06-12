@extends('layouts.layout.master')

@section('title')
    | FORM KENDARAAN MASUK
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-grid bg-c-blue"></i>
                <div class="d-inline">
                    <h5>KENDARAAN MASUK</h5>
                    <span>Kendaraan Masuk</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">KENDARAAN MASUK</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h5>Form Edit Daftar Kendaraan Masuk</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <form method="post" action="#" id="myForm">
                        @csrf
                    @method('PUT') 
                            <div class="card">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Rangka</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="integer" id="integer" placeholder="No Rangka">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Mesin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="numeric" id="numeric" placeholder="No Mesin">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Type</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Number" id="greater" placeholder="Type">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Number" id="greater" placeholder="Id Kendaraan">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Warna</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Number" id="greater" placeholder="Warna">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tahun Pembuatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Number" id="greater" placeholder="Tahun Pembuatan">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Number" id="greater" placeholder="Tanggal Masuk">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right my-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-warning" href="{{ route('kendaraanmasuk.index') }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection