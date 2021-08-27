@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Data Kredit</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Kredit</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Detail Data Kredit</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="tanggal_pinjam" class="col-sm-3 col-form-label">Tanggal Pinjam</label>
                                <div class="col-sm-9">
                                    <input type="date" disabled value="{{$kredit->tanggal_pinjam}}"
                                           class="form-control "
                                           id="tanggal_pinjam">
                                </div>
                            </div>
                            <div class="form-group row" wire:ignore>
                                <label for="anggota_id" class="col-sm-3 col-form-label">Nama Anggota</label>
                                <div class="col-sm-9">
                                    <input id="anggota_id" disabled class="form-control" value="{{$kredit->anggota->nama}}"
                                           type="text"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jangka_waktu" class="col-sm-3 col-form-label">Jangka Waktu</label>
                                <div class="col-sm-9">
                                    <input value="{{$kredit->jangka_waktu}} Bulan" placeholder="0" type="text"
                                           class="form-control "
                                           id="jangka_waktu" disabled
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Pinjaman</label>
                                <div class="col-sm-9">
                                    <input disabled class="form-control" id="jumlah"
                                           type="text" placeholder="0" value="@rp($kredit->jumlah)"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_angsuran" class="col-sm-3 col-form-label">Jumlah Angsuran</label>
                                <div class="col-sm-9">
                                    <input disabled class="form-control" id="jumlah_angsuran"
                                           type="text" placeholder="0" value="@rp($kredit->jumlah_ansuran)"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Status Pinjaman</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="tanggal_pinjam" class="col-sm-3 col-form-label">Status Validasi</label>
                                <div class="col-sm-9">
                                    <input type="text" disabled value="Belum Validasi"
                                           class="form-control "
                                           id="tanggal_pinjam">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_pinjam" class="col-sm-3 col-form-label">Status Otorisasi</label>
                                <div class="col-sm-9">
                                    <input type="text" disabled value="Belum Otorisasi"
                                           class="form-control "
                                           id="tanggal_pinjam">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection