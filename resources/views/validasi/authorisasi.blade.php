@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Data Kredit Authorisasi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Data Kredit Authorisasi</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Kredit Authorisasi</h4>
                            <div class="ml-auto card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                               placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Nama Anggota</th>
                                        <th>Jangka Waktu</th>
                                        <th>Jumlah Angsuran</th>
                                        <th>Jumlah Pinjaman</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @if($list_kredit->isEmpty())
                                        <tr>
                                            <td colspan="6" class="text-center">Data kredit yang harus di autorisasi
                                                belum tersedia</td>
                                        </tr>
                                    @else
                                        @foreach($list_kredit as $index => $kredit)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$kredit->tanggal_pinjam}}</td>
                                                <td>{{$kredit->anggota->nama}}</td>
                                                <td>{{$kredit->jangka_waktu}} Bulan</td>
                                                <td>@rp($kredit->jumlah_ansuran)</td>
                                                <td>@rp($kredit->jumlah)</td>
                                                <td>{{$kredit->authorisasi ? "Sudah Authorisasi" : "Belum
                                                Authorisasi"}}</td>
                                                <td>@if($kredit->authorisasi)
                                                        <a disabled class="btn btn-dark">Authorisasi</a>
                                                    @else
                                                        <a href="{{route('authorisasi.authorize', ['kredit' => $kredit])}}" class="btn
                                                       btn-primary">Authorisasi</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
