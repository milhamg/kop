<tr>
    <td>{{$index}}</td>
    <td>{{$kredit->tanggal_pinjam}}</td>
    <td>{{$kredit->anggota->nama}}</td>
    <td>{{$kredit->jangka_waktu}}</td>
    <td>@rp($kredit->jumlah_ansuran)</td>
    <td>@rp($kredit->jumlah)</td>
    <td>
        <a class="btn btn-sm btn-warning" href="{{route('kredit.show', ['kredit' => $kredit])}}">Lihat</a>
        <button class="btn btn-sm btn-danger" wire:click="hapus">Hapus</button>
    </td>
</tr>