<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Kredit</h4>
                    <div class="ml-auto card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" wire:model="search" name="search" class="form-control"
                                       placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="ml-auto card-header-action">
                        <a href="{{route('kredit.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                            Kredit</a>
                        <a href="{{route('laporan.kredit')}}" class="btn btn-primary"><i class="fa fa-file-export"></i> Laporan
                            Data Kredit</a>
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
                                <th>Aksi</th>
                            </tr>
                            @if($list_kredit->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center">Data anggota belum tersedia</td>
                                </tr>
                            @else
                                @foreach($list_kredit as $index => $kredit)
                                    <livewire:kredit.single :kredit="$kredit" :index="$index+1"
                                                            :key="time().$kredit->id"/>
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