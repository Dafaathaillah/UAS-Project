@extends('layouts.layout.master')

@section('title')
    | DAFTAR KENDARAAN
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-grid bg-c-blue"></i>
                <div class="d-inline">
                    <h5>MANAJEMEN DAFTAR KENDARAAN</h5>
                    <span>EDIT DAFTAR KENDARAAN</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Edit Daftar Kendaraan</a></li>
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
                                <h5>Form Edit Daftar Kendaraan</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <form method="post" action="#" id="myForm">
                        @csrf
                    @method('PUT') 
                    <div class="card">
                        <div class="card-header">
                            <h5>Form</h5>
                            <span>Add class of <code>.form-control</code> with
                                <code>&lt;input&gt;</code> tag</span>
                        </div>
                        <div class="card-block">
                            <form id="number_form" action="https://colorlib.com/"
                                method="post" novalidate>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NO</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="integer" id="integer" placeholder="NO">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Id Transaksi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="numeric" id="numeric" placeholder="Id Transaksi">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal_Masuk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Number" id="greater" placeholder="Tanggal_Masuk">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal_Keluar</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Number" id="greater" placeholder="Tanggal_Keluar">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Id Kendaraan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Number" id="greater" placeholder="Id Kendaraan">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Kendaraan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Number" id="greater" placeholder="Nama Kendaraan">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jumlah Masuk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Number" id="greater" placeholder="Jumlah Masuk">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jumlah Keluar</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Number" id="greater" placeholder="Jumlah Keluar">
                                        <span class="messages"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                            <div class="float-right my-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection