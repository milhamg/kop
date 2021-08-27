@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Edit Anggota</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Edit Anggota</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="{{route('anggota.update', ['anggota' => $anggota])}}" method="POST" >
                        @csrf
                        @method("PUT")
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Anggota</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama Angota*</label>
                                    <div class="col-sm-9">
                                        <input name="nama" value="{{$anggota->nama}}" type="text" class="form-control "
                                               id="nama"
                                               placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pangkat" class="col-sm-3 col-form-label">Pangkat*</label>
                                    <div class="col-sm-9">
                                        <input name="pangkat" type="text" value="{{$anggota->pangkat}}"
                                               class="form-control " id="pangkat"
                                               placeholder="Pangkat">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-sm-3 col-form-label">No.Hp*</label>
                                    <div class="col-sm-9">
                                        <input name="no_hp" value="{{$anggota->no_hp}}" type="text" class="form-control "
                                               id="no_hp"
                                               placeholder="No.Hp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat Lengkap*</label>
                                    <div class="col-sm-9">
                            <textarea name="alamat"  class="form-control" id="alamat"
                                      placeholder="Alamat" rows="3000">{{$anggota->alamat}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div  class="card-footer text-right">
                                <button class="btn btn-primary" type="submit">Simpan Data Anggota</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection