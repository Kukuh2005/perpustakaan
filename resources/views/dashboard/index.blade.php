@extends('layouts.app')

@section('content-header', 'Dashboard')

@section('title', 'Dashboard')

@section('content')
@if(auth()->user()->role == 'admin')
<div class="col-md-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Buku Tersedia</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$buku->count()}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-book fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        Request Pinjam</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$request->count()}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-question-circle fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Buku Kembali Hari Ini</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$buku_kembali->count()}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar-day fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if(auth()->user()->role == 'anggota')
<div class="col-md-6">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Transaksi Saat Ini</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$transaksi->count()}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        Buku Dipinjam</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$dipinjam->count()}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-book fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-2 col-md-12 mt-4">
    <h1 class="h3 mb-0 text-gray-800">Buku Dipinjam</h1>
</div>

@foreach($transaksi as $item)
<div class="col-lg-4 mb-4 mt-4">
    <div class="card shadow h-100">
        <div class="card-header bg-gradient-info">
            <h5 class="modal-title text-light"><strong>{{ $item->pustaka->judul_pustaka }}</strong></h5>
        </div>
        <div class="card-body">
            <img src="{{ asset('storage/' . $item->pustaka->gambar) }}" class="card-img-top mb-2"
                alt="Foto {{ $item->judul_pustaka }}" style="height: 250px; object-fit: cover;">
            <p class="card-text"><strong>Pengarang:</strong> {{ $item->pustaka->pengarang->nama_pengarang }}</p>
            <p class="card-text"><strong>Penerbit:</strong> {{ $item->pustaka->penerbit->nama_penerbit }}</p>
            <p class="card-text"><strong>Kategori:</strong> {{ $item->pustaka->format->format }}</p>
            <p class="card-text"><strong>Tahun Terbit:</strong> {{ $item->pustaka->tahun_terbit }}</p>
            <p class="card-text"><strong>Tanggal Kembali:</strong> {{ $item->tgl_kembali }}</p>
            <p class="card-text"><strong>Status:</strong> <span
                    class="badge {{ $item->fp == 0 ? 'badge-warning' : 'badge-info' }}">{{ $item->fp == 0 ? 'Dipinjam' : 'Request' }}</span>
            </p>
        </div>
        <div class="card-footer text-center">
        </div>
    </div>
</div>
@endforeach

<div class="d-sm-flex align-items-center justify-content-between mb-2 col-md-12 mt-4">
    <h1 class="h3 mb-0 text-gray-800">Riwayat Transaksi</h1>
</div>

<div class="col-md-12 mt-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-warning d-inline">Data Riwayat Transaksi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-sm-12">
                    <table class="table table-hover dataTable" id="dataTable" width="100%" cellspacing="0"
                        role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Buku</th>
                                <th>Pinjam</th>
                                <th>Kembali</th>
                                <th>Denda</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($riwayat as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->pustaka->judul_pustaka}}</td>
                                <td>{{$item->tgl_pinjam}}</td>
                                <td>{{$item->tgl_kembali}}</td>
                                <td>Rp.{{number_format($item->denda)}}</td>
                                <td>
                                    <span class="badge {{ $item->fp == 0 ? 'badge-warning' : '' }} {{ $item->fp == 1 ? 'badge-success' : '' }} {{$item->fp == 2 ? 'badge-danger' : ''}} {{ $item->fp == 3 ? 'badge-info' : '' }}">
                                    {{ $item->fp == 0 ? 'Dipinjam' : '' }}
                                    {{ $item->fp == 1 ? 'Selesai' : '' }}
                                    {{ $item->fp == 2 ? 'Hilang' : '' }}
                                    {{ $item->fp == 3 ? 'Request' : '' }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
