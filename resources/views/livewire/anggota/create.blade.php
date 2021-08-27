<div class="section-body">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Anggota</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Angota*</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="nama" type="text" class="form-control " id="nama"
                                   placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pangkat" class="col-sm-3 col-form-label">Pangkat*</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="pangkat" type="text" class="form-control " id="pangkat"
                                   placeholder="Pangkat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-3 col-form-label">No.Hp*</label>
                        <div class="col-sm-9">
                            <input wire:model.lazy="no_hp" type="text" class="form-control " id="no_hp"
                                   placeholder="No.Hp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat Lengkap*</label>
                        <div class="col-sm-9">
                            <textarea wire:model.lazy="alamat" class="form-control" id="alamat"
                                      placeholder="Alamat" rows="3000"></textarea>
                        </div>
                    </div>
                </div>
                <div wire:click="simpan" class="card-footer text-right">
                    <button class="btn btn-primary">Simpan Data Anggota</button>
                </div>
            </div>
        </div>
    </div>
</div>
