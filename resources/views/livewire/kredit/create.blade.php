<div class="section-body">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Kredit</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="tanggal_pinjam" class="col-sm-3 col-form-label">Tanggal Pinjam*</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="tanggal_pinjam" type="date" class="form-control " id="tanggal_pinjam">
                        </div>
                    </div>
                    <div class="form-group row" wire:ignore>
                        <label for="anggota_id" class="col-sm-3 col-form-label">Nama Anggota*</label>
                        <div class="col-sm-9">
                            <select id="anggota_id" name="anggota_id" class="form-control select2">
                                <option selected>--- Pilih Nama Angota ---</option>
                                @foreach($list_anggota as $anggota)
                                    <option value="{{$anggota->id}}">{{$anggota->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jangka_waktu" class="col-sm-3 col-form-label">Jangka Waktu*</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="jangka_waktu" placeholder="0" type="number" class="form-control "
                                   id="jangka_waktu"
                                >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Pinjaman*</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="jumlah" class="form-control" id="jumlah"
                                      type="number" placeholder="0"/>
                        </div>
                    </div>
                </div>
                <div wire:click="simpan" class="card-footer text-right">
                    <button class="btn btn-primary">Simpan Data Kredit</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('javascript')
<script>
    $(document).ready(function () {
        $('.select2').on('change', function (e) {
            let elementName = $(this).attr('id');
            let data = $(this).select2("val");
            @this.set(elementName, data);
        });
    })
</script>
@endpush