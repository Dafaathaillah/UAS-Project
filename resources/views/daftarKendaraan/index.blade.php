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
                        <h5>DAFTAR KENDARAAN</h5>
                        <span>Daftar Kendaraan</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">DAFTAR KENDARAAN</a></li>
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
            <a class="btn btn-primary feather icon-plus" href="#">Tambah Kendaraan</a>
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
                                    <th>No</th>
                                    <th>Id Transaksi</th>
                                    <th>Tanggal_Masuk</th>
                                    <th>Tanggal_Keluar</th>
                                    <th>Id Kendaraan</th>
                                    <th>Nama Kendaraan</th>
                                    <th>Jumlah Masuk</th>
                                    <th>Jumlah Keluar</th>
                                    <th width="280px">Action</th>
                                </tr>

                                <tr>
                        
                                    <td> 1 </td>
                                    <td> 22232423231 </td>
                                    <td> # </td>
                                    <td> # </td>
                                    <td> 13232121121 </td>
                                    <td> ZABHU ZABHU </td>
                                    <td> 5000 TON </td>
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