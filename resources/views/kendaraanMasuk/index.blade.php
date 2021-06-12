@extends('layouts.layout.master')
@section('title')
    | DAFTAR KENDARAAN MASUK
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
            <a class="btn btn-primary feather icon-plus" href="{{ route('kendaraanmasuk.create') }}">Input Data Kendaraan Masuk</a>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                            <table class="table table-bordered">
                                <tr>
                                    <th>Nomer Rangka</th>
                                    <th>Nomer Mesin</th>
                                    <th>Type</th>
                                    <th>Jenis</th>
                                    <th>Warna</th>
                                    <th>Tahun Pembuatan</th>
                                    <th width="280px">Action</th>
                                </tr>

                                <tr>
                        
                                    <td> # </td>
                                    <td> # </td>
                                    <td> # </td>
                                    <td> # </td>
                                    <td> # </td>
                                    <td> # </td>
                                    <td>
                                        <form action="#" method="POST">
                                        <a class="btn btn-primary" href="#">Edit</a>
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection