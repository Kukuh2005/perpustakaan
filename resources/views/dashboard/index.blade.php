@extends('layouts.app')

@section('content-header', 'Dashboard')

@section('title', 'Dashboard')

@section('content')
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
@endsection
