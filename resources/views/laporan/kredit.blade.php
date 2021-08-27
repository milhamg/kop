@extends('layouts.app')
@push('stylesheet')
    <style type="text/css">
        #isi{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: medium;
            border-collapse:collapse ;
            margin-top: 10px;
        }

        #isi, th,td{
            padding: 5px 10px;
        }

        .nominal{
            text-align: left;
        }
    </style>
@endpush
@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Laporan Data Kredit</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Laporan Data Kredit</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Laporan Data Kredit</h4>
                        </div>
                        <div class="card-body p-0">
                            <div id="print">
                                <div align="center">
                                    <table class="header" width="80%">
                                        <tr>
                                            <td>
                                                <img src="{{asset("sma.jpg")}}" width="120" height="120">
                                            </td>
                                            <td width="80%">
                                                <div align="center">
                                                    <span style="font-size: x-large; ">Koperasi SMAN 4 Cirebon</span><br>
                                                    <span style="font-size: x-large; ">Laporan Data Kredit Anggota</span><br>
                                                    <br>
                                                    <hr >
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="80%">
                                        <tr class="text2">
                                            <td>Total</td>
                                            <td width="90%">: {{$list_kredit->count()}}</td>
                                        </tr>
                                    </table >
                                    <table width="80%" border="1" id="isi" class="mt-4">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Pinjaman</th>
                                            <th>Nama Anggota</th>
                                            <th>Jangka Waktu</th>
                                            <th>Jumlah Anggaran</th>
                                            <th>Jumlah Pinjaman</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list_kredit as $index => $kredit)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$kredit->tanggal_pinjam}}</td>
                                                <td>{{$kredit->anggota->nama}}</td>
                                                <td>{{$kredit->jangka_waktu}}</td>
                                                <td class="nominal">@rp($kredit->jumlah_ansuran)</td>
                                                <td class="nominal">@rp($kredit->jumlah)</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button id="btn_print" onclick="printElement('print')" class="btn btn-primary">Print
                                Laporan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script>
        function printElement(idElement){
            let printContents = document.getElementById(idElement).innerHTML;
            let originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endpush